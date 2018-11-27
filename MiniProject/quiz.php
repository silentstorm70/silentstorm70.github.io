<?php
error_reporting(E_ALL ^ E_NOTICE);
$answer1 = $_POST['question-1-answers'];

$answer2 = $_POST['question-2-answers'];

$answer3 = $_POST['question-3-answers'];

$answer4 = $_POST['question-4-answers'];


if (empty($_POST['question-1-answers'])) {
    $answer1 = "B";
  }
if (empty($_POST['question-2-answers'])) {
    $answer2 = "B";
  }
if (empty($_POST['question-3-answers'])) {
    $answer3 = "B";
  }
if (empty($_POST['question-4-answers'])) {
    $answer4 = "A";
  }


$wrong1 = "Hint 1: Try reviewing the University District.";
$wrong2 = "Hint 2: Try reviewing the Old Town District.";
$wrong3 = "Hint 3: Look at Key Targets to see which district has the fewest.";
$wrong4 = "Hint 3: Look at Suggested Sugested Strategies to learn more about different attacks.";
$hint1 = "";
$hint2 = "";
$hint3 = "";
$hint4 = "";

$totalCorrect = 0;

if ($answer1 == "A") { $totalCorrect++; }

if ($answer2 == "A") { $totalCorrect++; }

if ($answer3 == "C") { $totalCorrect++; }

if ($answer4 == "B") { $totalCorrect++; }


if ($answer1 != "A") { $hint1 = $wrong1;}

if ($answer2 != "A") { $hint2 = $wrong2;}

if ($answer3 != "C") { $hint3 = $wrong3;}

if ($answer4 != "B") { $hint4 = $wrong4;}




echo '<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Test Yourself</title>
<link href="index.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Audiowide|Glegoo:400,700|Montserrat+Alternates:100i,300,400,700,900i" rel="stylesheet">	
</head>

<body>
	
<div class="topnav" id="myTopnav">
	<a href="index.html" class="li">Home</a> 
	<a href="overview.html" class="li">Overview</a> 
	<a href="residential.html" class="li">Residential Districts</a> 
	<a href="university.html" class="li">University District</a> 
	<a href="rural.html" class="li">Rural Districts</a> 
	<a href="oldtown.html" class="li">Old Town District</a>
	<a href="financial.html" class="li">Financial District</a>
	<a href="quiz.html" class="li">Test Yourself</a> 
	<a href="javascript:void(0);" class="icon" onClick="myFunction()"> <em class="fa fa-bars"></em> </a>
	</div>
	
<div class="quizsplash">
<div class="quizmaps">
	<!--I think for places with more information having drop down menus would be good or you can have a popup for each supsection -->
	<!--also just a thought I think since its supposed to be like gueyre even though we dont have a ton of time maybe  -->
	<!--having a quiz elemnt where they have to choose the right way to deal with it. -->
	<!--Even if it wash just a static view. -->
		<h1>Quiz</h1>
		<p>Below you will find a few questions that will test your knowledge of security. Once you have answered
		all the questions that you can, press submit to see if you are ready to take on Troy, AL. </p>
		
		<form action="quiz.php" method="post" id="quiz">
		
		
					<h3>Which defenses does the University employ?</h3>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
						<label for="question-1-answers-A">A) Professional IT staff, dedicated police force, Password Protected WiFi </label>
					</div>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
						<label for="question-1-answers-B">B) No defenses - residents are expected to defend themselves against cyber threats</label>
					</div>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
						<label for="question-1-answers-C">C) Few police patrols, and personally owned security systems </label>
					</div>
					<div>
						<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
						<label for="question-1-answers-D">D) None of the above</label>
					</div>
						<h3>Which Key Tagets are located in Old Town</h3>
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
						<label for="question-1-answers-A">A) City Hall, Police HQ, Troy Cable Offices </label>
					</div>
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
						<label for="question-1-answers-B">B) Troy Hospital, Walmart, HWY 231</label>
					</div>
					<div>
						<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
						<label for="question-1-answers-C">C) There are no key targets in Old Town</label>
					</div>
							<h3>Which district should be avoided due to its few targets? (Lowest Value District)</h3>
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
						<label for="question-1-answers-A">A) Financial District </label>
					</div>
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
						<label for="question-1-answers-B">B) Residential District</label>
					</div>
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
						<label for="question-1-answers-C">C) Rural District</label>
					</div>
					<div>
						<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
						<label for="question-1-answers-D">D) None of the above</label>
					</div>
							<h3>Which attack is suggested to best bring down services in the Troy Hospital</h3>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
						<label for="question-1-answers-A">A) Cross Site Scripting Attack </label>
					</div>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
						<label for="question-1-answers-B">B) Denial of Service/DDoS Attack</label>
					</div>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
						<label for="question-1-answers-C">C) Man in the Middle Attack</label>
					</div>
					<div>
						<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
						<label for="question-1-answers-D">D) Cross Site Request Forgery Attack</label>
					</div>
				<br>	
				<input type="submit" value="Submit Quiz"  />
		</form>
		
		
		<p> <a href="#openModal5" class="li">Check Your Answers</a></p>
		
	</div>	
	
</div>	
	
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
	
	
	
	
	
	
	
	<div id="openModal5" class="modalDialog" >
		<div>
		<a href="#close" title="Close" class="close">X</a>
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h3> Here are your results...</h3>
			<p>'.$totalCorrect.' / 4 correct </p>
			<p>'.$hint1.'</p>
			<p>'.$hint2.'</p>
			<p>'.$hint3.'</p>
			<p>'.$hint4.'</p>
		</div>
		</div>
	</div>
	
	
	
	
	
</body>
</html>
'


?>