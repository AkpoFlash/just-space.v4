<?
    require_once($_SERVER['DOCUMENT_ROOT']."/include/const.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/include/init.php");

    $dbRes = new User();

    if(isset($_POST["authorization_sub"])){
        write_to_log("/logs/access.txt", "Введен логин: ".$_POST["login"]."\n");
        if($dbRes->Authorization($_POST["login"], $_POST["password"])){
            redirect_to("http://just-space.v4/admin/admin_panel/index.php");
        }
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="authorization">
        <form action="index.php" method="POST">
            <input type="text" name="login" placeholder="Логин" required>
            <input type="password" name="password" placeholder="Пароль" required>
            <input type="submit" value="Войти" name="authorization_sub">
        </form>
    </div>
    <script src="/libs/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
