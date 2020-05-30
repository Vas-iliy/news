<?php
include_once('core/db.php');

function selectEmail () {
    $sql = "SELECT email FROM emails ";
    $data = dbQuery($sql, null);
    $data = $data->fetchAll();

    return $data;
}

function selectAdmin ($params) {
    $login = $params['login'];
    $password = $params['password'];
    $sql = "SELECT login, password FROM admin WHERE login = '$login' AND password = '$password' ";
    $data = dbQuery($sql, null);
    $data = $data->fetch();

    return $data;
}

function insertNews($params) {
    $sql = "INSERT INTO news (news) VALUE (:news)";
    $data = dbQuery($sql, $params);

    return true;
}

function insertEmail ($params) {
    $sql = "INSERT INTO emails (email) VALUE (:email)";
    $data = dbQuery($sql, $params);

    return true;
}


/*function insertStateUpdate ($params, $id) {
    $sql = "UPDATE articles SET title = :title, content = :content, newTime = current_timestamp, redact = '1' WHERE id = '$id'";
    $data = dbQuery($sql, $params);

    return true;
}

function deleteState ($id) {
    $sql = "DELETE FROM articles WHERE id = '$id'";
    $data = dbQuery($sql, null);

    return true;
}

function validate (&$params) {
    $errors =[];
    if (mb_strlen($params['title'], 'UTF-8') < 3) {
        $errors[] = 'Слишком короткое название статьи';
    }

    if (mb_strlen($params['content'], 'UTF-8') < 10) {
        $errors[] = 'Слишком короткий текст статьи';
    }

    $params['title'] = htmlspecialchars($params['title']);
    $params['content'] = htmlspecialchars($params['content']);
    return $errors;
}

function thisState($id) {
    $sql = "SELECT id FROM articles WHERE id = '$id'";
    $data = dbQuery($sql, null);
    $data = $data->fetch();

    return $data;
}*/