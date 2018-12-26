<main>
<?php
$categ1 = [
	[
		'title' => 'Флора и фауна',
		'icon' => 'salamandra.svg'
	],
	[
		'title' => 'О, да, еда!',
		'icon' => 'food.png'
	],
	[
		'title' => 'Литература',
		'icon' => 'ink.svg'
	]
];
$categ2 = [
	[
		'title' => 'История',
		'icon' => 'sandglass.png'
	],
	[
		'title' => 'Технический прогресс',
		'icon' => 'progress.png'
	],
	[
		'title' => 'Искусство и культура',
		'icon' => 'column.svg'
	]
];
$categ3 = [
	[
		'title' => 'Вокруг света',
		'icon' => 'earth.svg'
	],
	[
		'title' => 'Спорт',
		'icon' => 'sport.png'
	],
	[
		'title' => 'Кот в мешке',
		'icon' => 'cat_in_bag.png'
	]
];
?>
		<div class="col_categ">	
		<?php foreach ($categ1 as $arr): ?>
			<div class="categ">
				<a target="_blank" href="categories/question/flora">
				<img class="icon" src="img/<?php echo $arr['icon'];?>" alt="categoria">
				<h3><?php echo $arr['title']  ?></h3></a>
			</div>
		<?php endforeach; ?>
		</div>
		<div class="col_categ">
			<?php foreach ($categ2 as $arr): ?>
			<div class="categ">
				<a target="_blank" href="categories/question/flora">
				<!-- <img class="icon" src="/icons/<?php echo $arr['icon'];?>" alt=<? echo $arr['icon'];?>> -->
				<img class="icon" src="img/<?php echo $arr['icon'];?>" alt="categoria"> 
				<h3><?php echo $arr['title']  ?></h3></a>
			</div>
		<?php endforeach; ?>
		</div>
		<div class="col_categ">
			<?php foreach ($categ3 as $arr): ?>
			<div class="categ">
				<a target="_blank" href="categories/question/flora">
				<img class="icon" src="img/<?php echo $arr['icon'];?>" alt="categoria">
				<h3><?php echo $arr['title']  ?></h3></a>
			</div>
		<?php endforeach; ?>
		</div>
		<div class="col"> 
			<div class="search">
				<form  action="http://google.com/search" name="search-form" target="_blank">
					<!-- <input  type="hidden" name="q" value="site:file:///C:/HomeTask/HT_21-09/MyProect/index-igra.html" /> -->
					<input type="search" class="google" name="q" value="" placeholder="search..." />
					<button class="but" type=submit><img src="img/goog.png"></button>
				</form>
				<form  action="http://yandex.ru/search" name="search-form" target="_blank">
					<!-- <input  type="hidden" name="q" value="site:file:///C:/HomeTask/HT_21-09/MyProect/index-igra.html" /> -->
					<input class="yandex" name="q" value="" placeholder="search..."/>
					<button class="but" type=submit><img src="img/ya.png"></button>
				</form>
			</div>
			<div class="sendQuest">
				<p><a href="#openModal3">Станьте автором вопроса</a></p>
				<p><a href="">Правила написания вопросов</a></p>
				<div id="openModal3" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Сформируйте ваш вопрос</h3>    
                    <a href="#close" title="Close" class="close">&#9746</a>
                </div>
                <div class="modal-body">
				<form>
					<legend>Напишите вопрос</legend>
					<textarea name="sendQuest" rows="5" cols="45" placeholder="Ваш вопрос..."></textarea>
				<div class="addinfo">
				<div class="leftSend">
					<li class="q"><input type="text" name="" placeholder="Правильный ответ"></li>
					<li class="q"><input type="text" name="" placeholder="НЕправильный ответ"></li>
					<li class="q"><input type="text" name="" placeholder="НЕправильный ответ"></li>
				</div>
				<div class="rightSend">
					<li class="q"><input type="text" name="" placeholder="Подсказка"></li>
					<li class="q"><input type="text" name="" placeholder="Источник информации"></li>
					<li class="q"><button type="submit">Отправить вопрос</button></li>
				</div>
				</div>
				</form>
			</div>
            </div>
        </div>
    </div></div>
			<!--можно добавить arrray_rand php чтобы случайные штуки каждый раз выводить при обновлении-->
			<ul id="slides">
				<li class="slide showing"><img src='img/mexico.jpg' alt="">
					<a class="describe" href="#"><?php include_DIR_.'php/slider.php';echo $slides[0]['describe'] ?></a><br />
					<a class="desc1" href="#"></a>
				</li>
				<li class="slide"><img src="img/mosquito.jpg"  alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href='#'>А вы знали, что любимый цвет комаров - синий?</a><br />
					<a class="desc1" href="#">Удивительные факты о комарах...</a>
						</div>
					</div>
				</li>
				<li class="slide"><img src="img/zurich.jpg"  alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href="facts">Самый дорогой город на планете.</a><br />
					<a class="desc1" href="facts">Как вы думаете, какой?</a>
						</div>
					</div>
				</li>
				<li class="slide"><img src="img/tarantul.jpg" alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href="facts">Тарантул может обходиться без пищи около 2 лет!</a><br />
					<a class="desc1" href="facts">Стоит ли бояться голодного тарантула?</a>
						</div>
					</div>
				</li>
				<li class="slide"><img src="img/turtle.jpg"  alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href='#'>Это первое животное, попавшее на Луну.</a><br />
					<a class="desc1" href="#">Кто еще был на Луне?</a>
						</div>
					</div>
				</li>
			</ul>
			<script type="text/javascript" src="js/slider.js"></script>
		</div>
</main>