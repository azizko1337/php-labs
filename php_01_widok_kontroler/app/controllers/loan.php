<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../../config.php';

//pobranie danych
$amount = $_POST['amount'] ?? "";
$years = $_POST['years'] ?? "";
$percentage = $_POST['percentage'] ?? "";

// walidacja
if ($amount == "") {
    $messages[] = 'Nie podano wysokosci kredytu';
}
if ($years == "") {
    $messages[] = 'Nie podano dlugosci kredytu';
}
if ($percentage == "") {
    $messages[] = 'Nie podano oprocentowania kredytu';
}

if (empty($messages)) {
    if (!is_numeric($amount)) {
        $messages[] = 'Pierwsza wartość nie jest liczbą całkowitą';
    }

    if (!is_numeric($years)) {
        $messages[] = 'Druga wartość nie jest liczbą całkowitą';
    }
    if (!is_numeric($percentage)) {
        $messages[] = 'Druga wartość nie jest liczbą całkowitą';
    }

}


//logika
if (empty($messages)) { // gdy brak błędów
    $amount = intval($amount);
    $years = intval($years);
    $percentage = intval($percentage);
    if ($amount <= 0 || $years <= 0) {
        $messages[] = "Kwota kredytu i długość kredytu musza byc wieksze od zera.";
    } else {
        $result = ($amount + $amount * $percentage / 100) / $years / 12;
        $result = round($result, 2);
    }
}

include dirname(__FILE__) . '/../views/loan_view.php';