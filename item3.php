<?php
	define("TITLE_1", "Achievement | Deep Learning");
	define("TITLE_2", "Natural Language Processing - Closer To Human Communication");
	include('includes/header.php');
?>

<div class="achieve-items">

	<h4>What is Natural Language Processing (NLP)?</h4>
	<p>Natural language processing (NLP) is a branch of artificial intelligence that helps computers understand, interpret and manipulate human language. 
	NLP draws from many disciplines, including computer science and computational linguistics, in its pursuit to fill the gap between human communication 
	and computer understanding.</p>

	<br>
	<div class="container-fluid" style="text-align: center;"><img src="images/NLP.jpg" style="width:65%"/></div>
	<br>

    <br>
	<h4>Why is NLP so chalenging?</h4>
	<p>Natural Language processing is considered a difficult problem in computer science. It’s the nature of the human language that makes NLP difficult. 
	The rules that dictate the passing of information using natural languages are not easy for computers to understand. Some of these rules can be high-leveled 
	and abstract; for example, when someone uses a sarcastic remark to pass information. On the other hand, some of these rules can be low-levelled; for example, 
	using the character “s” to signify the plurality of items. Comprehensively understanding the human language requires understanding both the words and how 
	the concepts are connected to deliver the intended message. While humans can easily master a language, the ambiguity and imprecise characteristics of the 
	natural languages are what make NLP difficult for machines to implement.</p>
    
    <br>
	<h4>What real-life problem does NLP solve?</h4>
	<ul>
		<li>Email spam detection</li>
		<li>Sentiment Analysis: determine polarity or emotion of a sentence</li>
		<li>Co-reference resolution: in a sentence, determine which words refer to the same object</li>
		<li>Word sense disambiguation: choose the most suitable meaning of a word which has more than one meaning</li>
		<li>Machine translation</li>
		<li>Dialog agents and chat-bots</li>
		<li>Summarization</li>
	</ul>

	<p>From <i>towardsdatascience.com</i>: <a href="https://towardsdatascience.com/introduction-to-natural-language-processing-nlp-323cc007df3d"></a> Introduction 
	to Natural Language Processing</p>
	<p>From <i>becominghuman.ai</i>: <a href="https://becominghuman.ai/a-simple-introduction-to-natural-language-processing-ea66a1747b32">A Simple Introduction 
	to Natural Language Processing</a></p>

</div>

<div class="container-fluid">	
	
	<div class="btn-item">
		<a href="achieve.php">	
			<button type="button" class="btn btn-primary">Other Achivements
			</button> 
		</a>
	</div>

</div>

<?php
	include('includes/footer.php');
?>