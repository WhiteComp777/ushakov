<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,400italic,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/icons.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" />

	<title>Ushakov Ilya</title>
</head>
<body>
<div class="body_inner">
	<nav class="menu menu--prospero">

		<ul class="menu__list">
		<li class="menu__item @if(Request::is('/')) menu__item--current @endif
		">
				<a href="/" class="menu__link ">В начало</a>
			</li>

			<li class="menu__item @if(Request::is('about')) menu__item--current @endif
		">
				<a href="/about" class="menu__link">Что я</a>
			</li>
			<li class="menu__item @if(Request::is('blog')) menu__item--current @endif ">
				<a href="/blog" class="menu__link">Мыслишки</a>
			</li>
			<li class="menu__item @if(Request::is('portfolio')) menu__item--current @endif ">
				<a href="/portfolio" class="menu__link">Ценность</a>
			</li>
			<li class="menu__item  @if(Request::is('hell')) menu__item--current @endif ">
				<a href="/hell" class="menu__link">Ад</a>
			</li>
			<li class="menu__item @if(Request::is('contacts')) menu__item--current @endif  ">
				<a href="/contacts" class="menu__link">Связь</a>
			</li>
		</ul>
		
	</nav>

@yield('content')

 </div> <!-- body inner-->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>