<?php

include_once ('model/emails.php');
include_once ('core/arr.php');
session_start();

if (!$_SESSION['login']) {
    header('Location:index.php');
    die();
}

if ($_POST['news']) {
    $params = extractFields($_POST, ['news']);
    $news = insertNews($params);
}

if ($news) {
    $emails = selectEmail();
    foreach ($emails as $email) {
        mail($email, 'Новая новость', 'Тут текст новой новости')ж
    }
}

?>


<form method="post">
    <textarea name="news" id="" cols="30" rows="10"></textarea>
    <input type="submit">
</form>
