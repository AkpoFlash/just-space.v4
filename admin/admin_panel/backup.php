<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/const.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/init.php");

    if(access_to_admin_panel($_SESSION["user"])){
        write_to_log("/logs/actions.txt", $_SESSION["user"]." посетил страницу ".$_SERVER["SCRIPT_FILENAME"]."\n");
    }
    else{
        redirect_to("http://just-space.v4/admin/index.php");
    }

    $CFile = new File();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?
    require_once($_SERVER['DOCUMENT_ROOT'] . "/include/admin.menu.php");
?>
    <h3>Список резервных копий</h3>
    <table class="table">
        <tr>
            <td>№</td>
            <td>Файл</td>
            <td>Размер</td>
            <td>Создан</td>
        </tr>
        <?php

        $arFile = $CFile->GetList(
            array("id" => "ASC"),
            array(),
            array()
        );
        foreach($arFile as $id => $file){
            ?>
            <tr>
                <td><?=$id+1?></td>
                <td><a href="<?=DB_BACKUP.$file["NAME"]?>" download><?=$file["NAME"]?></a></td>
                <td><?=$file["SIZE"]?> Кб</td>
                <td><?=$file["TIME"]?></td>
            </tr>
            <?
        }
        ?>
    </table>
<script src="/libs/jquery.js"></script>
<script src="../js/script.js"></script>
</body>
</html>
