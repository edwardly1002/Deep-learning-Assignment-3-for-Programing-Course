		<!--footer-->
			</div> <!--container-fluid containing TITLE-->
		</div> 
	</div> <!--CLOSE MAIN CONTAINER-->

	<hr id="mock">

	<div  id="banner-foot" class="container-fluid">
		
		<div id="subject" class="row">

			<div class="col-3">
				<img src="images/AI_1.png"/>
			</div>

			<div class="col-5">
				<p>"By far, the greatest danger of Artificial Intelligence  is that people conclude too early that they understand it."</p>
				<div style="text-align: right;" class="container-fluid">
					<p style="">Eliezer Yudkowsky</p>
				</div>
			</div>

			<div class="col-3">
				<img src="images/AI_4.png"/>
			</div>

		</div>

	</div>

	<div id="main-container" class="container-fluid">
		<!--members' info-->
		<br id="mock">
		<?php 
			include('includes/member_info.php');
		?>

		<hr>

		<!--tech used-->
		<?php
			include('includes/platf_used.php');
		?>

		<!--references-->
		<?php
			include('includes/references.php');
		?>
	</div>
	<!--copyright-->
	<?php
		include('includes/copyright.php');
	?>

</body>
</html>