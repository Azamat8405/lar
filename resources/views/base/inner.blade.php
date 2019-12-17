<!DOCTYPE HTML>
<html>
	<head>
		<title>{{$title}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="/assets/css/ch_main.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">

			<div id="page-wrapper">
					<header id="header">
						<h1><a href="/">ВЛАДИКАВКАЗСКАЯ АКАДЕМИЯ СПОРТА</a></h1>
		   				@include('base.menu')
					</header>
					<article id="main">
						@section('body')
						@show
					</article>
					<footer id="footer">
						<ul class="icons">
							<li><a href="http://instagram.com/vldacsport" target="_blank" class="icon fa-instagram"><span class="label">@vldacsport</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; ВЛАДИКАВКАЗСКАЯ АКАДЕМИЯ СПОРТА</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>