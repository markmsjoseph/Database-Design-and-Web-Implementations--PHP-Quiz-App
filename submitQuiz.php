
 <?php
# start a user session
session_start();
 //the current user's session id is returned via the session_id() function
$current_user_id = session_id();



?>







<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>My Quiz</title>
	<link rel="stylesheet" type="text/css" href="quizQuestion.css" />
</head>
<body>

<p> 	<?php print("Your session id: " . $current_user_id); ?>  	</p>


				<center><h1>Online Quiz</h1></center>
<br>
<br>
				<center><h2> Quiz Results</h2></center>


<?php $count = 0; ?>  	</p>


1. What does the import statement do?<br>
A. Let you use your own module <br>
B. Let you import other modules <br>
C. Lets you load a csv file <br>
D. Lets you open an image file<br><br>
<div class = "answer">
		<?php 
				if (!empty($_GET['question1'])) {
					if(sizeof($_GET['question1']) === 2){
					    if($_GET['question1'][0] === "A" && $_GET['question1'][1] === "B"){
					    	$count++;
					    	?>
					    		<div id = "correct">CORRECT!!!</div>
					    	<?php
					    }
					    else{
					    	print("WRONG :( Correct answer was A and B");
					    }
				  }
				  else{
				  	print("WRONG. This was a 1 answer question and you selected more :(. Correct answer was A and B" );
				  }
				}
				else{
					print("EMPTY ANSWER. WRONG :(");
				}

		?>
</div>
<br>
<br>
2. Do dictionaries in python print in sequential order? <br>
A. Yes <br>
B. No <br>
C. Only if it has multiple keys <br>
D. Only if you use dictionary.items()<br><br>
<div class = "answer">
		<?php 
				if (!empty($_GET['question2'])) {
					if(sizeof($_GET['question2']) === 1){
					    if($_GET['question2'][0] === "B"){
					    	$count++;
					    		?>
					    		<div id = "correct">CORRECT!!!</div>
					    	<?php
					    }
					    else{
					    	print("WRONG :( Correct answer was B");
					    }
				  }
				  else{
				  	print("WRONG. This was a 1 answer question and you selected more :(. Correct answer was B" );
				  }
				}
				else{
					print("EMPTY ANSWER. WRONG :(");
				}

		?>
</div>



<br>
<br>
 3. Which data structure would perform best when storing movie names and then searching for a specific movie?<br>
A. Binary Heap <br>
B. Linked list <br>
C. Binary tree <br>
D. Doubly linked list<br><br>
<div class = "answer">
<?php 
				if (!empty($_GET['question3'])) {
					if(sizeof($_GET['question3']) === 1){
					    if($_GET['question3'][0] === "C"){
					    	$count++;
					    		?>
					    		<div id = "correct">CORRECT!!!</div>
					    	<?php
					    }
					    else{
					    	print("WRONG :( Correct answer was C");
					    }
				  }
				  else{
				  	print("WRONG. This was a 1 answer question and you selected more :(. Correct answer was C" );
				  }
				}
				else{
					print("EMPTY ANSWER. WRONG :(");
				}

		?>
</div>





			<br>
			<br>
4. Which of the following are true about processes and threads?<br>
A. Threads require more overhead than processes <br>
B. Processes are easier to create than threads <br>
C. Processes are independent of eachother and threads are indepenednt of each process<br>
D. Each process has its own address space <br>
E. Threads within a process share a processes' address space <br>
<div class = "answer">
<?php 
				if (!empty($_GET['question4'])) {
					if(sizeof($_GET['question4']) === 2){
					    if($_GET['question4'][0] === "D" && $_GET['question4'][0] === "E"){
					    	$count++;
					    		?>
					    		<div id = "correct">CORRECT!!!</div>
					    	<?php
					    }
					    else{
					    	print("WRONG :( Correct answers were D and E");
					    }
				  }
				  else{
				  	print("WRONG. This was a 1 answer question and you selected more :(. Correct answers were D and E " );
				  }
				}
				else{
					print("EMPTY ANSWER. WRONG :(");
				}

		?>

</div>


<br>
			<br>
5. Single core vs multicore? Select correct answers<br>
A. Multi threaded programs are always faster than single threaded <br>
B. A core can run multiple threads <br>
C. Multi threaded programs can perform worse than single threaded<br>

<div class = "answer">
<?php 
				if (!empty($_GET['question5'])) {
					if(sizeof($_GET['question5']) === 2){
					    if($_GET['question5'][0] === "B" && $_GET['question5'][0] === "C"){
					    	$count++;
					    		?>
					    		<div id = "correct">CORRECT!!!</div>
					    	<?php
					    }
					    else{
					    	print("WRONG :( Correct answers were B and C");
					    }
				  }
				  else{
				  	print("WRONG. This was a 1 answer question and you selected more :(. Correct answers were B and C " );
				  }
				}
				else{
					print("EMPTY ANSWER. WRONG :(");
				}

		?>
</div>

	<br>
			<br>
6. Which of the following is a programming language?<br>
A. atom <br>
B. mongo <br>
C. swift<br>
D. nodemon<br>
<div class = "answer">
<?php 
				if (!empty($_GET['question6'])) {
					if(sizeof($_GET['question6']) === 1){
					    if($_GET['question6'][0] === "C"){
					    	$count++;
					    		?>
					    		<div id = "correct">CORRECT!!!</div>
					    	<?php
					    }
					    else{
					    	print("WRONG :( Correct answer was C");
					    }
				  }
				  else{
				  	print("WRONG. This was a 1 answer question and you selected more :(. Correct answer was C" );
				  }
				}
				else{
					print("EMPTY ANSWER. WRONG :(");
				}

		?>
	</div>
<br>
<br>

<?php 
if($count >3 ){?>
	<div class = "goodscore" > <?php print("Your score is ". $count/6 *100 . "%"); ?> </div>
<?php
}
else{?>
<div class = "badscore" > <?php print("Your score is ". $count/6 *100 . "% which is kind of bad"); ?> </div>
<?php
}
?>


</body>
</html>






