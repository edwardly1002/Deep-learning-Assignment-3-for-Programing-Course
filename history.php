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
	<p>From <a href="https://www.dataversity.net/brief-history-deep-learning">A Brief History of Deep Learning</a>.</p>
	</div>

	
<?php

	include('includes/footer.php');		

?>