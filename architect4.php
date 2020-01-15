<?php
	define("TITLE_1", "Architecture | Deep Learning");
	define("TITLE_2", "Autoencoder");
	include('includes/header.php');
?>

<div class="archi-items">
	<p>An autoencoder is a type of artificial neural network used to learn efficient data codings in an unsupervised
	manner. The aim of an autoencoder is to learn a representation (encoding) for a set of data, typically for
	dimensionality reduction, by training the network to ignore signal “noise”. Along with the reduction side, a reconstructing side is learnt, 
	where the autoencoder tries to generate from the reduced encoding a representation as close as possible to its original input, hence its name.</p>
	<p>An autoencoder learns to copy its input to its output so it doesn’t need any labeled data, hence it’s a unsupervised machine learning algorithm.</p>
	<p>The simplest form of an autoencoder is a feedforward, non-recurrent neural network similar to single layer		
	perceptrons that participate in multilayer perceptrons (MLP) – having an input layer, an output layer and one
	or more hidden layers connecting them – where the output layer has the same number of nodes (neurons) as
	the input layer, and with the purpose of reconstructing its inputs (minimizing the difference between the input
	and the output) instead of predicting the target value with given inputs.</p>
	<p>Autoencoder is constructed by first having an input, output and only one hidden layer. The goal is to train the
	hidden layer so that the difference between the input and output layer is as small as possible. After the hidden
	layer is properly trained, the network is added another hidden layer, using the previous trained hidden layer as
	input to train. The process is repeated until the network is deep enough.</p>
	
	<br>
	<h4>An autoencoder can be separated into 2 parts: encoder and decoder.</h4>
	<div class="container-fluid" style="text-align:center;"><img src="images/autoencoder.png" style="width: 70%;"/></div>
	<br>

	<p>Two of the historic application of autoencoder are dimensionality reduction and information retrieval. However,
	modern variations of autoencoder have proven to be useful in anomaly detection, images processing and drug
	discovery. Autoencode is also often used as part of a big deep neural network.</p>
	

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