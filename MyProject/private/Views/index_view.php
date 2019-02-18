<main>
	<div class="col_categ">	
		<?php foreach ($categories as $arr): ?>
		<div class="categ">
			<a  href='/<?php echo $arr['categName']; ?>/questions'>
				<img class="icon" src="img/<?php echo $arr['icon'];?>" alt="categoria">
				<h3><?php echo $arr['title']  ?></h3>
			</a>
		</div>
		<?php endforeach; ?>
	</div>		
	<div class="col"> 
		<div class="col_top">
			<div class="sendQuest">
				<p><a href="/quick_game">Быстрая игра</a></p>
				<p><a href="#openModal3"">Станьте автором вопроса</a></p>
				<p><a href="/rulls">Правила написания вопросов</a></p>
				<div id="openModal3" class="modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3>Сформируйте ваш вопрос</h3>    
								<a href="#close" title="Close" class="close">&#9746</a>
							</div>
							<div class="modal-body">
								<form name="add_question" action="/user/add_question" method="post">
									<div class="selectCateg">
										<select class="" name="select_category" id="category">
											<option>Флора и фауна</option>
											<option>О, да, еда!</option>
											<option>Вокруг света</option>
											<option>Искусство и культура</option>
											<option>История</option>
											<option>Спорт</option>
											<option>Литература</option>
											<option>Технический прогресс</option>
											<option>Кот в мешке</option>
										</select>
									</div>
									<div class="addinfo">               			
										<textarea name="text" rows="5" cols="45" id="text" placeholder="Текст вопроса..." required="required"></textarea>
									</div>
									<div class="addinfo">	
										<li class="q"><input type="text" id="right_answer" name="right_answer" placeholder="Правильный ответ" required></li>
										<li class="q"><input type="text" id="wrong1" name="wrong1" placeholder="НЕправильный ответ 1" required></li>
										<li class="q"><input type="text" id="wrong2" name="wrong2" placeholder="НЕправильный ответ 2" required></li>
										<li class="q"><input type="text" id="tip" name="tip" placeholder="Подсказка" required></li>
										<li class="q"><input type="text" id="source" name="source" placeholder="Источник информации" required></li>
										<li class="hidden"><input type="text" name="User_id">Echo...</li>
										<li class="q"><button type="submit">Отправить вопрос</button></li>
									</div>
								</form>
						<script type="text/javascript" src="/js/sendQuestion.js"></script>		
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="calend_ru">
				<a href=http://www.calend.ru/holidays/unusual/ target=_blank>
				<img src="https://www.calend.ru/img/export/informer_unusual.png" width="150" alt="Необычные праздники" border="0"></a>
			</div>
		</div>
			
			<ul id="slides">
				<!--выводить из бд начиная со второго слайда?-->
				<li class="showing slide"><img src='/img/<?php echo $facts[0]['img'];?>' alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href='/<?php echo $facts[0]['id']; ?>/fact'><?php echo $facts[0]['slider_caption1']; ?></a><br />
					<a class="desc1" href='/<?php echo $facts[0]['id']; ?>/fact'><?php echo $facts[0]['slider_caption2']; ?></a>
						</div>
					</div>
				</li>
				<!--<?php // foreach ($facts as $arr): ?> -->
				<li class="slide"><img src="/img/<?php echo $facts[1]['img'];?>"  alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href='/<?php echo $facts[1]['id']; ?>/fact'><?php echo $facts[1]['slider_caption1']; ?></a><br />
					<a class="desc1" href='/<?php echo $facts[1]['id']; ?>/fact'><?php echo $facts[1]['slider_caption2']; ?></a>
						</div>
					</div>
				</li>
				<li class="slide"><img src="/img/<?php echo $facts[2]['img'];?>"  alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href='/<?php echo $facts[2]['id']; ?>/fact'><?php echo $facts[2]['slider_caption1']; ?></a><br />
					<a class="desc1" href='/<?php echo $facts[2]['id']; ?>/fact'><?php echo $facts[2]['slider_caption2']; ?></a>
						</div>
					</div>
				</li>
				<li class="slide"><img src="/img/<?php echo $facts[3]['img'];?>"  alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href='/<?php echo $facts[3]['id']; ?>/fact'><?php echo $facts[3]['slider_caption1']; ?></a><br />
					<a class="desc1" href='/<?php echo $facts[3]['id']; ?>/fact'><?php echo $facts[3]['slider_caption2']; ?></a>
						</div>
					</div>
				</li>
				<li class="slide"><img src="/img/<?php echo $facts[4]['img'];?>"  alt="">
					<div class="wrap-text">
						<div>
					<a class="describe" href='/<?php echo $facts[4]['id']; ?>/fact'><?php echo $facts[4]['slider_caption1']; ?></a><br />
					<a class="desc1" href='/<?php echo $facts[4]['id']; ?>/fact'><?php echo $facts[4]['slider_caption2']; ?></a>
						</div>
					</div>
				</li>
			</ul>
				<!-- <?php // endforeach; ?> -->
			<script type="text/javascript" src="js/slider.js"></script>		
	</div>
</main>