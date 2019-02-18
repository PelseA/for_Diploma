
<body>
	<center>

		<div class="number">
			<p id="number">Количество вопросов: 10</p>
		</div>
		<p id="result"></p>
					
		<p id="question"></p>
		
		<button onclick="check(1)" class="answer" id="option1"></button>
		
		<button onclick="check(2)" class="answer" id="option2"></button>
		
		<button onclick="check(3)" class="answer" id="option3"></button>

		<button onclick="check(4)" class="tip" id="tip"></button>
		
		<!-- <button onclick="check(4)" class="tip" id="option4"></button> -->
	</center><br>
	<center>
		<button id="start" class="question" onclick="check(0)">Приступить к тесту</button>
		<script type="text/javascript" src="js/quick_game.js"></script>
		<script type="text/javascript"> var curent_url = document.URL; document.write("<a id='end' style='display: none;' class='question' href='" + curent_url + "'>Начать сначала</a><br /><br />");
			var choose = document.write("<a id='choose' href='/' style='display: none;' class='question'>Выбрать категорию</a>");
		</script>	
	</center>
</body>
