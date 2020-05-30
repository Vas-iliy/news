<?php
include_once ('model/emails.php');
include_once ('core/arr.php');

if ($_POST['email']) {
    $email = extractFields($_POST, ['email']);
    $validation = validate($email);
    if (empty($validation)) {
        $insert = insertEmail($email);
    }
} else {
    $validation = [];
}

?>

<div>
    <?foreach ($validation as $value):?>
    <p><?=$value?></p>
    <?endforeach;?>
</div>
<form method="post">
    <input type="email" name="email" required>
    <input type="submit">
</form>
