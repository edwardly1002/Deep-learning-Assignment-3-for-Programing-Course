<?php
	define("TITLE_1", "Architecture | Deep Learning");
	define("TITLE_2", "Convolutional Neural Network");
	include('includes/header.php');
?>

<div class="archi-items">

	<p>Convolutional Neural Network, or CNN in short, is the popular choice of neural network for Computer Vision
	tasks such as image recognition. The name ‘convolution’ is derived from a mathematical operation involving
	the convolution of different functions.
	CNN evolved from the “neocognitron” model which was proposed by Dr. Kunihiko Fukushima in 1980. The
	"neocognitron" model itself was inspired by how neurons in human visual cortex work. First works on modern
	CNN by Yann LeCun demonstrated that a CNN model which aggregates simpler features into progressively
	more complicated features can be successfully used for handwritten character recognition. Throughout the 1990s
	and early 2000s, researchers carried out further work on the CNN models. Around 2012 CNN enjoyed a huge
	surge in popularity (which continues today) after a CNN called AlexNet achieved state-of-the-art performance
	labeling pictures in the ImageNet challenge.</p>
	<br>

	<h4>There are 4 primary steps or stages in designing a CNN</h4>
	<p class="indent"><strong>1. Convolution:</strong> The input signal is received at this stage.</p>
	<p class="indent"><strong>2. Subsampling:</strong> Inputs received from the convolution layer are smoothened to reduce the sensitivity of the
	filters to noise or any other variation.</p>
	<p class="indent"><strong>3. Activation:</strong> This layer controls how the signal flows from one layer to the other, similar to the neurons in
	our brain.</p>
	<p class="indent"><strong>4. Fully connected:</strong> In this stage, all the layers of the network are connected with every neuron from a
	preceding layer to the neurons from the subsequent layer.</p>

	<br>
	<div class="container-fluid" style="text-align:center;"><img src="images/convolutional.png" style="width:70%;"/></div>
	<br>

	<p>Throughout the past several years, CNN have achieved excellent performance describing natural images (including ImageNet, CIFAR-10, CIFAR-100, 
	and VisualGenome), performing facial recognition (including CelebA), and analyzing medical images (including chest x-rays, photos of skin lesions, 
	and histopathology slides).</p>	



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