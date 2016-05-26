<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/init.php");

    $CUser = new User();
    $CUser->AddUser($_POST["login"], $_POST["password"], $_POST["name"], $_POST["email"], $_POST["rights"]);
?>