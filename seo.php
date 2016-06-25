<?
require_once($_SERVER['DOCUMENT_ROOT']."/include/const.php");
//require_once($_SERVER['DOCUMENT_ROOT']."/include/init.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мы создаем сайты | Just Space</title>
    <!--
        !Preload styles!
    -->
    <style>
        #preload{
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 99;
            background-color: #ffffff;
        }
        #preload .spinner{
            position: absolute;
            top: 45%;
            left: 45%;
            background-color: #ffffff;
        }
        #preload span{
            position: absolute;
            top: 52%;
            left: 44.5%;
            font-size: 18px;
        }
    </style>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">
</head>
<body>
<div id="preload">
    <img src="img/preloader.gif" class="spinner" alt="Идет загрузка сайта"> <span>Just Space</span>
</div>
<div class="popup">
    <div class="done">
        <div class="window">
            <p>Ваша заявка успешно отправлена, в ближайшее время с вами свяжется наш менеджер</p>
            <input class="close_window" type="button" value="Ок">
        </div>
    </div>
    <div class="error">
        <div class="window">
            <p>Произошла ошибка, попробуйте отправить снова</p>
            <input class="close_window" type="button" value="Ок">
        </div>
    </div>
</div>
<header class="img-seo">
    <div class="logo">
        <img src="/img/logo.png" height="30px" alt="Logo Just Space"> <span>Just Space</span>
    </div>
    <nav class="menu">
        <li><a href="index.php">Главная</a></li>
        <li><a href="#contacts">Контакты</a></li>
        <li><a href="#order">Оформить заказ</a></li>
    </nav>
    <div class="burger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="text text-3" style="opacity: 1;">
        Занимаемся продвижением сайтов
        <br>
        <a href="#order">
            Заказать
        </a>
    </div>
</header>
<main>
    <article id="order">
        <h2>Форма заказа</h2>
        <p>
            Ниже вы можете заполнить форму заказа, указав свое имя, почту и телефонный номер. Также желательно описать необходимую вам услугу.
        </p>
    </article>
    <article class="order">
        <form action="index.php" method="POST">
            <input name="name" type="text" id="name" <?php echo "value=\"".$_POST['name']."\""; ?> placeholder="ФИО" required><br><input name="email" type="email" id="email" <?php echo "value=\"".$_POST['email']."\""; ?> placeholder="Email" required><br><input name="telephone" type="tel" id="telephone" <?php echo "value=\"".$_POST['telephone']."\""; ?> placeholder="Телефон" required><br><select name="services" id="services"><option value="Создание дизайна">Создание дизайна</option><option value="Разработка сайта">Разработка сайта</option><option value="Продвижение и реклама" selected>Продвижение и реклама</option></select><br><textarea name="description" id="description" placeholder="Краткое описание задачи"><?php echo $_POST['description']; ?></textarea><br><input id="order_sub" type="submit" name="order_sub" value="Отправить заявку">
        </form>
    </article>
    <article id="contacts" class="map">
        <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=GQ40Uswl44098sFjsrwVflyKkHGcnW94&width=100%&height=350&lang=ru_RU&sourceType=constructor"></script>
    </article>
</main>
<footer>
    <div class="social">
        <h3>Найдите нас</h3>
        <ul>
            <li><i class="fa fa-vk"></i> <a href="https://vk.com/justspaceweb">Вконтакте</a></li>
            <li><i class="fa fa-twitter"></i> <a href="https://twitter.com/JustSpaceWeb">Twitter</a></li>
            <li><i class="fa fa-instagram"></i> <a href="https://www.instagram.com/justspaceweb/">Instagram</a></li>
        </ul>
    </div>
    <div class="contacts">
        <h3>Свяжитесь с нами</h3>
        <ul>
            <li>Телефон: <a href="tel:+79202762950">+7 (920) 276-29-50</a></li>
            <li>Email: <a href="mailto:info@just-space.ru">info@just-space.ru</a></li>
            <li>Адрес: <span>Пр. Ленина 77, оф. 404</span></li>
        </ul>
</footer>
<a id="up" href="#">^</a>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter36674620 = new Ya.Metrika({ id:36674620, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/36674620" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<script src="/libs/jquery.js"></script>
<script src="/js/script.js"></script>
</body>
</html>