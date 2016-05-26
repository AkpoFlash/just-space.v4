<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/init.php");

    if(access_to_admin_panel($_SESSION["user"])){
        write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
    }
    else{
        redirect_to("http://just-space.v4/admin/index.php");
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/admin.menu.php");
?>
    <script src="/libs/jquery.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
