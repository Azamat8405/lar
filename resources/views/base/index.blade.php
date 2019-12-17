<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>{{$title}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="/assets/css/ch_main.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">
			<header id="header" class="alt">
				<h1><a href="/">Владикавказская академия спорта</a></h1>
				
   				@include('base.menu')
			</header>

			<section id="banner">
				<div class="inner">
					<h2>Владикавказская академия спорта</h2>
					<!--
						<p>Another fine responsive<br />
						site template freebie<br />
						crafted by <a href="">HTML5 UP</a>.</p>

					<ul class="actions special">
						<li><a href="#" class="button primary">Activate</a></li>
					</ul>
					-->
				</div>
				<a href="#one" class="more scrolly">Узнать больше</a>
			</section>

			<section id="one" class="wrapper style1 special">
				<div class="inner">
					<h3>Здравствуйте, дорогие ребята, уважаемые родители!</h3>
					<header class="major">

						<img src="/images/750_4124.jpg"  class="dir">

						<p style="text-align:justify;">Быстрее, выше, сильнее! Девиз нашей школы!</p>
						<p style="text-align:justify;">Вы сделали правильный выбор, если решили заняться спортом, вести здоровый образ жизни, следить за своим здоровьем!
						Спорт — это не только полезное увлечение, спорт — это общение и взаимовыручка, воспитание целеустремленности и выносливости, и, конечно, радость победы!
						Но до победы необходимо пройти большой путь! И в этом мы готовы вам помочь!</p>
						<p style="text-align:justify;">В нашей спортивной школе работают квалифицированные тренеры, грамотные педагоги, которые вырастили не одно поколение чемпионов и победителей.
						На нашем сайте вы можете найти нормативную документацию, получить полную информацию о секциях, в которых можно заниматься, а также расписание занятий!
						В добрый путь, дорогие любители спорта!</p>
						<br><br>
					</header>
					<ul class="icons major">
						<li>
							<span class="icon major style1">
								<img src="/images/slogan1.jpg" >
							</span>
						</li>
						<li>
							<span class="icon major style2">
								<img src="/images/slogan2.jpg" >
							</span>
						</li>
						<li>
							<span class="icon major style3">
								<img src="/images/slogan3.jpg" >
							</span>
						</li>
					</ul>
				</div>
			</section>

			<section id="two" class="wrapper alt style2">
				<section class="spotlight football">
					<div class="image">
						<a href="{{route('text', 'become_football_player')}}">
							<img src="/images/pic02.jpg" alt="" />
						</a>
					</div>
					<div class="content">
						<a href="{{route('text', 'become_football_player')}}">
							<h2>Стать футболистом</h2>
						</a>
						<p>Футбол — командный вид спорта, в котором целью является забить мяч в ворота соперника ногами или другими частями тела (кроме рук) большее, чем команда соперника количество раз. В настоящее время самый популярный и массовый вид спорта в мире.</p>
					</div>
				</section>
				<section class="spotlight tenis">
					<div class="image">
						<a href="{{route('text', 'become_tennis_player')}}">
							<img src="/images/pic03.jpg" alt="" />
						</a>
					</div>
					<div class="content">
						<a href="{{route('text', 'become_tennis_player')}}">
							<h2>Стать теннисистом</h2>
						</a>
						<p>Истоки тенниса лежат в глубокой древности. Игра в мяч была популярна у разных народов и в разных цивилизациях. Упоминания о ней мы находим в памятках древнего Египта, Китая, Греции и Рима, Византии, Южной Америки. Изображение этих игр сохранилось на египетских рельефах и рисунках античных ваз.</p>
					</div>
				</section>
				<section class="spotlight borba">
					<div class="image">
						<a href="{{route('text', 'become_fighter')}}">
							<img src="/images/pic01.jpg" alt="" />
						</a>
					</div>
					<div class="content">
						<a href="{{route('text', 'become_fighter')}}">
							<h2>Стать борцом</h2>
						</a>
						<p>Борьба – вид спорта, один из самых древних и любимых народом. Истоки зарождения борьбы уходят в древние века.</p>
					</div>
				</section>
			</section>

			<section id="three" class="wrapper style3 special">
				<div class="inner">

	   				@include('base.inner.news.widget')

				</div>
			</section>

			<section id="cta" class="wrapper style4">
				<div class="inner">
					<header>
						<h2>Arcue ut vel commodo</h2>
						<p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
					</header>
					<ul class="actions stacked">
						<li><a href="#" class="button fit primary">Activate</a></li>
						<li><a href="#" class="button fit">Learn More</a></li>
					</ul>
				</div>
			</section>

			<footer id="footer">
				<ul class="icons">
					<li><a href="http://instagram.com/vldacsport" target="_blank" class="icon fa-instagram"><span class="label">@vldacsport</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; ВЛАДИКАВКАЗСКАЯ АКАДЕМИЯ СПОРТА</li>
				</ul>
			</footer>
		</div>

		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/jquery.scrolly.min.js"></script>
		<script src="/assets/js/jquery-ui.min.js"></script>

		<script src="/assets/js/browser.min.js"></script>
		<script src="/assets/js/breakpoints.min.js"></script>
		<script src="/assets/js/util.js"></script>
		<script src="/assets/js/main.js"></script>
		<script src="/assets/js/main_page.js"></script>
	</body>
</html>