<?php
include_once ('model/emails.php');
include_once ('core/arr.php');

if ($_POST['email']) {
    $email = extractFields($_POST, ['email']);
    $insert = insertEmail($email);
}

?>

<form method="post">
    <input type="email" name="email" required>
    <input type="submit">
</form>
