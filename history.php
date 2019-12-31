<?php

	define("TITLE_1", "History | Deep Learning");
	define("TITLE_2", "Deep Learning - The Whole History");
	include('includes/header.php');

?>



	<div class="" id="history"> 
	<?php foreach($history as $item) {?>

		
		<p><?php echo $item["event"];?></p>
		<br> 

	<?php } ?>
	</div>

	
<?php

	include('includes/footer.php');		

?>