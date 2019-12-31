<?php
	define("TITLE_1", "Home | Deap Learning");
	define("TITLE_2", "Project Main Components");
	include('includes/header.php');
?>


	<!--content-->
	<div class="row" id="index-container" style="">

		<div class="col" style="">

			<a href="history.php" style="">
				<div id="index__sym1" class="container rounded-circle" style="">
						<center><strong>HISTORY</strong></center>		
				</div>
			</a>

		</div>
		
		<div class="col" style="">

			<a href="architect.php">
				<div id="index__sym2" class="container rounded-circle" style="">
					<center><strong>ARCHITECTURE</strong></center>		
				</div>
			</a>

		</div>
		
		<div class="col" style="">

			<a href="achieve.php">
				<div id="index__sym3" class="container rounded-circle" style="">
						<center><strong>ACHIEVEMENT</strong></center>		
				</div>
			</a>

		</div>
	
	</div>
	<!--end-content-->
	
<?php
	include('includes/footer.php');
?>