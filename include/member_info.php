<div id="team-member" class="" style=""> 
	<h4>OUR TEAM</h4>
</div>

<h5 id="thanks"><i>Thanks for visiting our project website. We come from Department of Computer Science and Engineering, at Ho Chi Minh University of Techonology. 
Let's have a look at our members, who have spent time working together for this outcome:</i></h4>
	
<div class="container-fluid" id="member-wrap">
	<div class="row" style="margin:0px;">
		<div class="col-1"></div>
		<div class="col-10">
			<div class="row">
			<?php foreach ($member as $item) {?>
		

			<div class="col-2 card" style="">

				<div class="card-header"></div>

				<div class="card-body">
					<img src="<?php echo $item["img"]; ?>" style="width:100%;"/>
				</div>

				<div class="card-footer" >
					<p class="card-name"><?php echo $item["name"]; ?></p>
					<p><?php echo $item["ID"]; ?></p>
				</div>

			</div>

			

		<?php }?></div>
		</div>
		<div class="col-1"></div>
	</div>

</div>