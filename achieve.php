<?php
	define("TITLE_1", "Achievement | Deep Learning");
	define("TITLE_2", "Latest Influential Achivement");
	include('includes/header.php');
?>
<div id="achieve" class="container-fluid">
	<div class="row">

		<div class="col"></div>

		<ul class="col-5" style="list-style:none;">
			<?php 
				foreach($achieve as $item) {
			?>

			<li>
				<a href="<?php echo $item["href"]; ?>">
					<?php echo $item["name"]; ?>
				</a>
			</li>

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