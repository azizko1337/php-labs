<?php require_once dirname(__FILE__) . '/../../config.php'; ?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Kalkulator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>

<body>
    <h1>Logowanie</h1>

    <form class="pure-form pure-form-stacked" action="<?php print(_APP_URL); ?>/app/auth/login.php" method="post">
        <label for="login">Login: </label>
        <input id="login" type="text" name="login" value="<?php print($x ?? ""); ?>" />
        <label for="password">Hasło: </label>
        <input id="password" type="password" name="password" value="" />
        <input class="pure-button" type="submit" value="Zaloguj" />
    </form>

    <?php
    //wyświeltenie listy błędów logowania
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



</body>

</html>