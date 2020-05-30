<?php
include_once ('model/emails.php');
include_once ('core/arr.php');
session_start();

if ($_POST['login']) {
    $params = extractFields($_POST, ['login', 'password']);
    $admin = selectAdmin($params);
    if ($admin) {
        $_SESSION['login'] = $params['login'];
        $_SESSION['password'] = $params['password'];

        header('Location:administration.php');
    }

}

?>


<form method="post">
    <input type="text" name="login" required><br>
    <input type="password" name="password" required><br>
    <input type="submit">
</form>
