<?php

	$history = array(

					array(
						"year" => "1943",
						"event" => "The history of Deep Learning can be traced back to 1943, when Walter Pitts and Warren McCulloch created a computer model 
									based on the neural networks of the human brain. They used a combination of algorithms and mathematics they called 
									“threshold logic” to mimic the thought process. Since that time, Deep Learning has evolved steadily, with only two 
									significant breaks in its development. Both were tied to the infamous Artificial Intelligence winters."
					),

					array(
						"year" => "1957-1960",
						"event" => "In 1957, Frank Rosenblatt designed the first neural network for computers (the perceptron), which simulate the thought processes 
									of the human brain. There years later, Henry J. Kelley is given credit for developing the basics of a continuous Back Propagation Model. 
									In 1962, a simpler version based only on the chain rule was developed by Stuart Dreyfus. While the concept of back propagation 
									(the backward propagation of errors for purposes of training) did exist in the early 1960s, it was clumsy and inefficient, 
									and would not become useful until 1985."
					),

					array(
						"year" => "1965",
						"event" => "The earliest efforts in developing Deep Learning algorithms came from Alexey Grigoryevich Ivakhnenko (developed the 
									Group Method of Data Handling) and Valentin Grigorʹevich Lapa (author of Cybernetics and Forecasting Techniques) in 1965. 
									They used models with polynomial (complicated equations) activation functions, that were then analyzed statistically. From 
									each layer, the best statistically chosen features were then forwarded on to the next layer (a slow, manual process)."
					),

					array(
						"year" => "1971",
						"event" => "During the 1970’s the first AI winter kicked in, the result of promises that couldn’t be kept. The impact of this lack of 
									funding limited both DL and AI research. Fortunately, there were individuals who carried on the research without funding. 
									A 1971 paper described already a deep network with 8 layers trained by the group method of data handling algorithm." 	
					),

					array(
						"year" => "1970-1985",
						"event" => "Back propagation, the use of errors in training Deep Learning models, evolved significantly in 1970. This was when Seppo 
									Linnainmaa wrote his master’s thesis, including a FORTRAN code for back propagation. Unfortunately, the concept was not 
									applied to neural networks until 1985. This was when Rumelhart, Williams, and Hinton demonstrated back propagation in a 
									neural network could provide “interesting” distribution representations. Philosophically, this discovery brought to light 
									the question within cognitive psychology of whether human understanding relies on symbolic logic (computationalism) or 
									distributed representations (connectionism)." 
						# “winter” definition: AI winter is a period of reduced funding and interest in artificial intelligence research. 
						# The term was coined by analogy to the idea of a nuclear winter. The field has experienced several hype cycles, 
						# followed by disappointment and criticism, followed by funding cuts, followed by renewed interest years or decades later.

					),
						

					array(
						"year" => "1989",
						"event" => "In 1989, Yann LeCun provided the first practical demonstration of backpropagation 
									at Bell Labs. He combined convolutional neural networks with back propagation onto read “handwritten” digits. This system was 
									eventually used to read the numbers of handwritten checks."
					),

					array(
						"year" => "1985-1890s",
						"event" => "This time is also when the second AI winter (1985-90s) kicked in, which also effected research for neural networks and Deep 
									Learning. Various overly-optimistic individuals had exaggerated the “immediate” potential of Artificial Intelligence, 
									breaking expectations and angering investors. The anger was so intense, the phrase Artificial Intelligence reached 
									pseudoscience status. Fortunately, some people continued to work on AI and DL, and some significant advances were made. 
									In 1995, Dana Cortes and Vladimir Vapnik developed the support vector machine (a system for mapping and recognizing similar 
									data). LSTM (long short-term memory) for recurrent neural networks was developed in 1997, by Sepp Hochreiter and Juergen 
									Schmidhuber."
					),

					array(
						"year" => "1980-1989",
						"event" => "Other deep learning working architectures, specifically those built for computer vision, began with the Neocognitron 
									introduced by Kunihiko Fukushima in 1980. In 1989, Yann LeCun et al. applied the standard backpropagation algorithm, 
									which had been around as the reverse mode of automatic differentiation since 1970, to a deep neural network 
									with the purpose of recognizing handwritten ZIP codes on mail. While the algorithm worked, training required 3 days.
									By 1991 such systems were used for recognizing isolated 2-D hand-written digits, while recognizing 3-D objects was done by 
									matching 2-D images with a handcrafted 3-D object model. Weng et al. suggested that a human brain does not use a monolithic 
									3-D object model and in 1992 they published Cresceptron,[40][41][42] a method for performing 3-D object recognition in 
									cluttered scenes. Because it directly used natural images, Cresceptron started the beginning of general-purpose visual 
									learning for natural 3D worlds."
					),

					array(
						"year" => "",
						"event" => "Cresceptron is a cascade of layers similar to Neocognitron. But while Neocognitron required 
									a human programmer to hand-merge features, Cresceptron learned an open number of features in each layer without supervision, 
									where each feature is represented by a convolution kernel. Cresceptron segmented each learned object from a cluttered 
									scene through back-analysis through the network. Max pooling, now often adopted by deep neural networks (e.g. ImageNet tests), 
									was first used in Cresceptron to reduce the position resolution by a factor of (2x2) to 1 through the cascade for better 
									generalization."	
					),

					array(
						"year" => "1999",
						"event" => "The next significant evolutionary step for Deep Learning took place in 1999, when computers started becoming faster at 
									processing data and GPU (graphics processing units) were developed. Faster processing, with GPUs processing pictures, 
									increased computational speeds by 1000 times over a 10 year span. During this time, neural networks began to compete with 
									support vector machines. While a neural network could be slow compared to a support vector machine, neural networks offered 
									better results using the same data. Neural networks also have the advantage of continuing to improve as more training data 
									is added."
					),

					array(
						"year" => "2000",
						"event" => "Around the year 2000, The Vanishing Gradient Problem appeared. It was discovered “features” (lessons) formed in lower layers 
									were not being learned by the upper layers, because no learning signal reached these layers. This was not a fundamental 
									problem for all neural networks, just the ones with gradient-based learning methods. The source of the problem turned out 
									to be certain activation functions. A number of activation functions condensed their input, in turn reducing the output 
									range in a somewhat chaotic fashion. This produced large areas of input mapped over an extremely small range. In these 
									areas of input, a large change will be reduced to a small change in the output, resulting in a vanishing gradient. Two 
									solutions used to solve this problem were layer-by-layer pre-training and the development of long short-term memory."
					),

					array(
						"year" => "2009",
						"event" => "In 2009, Fei-Fei Li, an AI professor at Stanford launched ImageNet, assembled a free database of more than 14 million 
									labeled images. The Internet is, and was, full of unlabeled images. Labeled images were needed to “train” neural nets. 
									Professor Li said, “Our vision was that Big Data would change the way machine learning works. Data drives learning.”"
					),

					array(
						"year" => "2011",
						"event" => "By 2011, the speed of GPUs had increased significantly, making it possible to train convolutional neural networks 
									“without” the layer-by-layer pre-training. With the increased computing speed, it became obvious Deep Learning had 
									significant advantages in terms of efficiency and speed. One example is AlexNet, a convolutional neural network whose 
									architecture won several international competitions during 2011 and 2012. Rectified linear units were used to enhance 
									the speed and dropout."
					),

					array(
						"year" => "2012-?",
						"event" => "From 2012, Deep Learning has been developed a lot by contribution of huge corporations as Google, Amazon, Microsoft, 
									Facebook. The accuracy has been improved significantly."
					),

				);


	$achieve = array(

		array(
			"name" => "Automatic speech recognition",
			"href" => "item1.php"
		),

		array(
			"name" => "Image recognition",
			"href" => "item2.php"
		),

		array(
			"name" => "Natural language processing",
			"href" => "item3.php"
		),

		array(
			"name" => "Robots and Self-driving Cars",
			"href" => "item4.php"
		),

		array(
			"name" => "Financial fraud detection",
			"href" => "item5.php"
		),		

	);

	$architect = array(

		array(
			"name" => "Convolutional Neural Network",
			"href" => "architect1.php"
		),

		array(
			"name" => "Recurrent Neural Network",
			"href" => "architect2.php"
		),

		array(
			"name" => "Deep Belief Network",
			"href" => "architect3.php"
		),

		array(
			"name" => "Autoencoder",
			"href" => "architect4.php"
		)
	);

	$references = array(

		array (
			"id" => "1",
			"href" => "https://en.wikipedia.org/wiki/Deep_learning"
		),
		array (
			"id" => "2",
			"href" => "https://www.dataversity.net/brief-history-deep-learning/"
		),
		array (
			"id" => "3",
			"href" => "https://blog.statsbot.co/deep-learning-achievements-4c563e034257"
		),
		array (
			"id" => "4",
			"href" => "https://techmaster.vn/posts/33923/lich-su-phat-trien-machine-learning"
		),
		array (
			"id" => "5",
			"href" => "https://spiderum.com/bai-dang/Vai-net-ve-AI-Machine-Learning-va-Deep-Learning-bih"
		),
		array (
			"id" => "6",
			"href" => "http://sputnikedu.com/mot-chut-lich-su-ve-mang-than-kinh-nhan-tao/",
		),
		array (
			"id" => "7",
			"href" => "https://dlapplications.github.io/2018-06-27-Brief-History-of-Deep-learning/#first",
		), 
		array (
			"id" => "8",
			"href" => "https://missinglink.ai/guides/neural-network-concepts/deep-belief-networks-workapplications/",
		),
		array (
			"id" => "9",
			"href" => "https://hub.packtpub.com/top-5-deep-learning-architectures/",
		),
		array (
			"id" => "10",
			"href" => "https://towardsdatascience.com/learn-how-recurrent-neural-networks-work-84e975feaaf7",
		),
		array (
			"id" => "11",
			"href" => "https://glassboxmedicine.com/2019/04/13/a-short-history-of-convolutional-neuralnetworks/",
		),
		array (
			"id" => "12",
			"href" => "https://theappsolutions.com/blog/development/convolutional-neural-networks/",
		),
		array (
			"id" => "13",
			"href" => "http://www.ee.columbia.edu/~stanchen/spring16/e6870/slides/lecture13.pdf",
		),
		array (
			"id" => "14",
			"href" => "https://en.wikipedia.org/wiki/Deep_belief_network",
		),
		array (
			"id" => "15",
			"href" => "https://www.cs.toronto.edu/~hinton/nipstutorial/nipstut3.pdf",
		),
		array (
			"id" => "16",
			"href" => "https://www.oreilly.com/library/view/deep-learning/9781491924570/ch04.html",
		),
		array (
			"id" => "17",
			"href" => "https://en.wikipedia.org/wiki/Autoencoder",
		),
		array (
			"id" => "18",
			"href" => "https://towardsdatascience.com/applied-deep-learning-part-3-autoencoders-1c083af4d798",
		),
		array (
			"id" => "19",
			"href" => "https://www.dataversity.net/brief-history-deep-learning/",
		),
		array (
			"id" => "20",
			"href" => "http://www.iitg.ac.in/samudravijaya/tutorials/asrTutorial.pdf",
		),
		array (
			"id" => "21",
			"href" => "https://marutitech.com/working-image-recognition/",
		),
		array (
			"id" => "22",
			"href" => "https://becominghuman.ai/a-simple-introduction-to-natural-language-processingea66a1747b32",
		),
		array (
			"id" => "23",
			"href" => "https://towardsdatascience.com/deep-learning-for-self-driving-cars-7f198ef4cfa2",
		),
		array (
			"id" => "24",
			"href" => "https://becominghuman.ai/sophia-the-overhyped-toaster-d2e5203c8539",
		),
		array (
			"id" => "25",
			"href" => "https://www.altexsoft.com/whitepapers/fraud-detection-how-machine-learning-systems-helpreveal-scams-in-fintech-healthcare-and-ecommerce/"
		),	
		array (
			"id" => "26",
			"href" => "https://www.dataversity.net/brief-history-deep-learning"
		),
		array(
			"id" => "27",
			"href" => "http://www.iitg.ac.in/samudravijaya/tutorials/asrTutorial.pdf"
		),
		array(
			"id" => "28",
			"href" => "https://marutitech.com/working-image-recognition/"
		),
		array(
			"id" => "29",
			"href" => "https://towardsdatascience.com/introduction-to-natural-language-processing-nlp-323cc007df3d"
		),
		array(
			"id" => "30",
			"href" => "https://becominghuman.ai/a-simple-introduction-to-natural-language-processing-ea66a1747b32"
		),
		array(
			"id" => "31",
			"href" => "https://towardsdatascience.com/deep-learning-for-self-driving-cars-7f198ef4cfa2"
		),
		array(
			"id" => "32",
			"href" => "https:///becominghuman.ai/sophia-the-overhyped-toaster-d2e5203c8539"
		),
		array(
			"id" => "33",
			"href" => "https://www.altexsoft.com/whitepapers/fraud-detection-how-machine-learning-systems-help-reveal-scams-in-fintech-healthcare-and-ecommerce/"
		)

	);
	
	$member = array(
		array(
			"name" => "Bách Lý",
			"university" => "Ho Chi Minh University of Technology",
			"department" => "Department of Computer Science and Engineering",
			"ID" => "1910038",
			"img" => "images/Bach.jpg"
		),
		array(
			"name" => "Trúc Nguyễn",
			"university" => "Ho Chi Minh University of Technology",
			"department" => "Department of Computer Science and Engineering",
			"ID" => "1910650",
			"img" => "images/Truc.jpg"
		),
		array(
			"name" => "Toàn Nguyễn",
			"university" => "Ho Chi Minh University of Technology",
			"department" => "Department of Computer Science and Engineering",
			"ID" => "1910617",
			"img" => "images/Toan.jpg"
		),

		array(
			"name" => "Long Nguyễn",
			"university" => "Ho Chi Minh University of Technology",
			"department" => "Department of Computer Science and Engineering",
			"ID" => "1911502",
			"img" => "images/Long"
		),
		array(
			"name" => "Minh Phạm",
			"university" => "Ho Chi Minh University of Technology",
			"department" => "Department of Computer Science and Engineering",
			"ID" => "1910346",
			"img" => "images/Minh"
		),
	);

?>