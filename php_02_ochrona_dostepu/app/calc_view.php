<?php

require_once dirname(__FILE__) . '/../config.php';
require_once dirname(__FILE__) . '/auth/secured.php';

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
		integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>

<body>
	<a class="pure-button" href="<?php print(_APP_URL) ?>/app/auth/logout.php">Wyloguj</a>

	<h1>Kalkulator liczb</h1>

	<form class="pure-form pure-form-stacked" action="<?php print(_APP_URL); ?>/app/calc.php" method="post">
		<label for="id_x">Liczba 1: </label>
		<input id="id_x" type="text" name="x" value="<?php print($x ?? ""); ?>" />
		<label for="id_op">Operacja: </label>
		<select name="op">
			<option value="plus">+</option>
			<option value="minus">-</option>
			<option value="times">*</option>
			<option value="div">/</option>
		</select>
		<label for="id_y">Liczba 2: </label>
		<input id="id_y" type="text" name="y" value="<?php print($y ?? ""); ?>" />
		<input class="pure-button" type="submit" value="Oblicz" />
	</form>

	<?php
	//wyświeltenie listy błędów, jeśli istnieją
	if (isset($messages)) {
		if (count($messages) > 0) {
			echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
			foreach ($messages as $key => $msg) {
				echo '<li>' . $msg . '</li>';
			}
			echo '</ol>';
		}
	}
	?>

	<?php if (isset($result)) { ?>
		<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
			<?php echo 'Wynik: ' . $result; ?>
		</div>
	<?php } ?>

	<hr>

	<!-- MOJA CZESC ZADANIA -->
	<h1>Kalkulator kredytowy</h1>

	<form class="pure-form" action="<?php print(_APP_URL); ?>/app/calc_loan.php" method="post"
		style="display:grid; grid-template-columns: 200px 200px;">
		<label for="amount">Kwota kredytu:</label>
		<input id="amount" name="amount" type="number" value="<?php print($amount ?? "") ?>">
		<label for="years">Dlugosc (w latach):</label>
		<input id="years" name="years" type="number" value="<?php print($years ?? "") ?>">
		<label for="percentage">Oprocentowanie:</label>
		<input id="percentage" name="percentage" type="number" value="<?php print($percentage ?? "") ?>">
		<input class="pure-button" value="Oblicz" type="submit">
	</form>

	<?php
	if (isset($messages_loan)) {
		if (count($messages_loan) > 0) {
			echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
			foreach ($messages_loan as $key => $msg) {
				echo '<li>' . $msg . '</li>';
			}
			echo '</ol>';
		}
	}
	?>

	<?php if (isset($payment)) { ?>
		<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
			<?php echo 'Wynik: ' . $payment . 'PLN miesiecznie.'; ?>
		</div>
	<?php } ?>
</body>

</html>