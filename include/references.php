<div class="row" style="" id="references">
	<h5>REFERENCES</h5>
</div>

<div class="row" >

<?php foreach ($references as $item) {
?>

	<p class="container">
		[<?php echo $item["id"] ?>]
		<a href="<?php echo $item["href"] ?>" style="margin-left: 10px;"><?php echo $item["href"] ?></a>
	</p>

<?php } ?>

</div>
