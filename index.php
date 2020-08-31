<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="../css/header.css">
	<title>Салон штор Бахрома</title>
</head>
<body>
	<header>
		<div class="header-ico">
			<a href="/" class="logo"></a>
		</div>
		<div class="header-search">
			<input type="text" placeholder="Поиск по названию или номеру артикула">
		</div>
		<div class="header-other">
			<a href="#">Личный кабинет</a>
			<a href="#">Избранное</a>
			<a href="#">Корзина</a>
		</div>
		<div class="mobile-name">
			<p>Бахрома</p>
		</div>
		<div class="header-mobile">
			<span class="icon-search-mobile" id="icon-search-mobile" onclick="openSearch()"><i class="fa fa-search" aria-hidden="true"></i></span>
			<i class="fa fa-user-circle-o" aria-hidden="true"></i>
		</div>
		<script src="../js/mobile-search.js"></script>
	</header>

	<nav class="topnav" id="myTopnav">
		<a href="#">Главная</a>
		<a href="#">Каталог</a>
		<a href="#">Портфолио</a>
		<a href="#">Контакты</a>
		<a href="#">О магазине</a>
		<a href="javascript:void(0);" class="nav-mobile-icon" onclick="myFunction()">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</a>
	</nav>

	<div class="mobile-search" id="mobile-search-input">
		<input type="text" placeholder="Поиск по названию или номеру артикула">
	</div>
	<script src="../js/nav.js"></script>
	
</body>
</html>