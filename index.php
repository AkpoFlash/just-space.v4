<?
    require_once($_SERVER['DOCUMENT_ROOT']."/include/const.php");
    //require_once($_SERVER['DOCUMENT_ROOT']."/include/init.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
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
	<header>
		<div class="logo">
            <img src="/img/logo.png" height="30px" alt="Logo Just Space"> <span>Just Space</span>
		</div>
		<nav class="menu">
			<li><a href="#about">О нас</a></li>
			<li><a href="#service">Услуги</a></li>
			<li><a href="#portfolio">Наши работы</a></li>
			<li><a href="#review">Отзывы клиентов</a></li>
			<li><a href="#contacts">Контакты</a></li>
			<li><a href="#order">Оформить заказ</a></li>
		</nav>
		<div class="text text-1">
 			Разрабатываем уникальный дизайн
 			<br>
		 	<a href="#order">
				Заказать
			</a>
 		</div>
 		<div class="text text-2">
 			Создаем удобные сайты
 			<br>
		 	<a href="#order">
				Заказать
			</a>
 		</div>
 		<div class="text text-3">
 			Занимаемся продвижением сайтов
 			<br>
		 	<a href="#order">
				Заказать
			</a>
 		</div>
		<div class="left-arrow">&lt;</div>
		<div class="right-arrow">&gt;</div>
	</header>
	<main>
		<article id="about">
			<h2>Веб студия Just Space</h2>
			<p>
                Мы специализируемся на создание качественного продукта созданного нами от начала и до конца: создаем дизайн ориентируясь на желания заказчика, разрабатываем сайт используя современные технологии, продвигаем в поисковых системах используя передовые методики SEO оптимизации.
			</p>
		</article>
		<article class="abouts">
			<div class="about about-1">
				<img src="img/homepage11.jpg">
				<div class="promo">
					<div class="promo-title">
						Качество работы
					</div>
					<div class="promo-text">
                        Главное отличие нашей компании от других, это желание обеспечить высокий уровень качества на всех этапах разработки.
                        <br>
                        Мы стремимся создавать идеальные сайты.
					</div>
				</div>
			</div>
			<div class="about about-2">
				<img src="img/mac-headphone.jpg">
				<div class="promo">
					<div class="promo-title">
						Привлекательный продукт
					</div>
					<div class="promo-text">
                        В первую очередь сайт должен привлекать клиентов и показывать ваши лучшие стороны, поэтому независимо от рода деятельности ваш сайт обязан быть привлекательным.
                        <br>
                        Мы создаем действительно красивые сайты.
					</div>
				</div>
			</div>
			<div class="about about-3">
				<img src="img/sample-slider-2.jpg">
				<div class="promo">
					<div class="promo-title">
						Техническая поддержка
					</div>
					<div class="promo-text">
                        Любой продукт рано или поздно нуждается в улучшение и развитие, поэтому немаловажным фактором является дальнейшее сопровождение или модернизация уже готового сайта.
                        <br>
                        Мы постоянно улучшаем сайты.
                    </div>
				</div>
			</div>
		</article>
		<table class="develops">
			<tr>
				<td><i class="fa fa-code"></i></td>
				<td><i class="fa fa-internet-explorer"></i></td>
				<td><i class="fa fa-cogs"></i></td>
				<td><i class="fa fa-eye"></i></td>
			</tr>
			<tr>
				<td>Адаптивный дизайн</td>
				<td>Кросбраузерность</td>
				<td>Современные технологии</td>
				<td>Документация</td>
			</tr>
			<tr>
				<td>
                    Обеспечиваем удобное отображение сайтов на всех устройствах: компьютерах, планшетах и телефонах.
				</td>
				<td>
                    Мы можем снабдить сайты поддержкой даже устаревших браузеров - Internet Explorer версии 8 и ниже.
				</td>
				<td>
                    Стараясь использовать только лучшие решения, мы внедряем новые технологии в наши проекты.
				</td>
				<td>
                    Наша команда стремиться документировать код и соблюдать принятые стандарты, что позволяет работать лучше.
				</td>
			</tr>
		</table>
		<article id="service">
			<h2>Наши услуги</h2>
			<p>
				Мы создаем успешные сайты для вашего бизнеса! Предоставляем большой набор услуг по созданию, продвижению и улучшению сайтов. Сайты созданные нами действительно приносят прибыль.
			</p>
		</article>
		<article class="services">
			<div class="service design">
				<div class="promo">
					<div class="promo-title">
						Дизайн сайта
					</div>
					<div class="promo-text">
						Вам необходимо создать уникальный дизайн сайта или воспользоваться шаблонным, но подстроенным точно под вас решением? Тогда вы пришли по адресу.
						<a href="#">
							Подробнее
						</a>
					</div>
				</div>
			</div>
			<div class="service develop">
				<div class="promo">
					<div class="promo-title">
						Создание сайта
					</div>
					<div class="promo-text">
						Занимаемся созданием сайтов любой сложности: корпоративные сайты, сайты-визитки, интернет-магазины, лендинги и другие виды сайтов.
						<a href="#">
							Подробнее
						</a>
					</div>
				</div>
			</div>
			<div class="service seo">
				<div class="promo">
					<div class="promo-title">
						Продвижение сайта
					</div>
					<div class="promo-text">
						Поможем поднять сайт на первые позиции поисковой выдачи. Контекстная реклама, SEO продвижение, продвижение в социальных сетях и многое другое.
						<a href="#">
							Подробнее
						</a>
					</div>
				</div>
			</div>
		</article>
		<article class="video">
			<iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/CdsHZh4XZMo" frameborder="0" allowfullscreen></iframe>
			<div class="promo">
				<div class="promo-title">Уровень нашей специализации</div>
				<article class="skills">
					<div class="skill skill-1">
						<span class="percent">0</span>
						<span class="skill-text">Дизайн</span>
						<canvas id="design"></canvas>
					</div>
					<div class="skill skill-2">
						<span class="percent">0</span>
						<span class="skill-text">Разработка</span>
						<canvas id="develop"></canvas>
					</div>
					<div class="skill skill-3">
						<span class="percent">0</span>
						<span class="skill-text">Продвижение</span>
						<canvas id="seo"></canvas>				
					</div>
				</article>
			</div>
		</article>
		<article id="portfolio">
			<h2>Наши работы</h2>
			<p>
                Вы можете ознакомиться с нашими работами, представленной ниже проекты выполнены полностью нами, с момента создания шаблона, до момента появления сайта на первых позициях поисковой выдачи.
			</p>
		</article>
		<article class="portfolio">
				<div id="slider-wrap">
					<div class="slider" id="slider">
						<div class="slide"><a href="http://bmw-auto.esy.es/" target="_blank"><img src="img/slider/bmw-auto.jpg" alt="bmw-auto.ru"></a></div>
						<div class="slide"><img src="img/slider/tul-flat.jpg" alt="tul-flat.ru"></div>
						<div class="slide"><img src="img/slider/taxi-house.jpg" alt="taxi-house.ru"></div>
						<div class="slide"><a href="http://mwcorp.ru/" target="_blank"><img src="img/slider/mwcorp.jpg" alt="mwcorp.ru"></a></div>
		                <div class="slide"><a href="http://cooking.mwcorp.ru/" target="_blank"><img src="img/slider/cooking.jpg" alt="mwcorp-cooking.ry"></a></div>
						<div class="slide"><a href="http://xn----8sbk2abp4ai9h.xn--p1ai/" target="_blank"><img src="img/slider/doly-tula.jpg" alt="doly-tula.ru"></a></div>
		                <div class="slide"><a href="http://www.gazel-traffic.ru/" target="_blank"><img src="img/slider/gazel-traffic.jpg" alt="gazel-traffic.ru"></a></div>
					</div>
                    <div class="left-arrow">&lt;</div>
                    <div class="right-arrow">&gt;</div>
				</div>
		</article>
		<table class="counting">
			<tr>
				<td><i class="fa fa-briefcase"></i></td>
				<td><i class="fa fa-users"></i></td>
				<td><i class="fa fa-certificate"></i></td>
			</tr>
			<tr>
				<td>Проектов</td>
				<td>Клиентов</td>
				<td>Сертификатов</td>
			</tr>
			<tr>
				<td class="projects-count">0</td>
				<td class="clients-count">0</td>
				<td class="certificates-count">0</td>
			</tr>
		</table>
		<article id="review">
			<h2>Отзывы наших клиентов</h2>
		</article>
		<article class="reviews">
			<div class="review review-1">
				<p>
                    Впервые я обратился к веб-студии Just Space в 2010 году с задачей разработать с нуля сайт-визитку рекламирующую услуги по грузоперевозкам на газели, а также продвинуть данный сайт на первые позиции поисковой выдачи.
                </p>
				<p>
                    В итоге я оказался полностью удовлетворен результатами работы, все поставленные задачи выполнены, а по ключевым словам сайт занимает лидирующие позиции, также была оказана дополнительная услуга по размещению контекстной рекламы. При расширение планирую вновь заказать работу в веб-студии Just Space.
                </p>
				<span class="signature">
					Андрей компания &laquo;Gazell-Traffic&raquo;
				</span>
			</div>
			<div class="review review-2">
				<p>
                    Наша фирма работает на рынке с 1997 года и долгое время мы имели только основной корпоративный сайт, но в какой то момент было принято решение создать тематические лендинги для повышения продаж. Просмотрев действующие предложения выбрали студию Just Space, в первую очередь из-за привлекательной цены, быстрых сроков и рекомендаций знакомых. Первый макет был готов уже на следующий день, еще сутки работал копирайтер, в итоге через три дня сайт был полностью готов. После этого также договорились о создание контекстной рекламы и поисковом продвижение. В данный момент компания Just Space предоставляет нам техническую поддержку полностью удовлетворяющую наши нужды.
				</p>
				<span class="signature">
					Андрей компания &laquo;Тульский центр недвижимости&raquo;
				</span>
			</div>
			<div class="review review-3">
				<p>
                    Наткнулся на этих ребят совершенно случайно, я тогда только начинал заниматься дизайном и решил сам сделал макет для своего сайта. Сделать то сделал, а создать сайт некому, начал поиски опрашивая знакомых и вот мне порекомендовали обратиться к ним. После пары встреч обсудили все детали и началась работа, в результате создали крутой сайт учтя все мои пожелания. Спасибо!
				</p>
				<span class="signature">
					Максим компания &laquo;MaxWhere Corporation&raquo;
				</span>
			</div>
			<div class="left-arrow">&lt;</div>
			<div class="right-arrow">&gt;</div>
		</article>	
		<article class="clients">
			<img src="img/1.png" alt="">
			<img src="img/2.png" alt="">
			<img src="img/3.png" alt="">
			<img src="img/4.png" alt="">
			<img src="img/5.png" alt="">
		</article>
		<article id="order">
			<h2>Форма заказа</h2>
			<p>
				Ниже вы можете заполнить форму заказа, указав свое имя, почту и телефонный номер. Также желательно описать необходимую вам услугу.
			</p>
		</article>
		<article class="order">
			<form action="index.php" method="POST">
				<input name="name" type="text" id="name" <?php echo "value=\"".$_POST['name']."\""; ?> placeholder="ФИО" required><br><input name="email" type="email" id="email" <?php echo "value=\"".$_POST['email']."\""; ?> placeholder="Email" required><br><input name="telephone" type="tel" id="telephone" <?php echo "value=\"".$_POST['telephone']."\""; ?> placeholder="Телефон" required><br><textarea name="description" id="description" placeholder="Краткое описание задачи"><?php echo $_POST['description']; ?></textarea><br><input id="order_sub" type="submit" name="order_sub" value="Отправить заявку">
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
				<li><i class="fa fa-twitter"></i> <a href="https://twitter.com/Space_Develop">Twitter</a></li>
				<li><i class="fa fa-facebook"></i> <a href="https://www.facebook.com/groups/931393063615918/">Facebook</a></li>
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
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</body>
</html>