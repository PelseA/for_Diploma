<?php// require_once __DIR__ . php/question_handler.php; ?>
	<main class="main-vopros">
		
		
		

		<div class="vopros">
			<form action="/user/score" method="post">
				<?php foreach ($questions as $question):
					//for($arr = 0; $arr <= $questions.length; $arr+=3){echo $arr['question'] ?>
				<fieldset><legend><? echo $question['category'] ?></legend>
					<p><? echo $question['question'] ?></p>
						<?php foreach ($question['answers'] as $answer) : ?>
					
					<p><input type="radio" name="answers[<?= $question['id']; ?>]" value="<? echo $answer['true_false']; ?>"><? echo $answer['answer']; ?></p>

					<?php endforeach; ?>

					
				<!--	<p><a href="#" onclick='showTip()'>Подсказка</a></p>
					<p id="tip" style="visibility: hidden;"><? echo $arr['tip'] ?></p>-->
<!--	<script type="text/javascript">
		function showTip(){
				if(document.getElementById('tip').style.visibility = "hidden"){
					document.getElementById('tip').style.visibility = "visible";
				}return true;
				}	
	</script>  -->
					 <p><a href="#openModal_tip_<?= $question['id']; ?>">Подсказка</a></p>
					<div id="openModal_tip_<?= $question['id']; ?>" class="modal">
						<div class="modal-dialog">
							<div class="modal-content-tip">

								<div class="modal-header">
									<h3 class="modal-title">Подсказка</h3>

									<a href="#close" title="Close" class="close">&#9746</a>
								</div>
								<div class="modal-body">
									<fieldset>
										<p><? echo $question['tip'] ?></p>
									</fieldset>
								</div>
							</div>
						</div>
					</div> 
				</fieldset>
				<?php endforeach; ?>
				<p><input class="knopka" type="submit" value="Ответить"></p>
			</form>
			
		</div>
		
	</main>
