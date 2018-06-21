
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
	<link rel="stylesheet" type="text/css" href="quizQuestion.css" />
	<title>My Quiz</title>
</head>
<body>

<p> 	<?php print("Your session id: " . $current_user_id); ?>  	</p>






			<center><h1>Online Quiz</h1></center>
<br>
<br>
	<center><h2>Programming Quiz</h2></center>

			<form action="submitQuiz.php" method="GET">
					<div class = "question">
						 1. What does the import statement in python do? Select all answers that apply<br>
						<input type="checkbox" name="question1[]" value="A"> A. Let you use your own module <br>
  						<input type="checkbox" name="question1[]" value="B"> B. Let you import other modules <br>
  						<input type="checkbox" name="question1[]" value="C"> C.Lets you load a csv file <br>
  						<input type="checkbox" name="question1[]" value="D"> D. Lets you open an image file<br>
  					</div>
			<br>
			<br>
			<br>
					<div class = "question">
  						2. Do dictionaries in python print in order?<br>
						<input type="checkbox" name="question2[]" value="A"> A. Yes <br>
  						<input type="checkbox" name="question2[]" value="B"> B. No <br>
  						<input type="checkbox" name="question2[]" value="C"> C. Only if it has multiple keys <br>
  						<input type="checkbox" name="question2[]" value="D"> D. Only if you use dictionary.items()<br>
					</div>
			<br>
			<br>
			<br>
					<div class = "question">
					  	 3. Which data structure would perform best when storing movie names and then searching for a specific movie?<br>
						<input type="checkbox" name="question3[]" value="A"> A. Array <br>
  						<input type="checkbox" name="question3[]" value="B"> B. Linked list <br>
  						<input type="checkbox" name="question3[]" value="C"> C. Binary tree <br>
  						<input type="checkbox" name="question3[]" value="D"> D. Doubly linked list<br>
					</div>
			<br>
			<br>
			<br>
					<div class = "question">
					  	 4. Which of the following are true about processes and threads?<br>
						<input type="checkbox" name="question4[]" value="A"> A. Threads require more overhead than processes <br>
  						<input type="checkbox" name="question4[]" value="B"> B. Processes are easier to create than threads <br>
  						<input type="checkbox" name="question4[]" value="C"> C. Processes are independent of eachother and threads are indepenednt of each process <br>
  						<input type="checkbox" name="question4[]" value="D"> D. Each process has its own address space <br>
  						<input type="checkbox" name="question4[]" value="E"> E. Threads within a process share a processes' address space <br>
					 </div>
			<br>
			<br>
			<br>
					<div class = "question">
					  	 5. Single core vs multicore? Select correct answers<br>
						<input type="checkbox" name="question5[]" value="A"> A. Multi process programs are always faster than single threaded <br>
  						<input type="checkbox" name="question5[]" value="B"> B. A core can run multiple threads <br>
  						<input type="checkbox" name="question5[]" value="C"> C. Multi threaded programs can perform worse than single threaded<br>
					</div>
			<br>
			<br>
			<br>
					<div class = "question">
					  	 6. Which of the following is a programming language?<br>
						<input type="checkbox" name="question6[]" value="A"> A. atom <br>
  						<input type="checkbox" name="question6[]" value="B"> B. mongo <br>
  						<input type="checkbox" name="question6[]" value="C"> C. swift<br>
  						<input type="checkbox" name="question6[]" value="D"> D. nodemon<br>
  					</div>


  				
			  		<center><input type="submit" value="Submit Answers"></center>
			  	

			</form>
			<br>
			<br>


</body>
</html>






