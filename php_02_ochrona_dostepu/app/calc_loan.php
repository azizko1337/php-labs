<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../config.php';
require_once dirname(__FILE__) . '/auth/secured.php';

//pobranie danych
$amount = $_POST['amount'];
$years = $_POST['years'];
$percentage = $_POST['percentage'];

// walidacja
if (!(isset($amount) && isset($years) && isset($percentage))) {
    $messages_loan[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ($amount == "") {
    $messages_loan[] = 'Nie podano wysokosci kredytu';
}
if ($years == "") {
    $messages_loan[] = 'Nie podano dlugosci kredytu';
}
if ($percentage == "") {
    $messages_loan[] = 'Nie podano oprocentowania kredytu';
}

if (empty($messages_loan)) {
    if (!is_numeric($amount)) {
        $messages_loan[] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if (!is_numeric($years)) {
        $messages_loan[] = 'Druga wartość nie jest liczbą całkowitą';
    }
    if (!is_numeric($percentage)) {
        $messages_loan[] = 'Druga wartość nie jest liczbą całkowitą';
    }

}


//logika
if (empty($messages_loan)) { // gdy brak błędów

    //konwersja parametrów na int
    $amount = intval($amount);
    $years = intval($years);
    $percentage = intval($percentage);

    $payment = ($amount + $amount * $percentage / 100) / $years / 12;
    $payment = round($payment, 2);
}

include 'calc_view.php';