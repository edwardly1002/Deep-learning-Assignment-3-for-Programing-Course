<!DOCTYPE html>
<html>
 
<head>
	<title><?php echo TITLE_1; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
	<link rel="stylesheet" href="index.css"/>
</head>

<?php
	
	include('includes/arrays.php');

?>

<body style="">

	<!--navigation bar-->
	<?php
		include('includes/nav.php');
	?>

	<!--BANNER-->
	<div id="banner-head" class="container-fluid" style="">

		<div id="subject" class="row"> 		
			
			<div id="subject__syms" class="col-4" style="">
				<img src="images/AI_2.png" />
			</div>

			<div id="subject__cmt" class="col-8	" style="">

				<h4>Machine Learning ...</h4>
				<p style="margin-left:35px;">
				... is a subset of Artificial Intelligence the scientific study of algorithms and 
				statistical models that computer systems use to perform a specific task without using explicit instructions, relying on patterns 
				and inference instead. 
				</p>
				
				<h4>Deep Learning ...</h4>
				<p style="margin-left:35px;">
				... is also known as Deep Structured Learning or Hierarchical Learning.
				It is a part of a broader family of Machine Learning methods based on Artificial Neural Networks
				</p>
			</div>

		</div>	
	
	</div>

	<hr>

	<!--MAIN-->
	<div id="main-container" class="container-fluid" style="padding: 0px 80px 0.5px 80px;"> <!-- container-->
		
		<!--header-->
		<div class="container-fluid" style=""> <!--container differ from nav--> <!--WWWWWWWWWWWWWWWWWWill be EROR MARGIN-->
			<!--foreword-definition-->

			<!--TITLE-->
			<div id="title" class="row" style="">
				<div class="col">

					<center>
						<h2 style="">
							<?php echo TITLE_2; ?>	
						</h2>
					</center>
					
				</div>
			</div>

			<!--start of content-->
			<div class="container-fluid" style="\">