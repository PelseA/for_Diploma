<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="/css/style-ind.css">
	<link rel="stylesheet" type="text/css" href="/css/media.css">
	<link rel="stylesheet" type="text/css" href="/css/questions.css">
	<link rel="stylesheet" type="text/css" href="/css/facts.css">
	<link rel="stylesheet" type="text/css" href="/css/quick_game.css">
	<link rel="stylesheet" type="text/css" href="/css/news.css">
	<script src="/js/jquery3.3.1.js"></script>
</head>
<body>
	<header class="header">
		<a href="/">
			<img class="home" src="../img/home1.png">
		</a>

		<div class="search">
			<form  action="http://google.com/search" name="search-form" target="_blank">
				
				<div class="searching">
					<div class="search_string">
						<input type="search" class="google" name="q" value="" placeholder="search..." />
					</div>
					<div class="btn1">
						<button class="but1" type=submit><img src="../img/goog.png"></button>
					</div>
				</div>
			</form>
			<form  action="http://yandex.ru/search" name="search-form" target="_blank">
				
				<div class="searching">
					<div class="search_string">
						<input type="search" class="yandex" name="q" value="" placeholder="search..." />
					</div>
					<div  class="btn2">
						<button class="but" type=submit><img src="../img/ya.png"></button>
					</div>
				</div>
			</form>
		</div>
		
		<nav class="nav">
			<ul class="menu">
		<li>	
			<?php if (isset($_SESSION['auth'])): ?>
			<a href="/out">Выйти</a>	
			<?php else: ?>
			<a href="#openModal">Войти</a>	
			<?php endif; ?>
	</li>
		<div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h3>Авторизация</h3>
                    
                    <a href="#close" title="Close" class="close">&#9746</a>
                </div>
                <div class="modal-body">
    <form name="authorization" action="/user/authorization" method="POST">
    	
    <fieldset>
	    <legend>Введите данные</legend>
		
		<div>
			<p><label for="email">Электронный адрес</label>
			<input name="email" id="email" type="email" required></p>
		</div>
		<div>
			<p><label for="pwd">Пароль</label>
			<input name="pwd" id="pwd" type="password" required></p>
			<label for="togglePassword">Показать/скрыть пароль</label>
        	<input  type="checkbox" id="togglePassword">
		</div>
		
		<div>
		<input type="submit" value="Войти">
	</div>
	</fieldset>
	</form>

	    
                </div>
            </div>
        </div>
    </div></div>
		<li>
    	<?php if (isset($_SESSION['auth'])): ?>
			<a href="/user/account">Профиль</a>	
			<?php else: ?>
			<a href="#openModal2">Новичок</a>	
			<?php endif; ?>
		
		</li>
		<div id="openModal2" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h3>Регистрация нового пользователя</h3>
                    
                    <a href="#close" title="Close" class="close">&#9746</a>
                </div>
                <div class="modal-body">
   
    <form name='registration' action="/user/registration" method="POST">
    <fieldset>
	    <legend>Заполните поля</legend>
		<div>
			<p><label for="userName">Введите имя</label>
			<input id="userName" class="userName field" name="login" type="text"></p>
		</div>
		<div>		
			<p><label for="userEmail">Электронный адрес</label>
			<input id="userEmail" class="userEmail field" name="email" type="email"></p>
		</div>
		<div>
			<p><label for="pwd">Придумайте пароль</label>
			<input id="pwd" class="password field" name="pwd" type="password"></p>
			<label for="togglePassword">Показать/скрыть пароль</label>
        	<input type="checkbox" id="togglePassword">
		</div>
		<div>
			<p><label for="pwd2">Подтвердите пароль</label>
			<input id="pwd" class="passwordAgain field" name="PWD2" type="password"></p>
			<label for="togglePassword">Показать/скрыть пароль</label>
        	<input type="checkbox" id="togglePassword">
		</div>
	
		<div>
		<input type="submit" name="reg" class="reg" value="Регистрация">
	</div>
	</fieldset>
	
	</form>
<script type="text/javascript" src="/js/sendForm.js"></script>
<script type="text/javascript" src="/js/validate.js"></script> 
<script type="text/javascript" src="/js/show_pwd.js"></script>
	
                </div>
            </div>
        </div>
    </div></div>

		<li>Меню
			<ul class="submenu">
		<li class="sub"><a href="/about">О проекте</a></li>
		<li class="sub"><a href="/news">Новости</a></li>
		<li class="sub"><a href="/facts">Интересные факты</a></li>
		<li class="sub"><a href="#openModal3">Стать автором вопроса</a></li>
		<li class="sub"><a href="/rulls">Правила написания вопросов</a></li>
	   		</ul></li>
 		</ul>
		</nav>
	</header>

	 <!-- include_once "html/main.php"; -->
	<!-- include_once "html/page_questions.php"; -->
	<div><?php include_once $view; ?></div>

	
	<footer class="footer">
		<div class="social">
			<a href="#"><p>Разместить рекламу</p></a>
		</div>
		<div class="social">
			<a href="#"><p>Связаться с нами</p></a>
		</div>
		<div class="social">
			<a href="/about"><p>О проекте</p></a>
		</div>
		<div class="social">
			<a href="#"><img src="../img/facebook_108044.png" ></a>
			<a href="#"><img src="../img/instagram_108043.png"></a>
			<a href="#"><img src="../img/youtube_37626.png"></a>
		</div>
		<div class="social">
			<p>&#169; Pelse A. 2019</p>
		</div>	
	</footer>

</body>
</html>