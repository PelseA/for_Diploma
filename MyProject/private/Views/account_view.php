<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account</title>
</head>
<body>
	<h3>Вы авторизованы</h3>
	<div class="account_info">
		
		<div class="account_text">
			<?php if (isset($_SESSION['auth'])): ?> 
			<p>Логин: <?php echo $user['login']; ?></p>
			<p>Почта: <?php echo $user['email']; ?></p>
			<p>Очки: <?php echo $user['score']; ?></p>
			<p>Всего тестов: <?php echo $user['count_tests']; ?></p>
			<?php endif; ?>
			<p><a href="/out">Выйти</a></p>

	  	</div>
	  	
	  	<div class="account_img">
			<img src="/img/avatar.png">
	  	</div>
	</div>
</body>
</html>