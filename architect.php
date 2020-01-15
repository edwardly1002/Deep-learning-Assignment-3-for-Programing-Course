<?php
	define("TITLE_1", "Architecture | Deep Learning");
	define("TITLE_2", "Well-Known Architectures");
	include('includes/header.php');
?>
<div id="architect" class="container-fluid">
	<div class="row">
		<div class="col"></div>
	    <ul class="col-5" style="">
		<?php
			foreach ($architect as $item) {
		?>

			<li class="" style=""><a href="<?php echo $item["href"] ?>"><?php echo $item["name"]; ?></a></li>

		<?php
			}	
		?>
		</ul>
		<div class="col"></div>
	</div>

</div>
<?php
	include('includes/footer.php');
?>