<?php
	define("TITLE_1", "Architecture | Deep Learning");
	define("TITLE_2", "Recurrent Neural Network");
	include('includes/header.php');
?>

<div class="archi-items">

	<p>Recurrent Neural Network (RNN) is called ‘recurrent’ mainly because a uniform task is performed for every
	single element of a sequence, with the output dependant on the previous computations as well. Think of the
	network as having a memory, where every calculated information is captured, stored and utilized to calculate
	the final outcome.</p>
	<p>Recurrent neural network was based on David Rumelhart’s work in 1986. In 1993, a neural history compressor
	system solved a "Very Deep Learning" task that required more than 1000 subsequent layers in an RNN unfolded
	in time.</p>
	<p>Long short-term memory (LSTM) networks were discovered by Hochreiter and Schmidhuber in 1997 and set
	accuracy records in multiple applications domains.
	Around 2007, LSTM started to revolutionize speech recognition, outperforming traditional models in certain
	speech applications. In 2009, a Connectionist Temporal Classification (CTC)-trained LSTM network was the
	first RNN to win pattern recognition contests when it won several competitions in connected handwriting recognition.</p>
    
    <br>
	<h4>The basic RNN works as follow:</h4>
	<p class="indent">1. Input an example from a dataset.</p>
	<p class="indent">2. The network will take that example and apply some complex computations to it using randomly initialized variables (called weights and biases).</p>
	<p class="indent">3. A predicted result will be produced.</p>
	<p class="indent">4. Comparing that result to the expected value will give us an error.</p>
	<p class="indent">5. Propagating the error back through the same path will adjust the variables.</p>
	<p class="indent">6. Steps 1–5 are repeated until we are confident to say that our variables are well-defined.</p>
	<p class="indent">7. A predication is made by applying these variables to a new unseen input.</p>
    
    <br>
	<div class="container-fluid" style="text-align:center;"><img src="images/recurrent.jpg" style="width: 70%;"/></div>
	<br>

    <br>
	<p>More sophisticated and complex RNN may add many difference things to the basic one. The LSTM adds
	backward connection between layers and memory storing unit to make the network more powerfull. The echo
	state network adds a sparsely connected random hidden layer to better produce certain time series.
	RNN finds a lot applications in real-world domains such as natural language processing, speech synthesis and
	machine translation. Their performance in these fields are so outstanding that Google announced the launch
	of a new model for Google Translate. The company described in detail the network architecture is Recurrent
	Neural Network and this model would close down the gap with humans in accuracy of the translation by 55–85%
	(estimated by people on a 6-point scale).</p>


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