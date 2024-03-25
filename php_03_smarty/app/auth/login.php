<?php

require_once dirname(__FILE__) . '/../../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//zalogowany - przekieruj na stronę główną
if(isset($_SESSION['role'])) {
    header("Location: " . _APP_URL);
    exit();
}

function getParamsLogin(&$form)
{
    $form["login"] = $_REQUEST['login'] ?? null;
    $form["password"] = $_REQUEST['password'] ?? null;
}

function validateLogin(&$form, &$messages)
{
    if (!(isset ($form['login']) && isset ($form['password'])))
        return false;

    if ($form['login'] == "")
        $messages[] = 'Nie podano loginu';

    if ($form['password'] == "")
        $messages[] = 'Nie podano hasła';

    if (count($messages) > 0)
        return false;

    if ($form['login'] == "admin" && $form['password'] == "admin") {
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }
    if ($form['login'] == "user" && $form['password'] == "user") {
        session_start();
        $_SESSION['role'] = 'user';
        return true;
    }

    $messages[] = 'Nieprawidłowy login lub hasło';
    return false;
}

$form = array();
$messages = array();

getParamsLogin($form);

if (!validateLogin($form, $messages)) {
    $smarty = new Smarty();

    $smarty->assign('app_url', _APP_URL);
    $smarty->assign('page_title', 'Logowanie');
    $smarty->assign("messages", $messages);
    $smarty->assign('login', $form["login"]);
    $smarty->assign("logged_in", 0);
    $smarty->assign("page", "login");

    $smarty->display(_ROOT_PATH.'/app/auth/login.tpl');

    exit();
}

header("Location: " . _APP_URL);
