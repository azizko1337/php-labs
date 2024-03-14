<?php
// tylko zalogowany user lub wyzej może zobaczyć stronę
require_once dirname(__FILE__) . '/../auth/controllers/secured_user.php';

// KONTROLER strony kalkulatora
require_once dirname(__FILE__) . '/../../config.php';

// 1. pobranie parametrów

$x = $_REQUEST['x'] ?? "";
$y = $_REQUEST['y'] ?? "";
$operation = $_REQUEST['op'] ?? "";

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
if ($x == "") {
	$messages[] = 'Nie podano liczby 1';
}
if ($y == "") {
	$messages[] = 'Nie podano liczby 2';
}
if ($operation == "") {
	$messages[] = 'Nie podano operacji';
}

if (empty($messages)) {
	if (!is_numeric($x)) {
		$messages[] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (!is_numeric($y)) {
		$messages[] = 'Druga wartość nie jest liczbą całkowitą';
	}
}

// 3. wykonaj zadanie jeśli wszystko w porządku
if (empty($messages)) { // gdy brak błędów
	$x = intval($x);
	$y = intval($y);

	switch ($operation) {
		case 'minus':
			$result = $x - $y;
			break;
		case 'times':
			$result = $x * $y;
			break;
		case 'div':
			$result = $x / $y;
			break;
		default:
			$result = $x + $y;
			break;
	}
}


include dirname(__FILE__) . '/../views/calc_view.php';