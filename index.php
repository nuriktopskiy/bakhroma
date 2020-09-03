<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/items.css">
	<link rel="stylesheet" href="css/aside.css">
	<link rel="stylesheet" href="css/dropdown.css">
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
		<script src="js/mobile-search.js"></script>
	</header>

	<nav class="topnav" id="myTopnav">
		<a href="#">Главная</a>
		<a href="#" id="catalog-mobile-off">Каталог</a>
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
	<script src="js/nav.js"></script>
	<div class="mobile-dropdown">
			<div class="dropdown">
				<button onclick="dropdownFunction()" class="dropbtn">Каталог</button>
			  	<div id="myDropdown" class="dropdown-content">
				    <a href="#home">Все ткани</a>
				    <a href="#about">Бархат</a>
				    <a href="#contact">Блэкаут</a>
				    <a href="#contact">Жаккард</a>
				    <a href="#contact">Портьера</a>
				    <a href="#contact">Тафта</a>
				    <a href="#contact">Лён</a>
				    <a href="#contact">Тюль</a>
			  	</div>
			</div>

			<div class="dropdown">
				<button onclick="dropdownFunction2()" class="dropbtn">Сортировать по</button>
			  	<div id="myDropdown2" class="dropdown-content">
				    <a href="#home">Популярности</a>
				    <a href="#about">Рейтингу</a>
				    <a href="#contact">Цене</a>
				    <a href="#contact">Скидке</a>
				    <a href="#contact">Обновлению</a>
			  	</div>
			</div>

			<div class="dropdown">
				<button onclick="dropdownFunction3()" class="dropbtn">Фильтры</button>
			  	<div id="myDropdown3" class="dropdown-content">
				    <a href="#home">Цена</a>
				    <a href="#about">Цвет</a>
			  	</div>
			</div>
		</div>
		<script src="js/dropdown.js"></script>
	<div class="wrapper">
		<div class="sidebar">
			<div class="content-menu">
				<div class="border-aside">
					<h1>Каталог</h1>
					<ul>
						<li>Все ткани</li>
						<li>Бархат</li>
						<li>Блэкаут</li>
						<li>Жаккард</li>
						<li>Портьера</li>
						<li>Тафта</li>
						<li>Лён</li>
						<li>Тюль</li>
					</ul>
				</div>
			</div>

			<div class="content-menu">
				<div class="border-aside">
					<h1>Доставка</h1>
					<p>В нашем магазине доступны различные виды доставки для вашего удобства.</p>
				</div>
			</div>

			<div class="content-menu">
				<div class="border-aside">
					<h1>Оплата</h1>
					<p>Можно оплатить переводом на карту (если заказ оформлен на сайте) или наличными в нашем магазине.</p>
				</div>
			</div>

			<div class="content-menu">
				<div class="border-aside">
					<h1>Пункты самовывоза</h1>
					<p>1) Дальневосточный проспект 14, Мебельвуд</p>
					<p>2) ул. Крыленко</p>
				</div>
			</div>
		</div>

		<div class="row">
		  <div class="column">
		    <div class="card">
		      <img src="img/1.jpg" alt="Jane" style="width:100%">
		      <div class="container">
		        <h2>Jane Doe</h2>
		        <p class="title">CEO & Founder</p>
		        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		        <p>example@example.com</p>
		        <p><button class="button">Contact</button></p>
		      </div>
		    </div>
		  </div>

		  <div class="column">
		    <div class="card">
		      <img src="img/1.jpg" alt="Jane" style="width:100%">
		      <div class="container">
		        <h2>Jane Doe</h2>
		        <p class="title">CEO & Founder</p>
		        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		        <p>example@example.com</p>
		        <p><button class="button">Contact</button></p>
		      </div>
		    </div>
		  </div>

		  <div class="column">
		    <div class="card">
		      <img src="img/1.jpg" alt="Jane" style="width:100%">
		      <div class="container">
		        <h2>Jane Doe</h2>
		        <p class="title">CEO & Founder</p>
		        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		        <p>example@example.com</p>
		        <p><button class="button">Contact</button></p>
		      </div>
		    </div>
		  </div>

		  <div class="column">
		    <div class="card">
		      <img src="img/1.jpg" alt="Jane" style="width:100%">
		      <div class="container">
		        <h2>Jane Doe</h2>
		        <p class="title">CEO & Founder</p>
		        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		        <p>example@example.com</p>
		        <p><button class="button">Contact</button></p>
		      </div>
		    </div>
		  </div>
		  <div class="column">
		    <div class="card">
		      <img src="img/1.jpg" alt="Jane" style="width:100%">
		      <div class="container">
		        <h2>Jane Doe</h2>
		        <p class="title">CEO & Founder</p>
		        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		        <p>example@example.com</p>
		        <p><button class="button">Contact</button></p>
		      </div>
		    </div>
		  </div>
		  <div class="column">
		    <div class="card">
		      <img src="img/1.jpg" alt="Jane" style="width:100%">
		      <div class="container">
		        <h2>Jane Doe</h2>
		        <p class="title">CEO & Founder</p>
		        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		        <p>example@example.com</p>
		        <p><button class="button">Contact</button></p>
		      </div>
		    </div>
		  </div>

		  <div class="column">
		    <div class="card">
		      <img src="img/1.jpg" alt="Jane" style="width:100%">
		      <div class="container">
		        <h2>Jane Doe</h2>
		        <p class="title">CEO & Founder</p>
		        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
		        <p>example@example.com</p>
		        <p><button class="button">Contact</button></p>
		      </div>
		    </div>
		  </div>
		</div>
	</div> <!-- Конец Wrapper -->

</body>
</html>