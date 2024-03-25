<?php

require_once dirname(__FILE__)."/../config.php";
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

// zabezpieczona
include dirname(__FILE__) . '/auth/check.php';


function getParams(&$amount, &$years, &$percentage)
{
    $amount = isset ($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $years = isset ($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $percentage = isset ($_REQUEST['percentage']) ? $_REQUEST['percentage'] : null;
}

function validate(&$amount, &$years, &$percentage, &$messages, &$infos)
{
    //szczegolny przypadek
    if (!isset ($amount) || !isset ($years) || !isset ($percentage))
        return false;

    $infos[] = 'Przekazano parametry.';

    //czy puste
    if (empty ($amount))
        $messages[] = "Nie podano kwoty kredytu.";

    if (empty ($years))
        $messages[] = "Nie podano długości kredytu.";

    if (empty ($percentage))
        $messages[] = "Nie podano oprocentowania.";

    if (count($messages) > 0)
        return false;

    //czy liczby
    if (!is_numeric($amount))
        $messages[] = "Kwota kredytu nie jest liczbą.";
    if (!is_numeric($years))
        $messages[] = "Długość kredytu nie jest liczbą.";
    if (!is_numeric($percentage))
        $messages[] = "Oprocentowanie nie jest liczbą.";

    if (count($messages) > 0)
        return false;

    //czy dodatnie
    if (intval($amount) <= 0)
        $messages[] = "Kwota kredytu musi być większa od zera.";
    if (intval($years) <= 0)
        $messages[] = "Długość kredytu musi być większa od zera.";
    if (intval($percentage) <= 0)
        $messages[] = "Oprocentowanie musi być większe od zera. Bank nie moze tracic.";

    if (count($messages) > 0)
        return false;


    //koncowo prawda
    return true;
}

function process(&$amount, &$years, &$percentage, &$messages, &$infos, &$result)
{
    global $role;

    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    $amount = intval($amount);
    $years = intval($years);
    $percentage = intval($percentage);

    if ($amount > 100000 && $role != 'admin') {
        $messages[] = "Kwota kredytu jest zbyt wysoka dla zwyklego uzytkownika.";
        return;
    }

    $result = ($amount + $amount * $percentage / 100) / $years / 12;
}


$amount = null;
$years = null;
$percentage = null;
$result = null;
$messages = array();
$infos = array();


getParams($amount, $years, $percentage);
if (validate($amount, $years, $percentage, $messages, $infos)) { // gdy brak błędów
    process($amount, $years, $percentage, $messages, $infos, $result);
}

//logowanie
$logged_in = !empty($role);


$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('page_title', 'Kalkulator kredytowy');

$smarty->assign('amount', $amount);
$smarty->assign('years', $years);
$smarty->assign('percentage', $percentage);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos',$infos);

$smarty->assign('logged_in', $logged_in);
$smarty->assign("page", "loan");

$smarty->display(_ROOT_PATH.'/app/loan.tpl');