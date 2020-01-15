<?php
	define("TITLE_1", "Architecture | Deep Learning");
	define("TITLE_2", "Deep Belief Network");
	include('includes/header.php');
?>

<div class="archi-items">
	<p>Deep belief networks are algorithms that use probabilities and semi-unsupervised learning to produce outputs.
	Deep belief networks (DBN) model is first proposed by Hinton in 2006. The original DBN has demonstrated its
	success in simple image classification tasks of MNIST.</p>
	<p>A DBN usually comprise an autoencoder network for features extraction and a classifier layer depends on the
	purpose of the whole DBN.</p>
	<p>A common implementation of DBN (which was used by Hinton) is stacking multiple Restricted Boltzmann
	machine (RBM) layers and adding a neural network layer depends on the purpose of the network.</p>

	<br>
	<div class="container-fluid" style="text-align:center;"><img src="images/belief.png" style="width:50%;"/></div>
	<br>

	<p>DBN pre-trains most of its layers (particularly those RBM layers) by using a greedy algorithm. The greedy
	algorithm starts from the first hidden layer (near input layer) then move to the last one, fine-tunes weights
	and biases layer-by-layer, uses previous layer as input for current layers. The algorithm tries to make the most
	optimal choice in each layer, thus tries to approach global optimum</p>

	<p>This algorithm tries to solve the vanishing gradient proposed by backpropagation.</p>
	<p>The whole network (classifier layer included) is trained again in an supervied manner.</p>
	<p>The fact that DBN pretrain most of its layers make it highly efficient. It also doesn’t need labeled data to
	pre-train the network which makes pre-trainning DBN a much easier task.</p>
	<p>Deep belief network has many applications, such as Image recognition, Video recognition, Motion-capture data.</p>
	<p>DBN Advantages first applied to image recognition tasks, showing gains between 10-30% relative successful
	application on small vocabulary phonetic recognition task.</p>

</div>

<div class="container-fluid">	
	
	<div class="btn-item">
		<a href="architect.php">	
			<button type="button" class="btn btn-primary">Other Architectures
			</button> 
		</a>
	</div>

</div>

<?php
	include('includes/footer.php');
?>