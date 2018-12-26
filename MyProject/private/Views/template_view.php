<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="/css/style-ind.css">
	<link rel="stylesheet" type="text/css" href="/css/media.css">
	<link rel="stylesheet" type="text/css" href="/css/questions.css">
	<link rel="stylesheet" type="text/css" href="/css/facts.css">
	<script type="text/javascript" src="js/validate.js"></script>	
</head>
<body>
	<header class="header">
		<a href="#" class="logo">
			<img  src="/img/leave1.png" title="На главную"> 
		</a>
		
		<nav class="nav">
			<ul class="menu">
		<li>
			<!-- <div style="text-align: center;"> -->
			<a href="#openModal">Войти</a>
		<!-- </div> -->
	</li>
		<div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h3>Авторизация</h3>
                    
                    <a href="#close" title="Close" class="close">&#9746</a>
                </div>
                <div class="modal-body">
                	<script type="text/javascript" src="js/validate.js"></script>
    <form action="" method="POST">
    <fieldset>
	    <legend>Введите данные</legend>
		
		<div>
			<p><label for="email">Электронный адрес</label>
			<input id="email" type="email" autofocus></p>
		</div>
		<div>
			<p><label for="pwd">Пароль</label>
			<input id="pwd" type="password"></p>
			<label for="togglePassword">Показать/скрыть пароль</label>
        	<input type="checkbox" id="togglePassword">
		</div>
		
		<div>
		<input type="submit" value="Войти на сайт">
	</div>
	</fieldset>
	</form>
	    
                </div>
            </div>
        </div>
    </div></div>


		<li><a href="#openModal2">Новичок</a>
		</li>
		<div id="openModal2" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h3>Регистрация нового пользователя</h3>
                    
                    <a href="#close" title="Close" class="close">&#9746</a>
                </div>
                <div class="modal-body">
<?php

// define("NEW_USER", "users.cvs");//1й парам -filename* (*например, для file_put_contents(filename, data))
// if ($_SERVER['REQUEST_METHOD'] == "POST") { //если форма была отправлениа методом post
// 	//то принимаем данные и отфильтровываем их
// 	$user_name = trim(strip_tags($_POST['userName']));//в [] вставляем name тэга input
// 	$email = trim($_POST['EMAIL']);
// 	$pwd = $_POST['PWD'];
// 	//далее сформируем строчку, которая и будет записываться в файл
// 	//перед формированием строки проверим, существуют ли данные, которые пришли
// 	if ($user_name and $email and $pwd) {
// 		$user = "$user_name $email $pwd\n";
// 	}
// 	//запишем строку в файл с помощью функции
// 	file_put_contents(NEW_USER, $user, FILE_APPEND);//$FILE_APPEND чтобы предыдущие данные НЕ стерлись
// 	header("Location: index-igra.php");
// 	return;
// }
?>
    <form action="<?=$_SERVER['PHP_SELF'] ?>">
    <fieldset>
	    <legend>Заполните поля</legend>
		<div>
			<p><label for="userName">Введите имя</label>
			<input name="userName" type="text" autofocus></p>
		</div>
		<div>		
			<p><label for="email">Электронный адрес</label>
			<input name="EMAIL" type="email" autofocus></p>
		</div>
		<div>
			<p><label for="pwd">Придумайте пароль</label>
			<input name="PWD" type="password"></p>
			<label for="togglePassword">Показать/скрыть пароль</label>
        	<input type="checkbox" id="togglePassword">
		</div>
		<div>
			<p><label for="pwd2">Подтвердите пароль</label>
			<input id="PWD2" type="password"></p>
			<label for="togglePassword">Показать/скрыть пароль</label>
        	<input type="checkbox" id="togglePassword">
		</div>
	
		<div>
		<input type="submit" value="Зарегистрироваться">
	</div>
	</fieldset>
	</form>
	<script type="text/javascript" src="js/show_pwd.js"></script>
                </div>
            </div>
        </div>
    </div></div>

		<li>Меню
			<ul class="submenu">
		<li class="sub"><a href="">О проекте</a></li>
		<li class="sub"><a href="">Новости</a></li>
		<li class="sub"><a href="">Интересные факты</a></li>
		<li class="sub"><a href="">Стать автором вопроса</a></li>
	   </ul></li>
 		</ul>
		</nav>
	</header>

	 <!-- include_once "html/main.php"; -->
	<!-- include_once "html/page_questions.php"; -->
	<div><?php include_once $view; ?></div>

		
	
	<footer class="footer">
		<div class="social">
			<p>&#169; Pelse A. 2019</p>
		</div>
		<div class="social">
			<a href="#"><img src="img/facebook_108044.png" ></a>
			<a href="#"><img src="img/instagram_108043.png"></a>
			<a href="#"><img src="img/youtube_37626.png"></a>
		</div>
		<div class="social">
			<a href="#"><p>Разместить рекламу</p></a>
		</div>
		<div class="social">
			<a href="#"><p>Связаться с нами</p></a>
		</div>
		<div class="social">
			<a href="#"><p>О проекте</p></a>
		</div>
	</footer>

</body>
</html>