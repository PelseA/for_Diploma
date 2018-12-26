	<main class="main-vopros">
		<?php foreach ($questions as $arr): ?>
		<div class="vopros">
			<form action="" method="post">
				<fieldset><legend><? echo $arr['legend'] ?></legend>
					<p><? echo $arr['question'] ?></p>
					<p><input type="radio" name="variant" value=""><? echo $arr['var1'] ?></p>
					<p><input type="radio" name="variant" value=""><? echo $arr['var2'] ?></p>
					<p><input type="radio" name="variant" value=""><? echo $arr['var3'] ?></p>
					<p><input class="knopka" type="submit" name="sbm_answer" value="Ответить"></p>
					<p><a href="#" onclick='showTip()'>Подсказка</a></p>
					<p id="tip" style="visibility: hidden;"><? echo $arr['tip'] ?></p>
	<script type="text/javascript">
		function showTip(){
				if(document.getElementById('tip').style.visibility = "hidden"){
					document.getElementById('tip').style.visibility = "visible";
				}return true;
				}	
	</script>
					<!-- <p><a href="<? echo $arr['modal-href'] ?>">Подсказка</a></p>
					<div id="<? echo $arr['modal-id'] ?>" class="modal">
						<div class="modal-dialog">
							<div class="modal-content">

								<div class="modal-header">
									<h3 class="modal-title">Подсказка</h3>

									<a href="#close" title="Close" class="close">&#9746</a>
								</div>
								<div class="modal-body">
									<fieldset>
										<p><? echo $arr['tip'] ?></p>
									</fieldset>
								</div>
							</div>
						</div>
					</div> -->
				</fieldset>
			</form>
		</div>
		<?php endforeach; ?>
	</main>
