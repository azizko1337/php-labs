<?php require_once dirname(__FILE__) . '/auth/check.php'; ?>
<?php require_once dirname(__FILE__) . '/../config.php'; ?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
    integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">

<head>
    <meta charset="utf-8" />
    <title>Kalkulator</title>
</head>

<body>
    <nav>
        <a class="pure-button" href="<?php print (_APP_URL); ?>/app/auth/logout.php">Wyloguj</a>
    </nav>

    <h1>Kalkulator kredytowy</h1>

    <form class="pure-form pure-form-stacked" action="<?php print (_APP_URL); ?>/app/loan.php" method="post">
        <label for="amount">Kwota kredytu:</label>
        <input id="amount" name="amount" type="number" value="<?php out($amount) ?>">
        <label for="years">Dlugosc (w latach):</label>
        <input id="years" name="years" type="number" value="<?php out($years) ?>">
        <label for="percentage">Oprocentowanie:</label>
        <input id="percentage" name="percentage" type="number" value="<?php out($percentage) ?>">
        <input class="pure-button" value="Oblicz" type="submit">
    </form>

    <?php
    if (isset ($messages)) {
        if (count($messages) > 0) {
            echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
            foreach ($messages as $key => $msg) {
                echo '<li>' . $msg . '</li>';
            }
            echo '</ol>';
        }
    }
    ?>

    <?php if (isset ($result)) { ?>
        <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
            <?php echo 'Wynik: ' . $result . 'PLN miesiecznie.'; ?>
        </div>
    <?php } ?>
</body>

</html>