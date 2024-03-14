<?php require_once dirname(__FILE__) . '/../../config.php'; ?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Kalkulator</title>
</head>

<body>
    <nav>
        <a href="<?php print(_APP_URL); ?>/app/views/calc_view.php">Kalkulator liczbowy</a>
        <a href="<?php print(_APP_URL); ?>/app/views/loan_view.php">Kalkulator kredytowy</a>
    </nav>

    <h1>Kalkulator kredytowy</h1>

    <form action="<?php print(_APP_URL); ?>/app/controllers/loan.php" method="post"
        style="display:grid; grid-template-columns: 200px 200px;">
        <label for="amount">Kwota kredytu:</label>
        <input id="amount" name="amount" type="number" value="<?php print($amount ?? "") ?>">
        <label for="years">Dlugosc (w latach):</label>
        <input id="years" name="years" type="number" value="<?php print($years ?? "") ?>">
        <label for="percentage">Oprocentowanie:</label>
        <input id="percentage" name="percentage" type="number" value="<?php print($percentage ?? "") ?>">
        <input value="Oblicz" type="submit">
    </form>

    <?php
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
            <?php echo 'Wynik: ' . $result . 'PLN miesiecznie.'; ?>
        </div>
    <?php } ?>
</body>

</html>