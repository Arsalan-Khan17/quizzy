<?php

session_start();

if(empty($_SESSION))
{
  header('location:logout.php');
}

?>



<!DOCTYPE html>
<html>
	<head>
		<title>Quizy</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link href='https://fonts.googleapis.com/css?family=Days One' rel='stylesheet'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link rel="shortcut icon" type="image/jpg" href="images/logoB.jpg">
		<script src="jquery.js"></script>

	</head>
	<body>

		<div class="navigation-bar">
			<div id="logo">
				<a href="#"><img src="images/logo.png"></a>
			</div>
			<div id="menu">
				<div class="home">
					<a href="index.php"><p>HOME</p></a>
				</div>
				<div class="aboutus">
					<a href="#about"><p>ABOUT US</p></a>
				</div>
				<div class="contact">
					<a href="#contact"><p>CONTACT</p></a>
				</div>

				<div class="logout">
					<a href="logout.php"><p>LOGOUT</p></a>
				</div>
			</div>
		</div>

		<div class="center-area">
			<div class="form-create-container">
				<div class="form-create">
					<div class="icon">
						<img src="images/create.png">
					</div>
					<div>
						<p class="create-title">CREATE QUIZ</p>
						<p class="create-tagline">Add title for your quiz, number of questions & set time for a single question.</p>
					</div>
					<div class="input-create-container">
						<div class="quiz-name">
							<input type="text" name="title" placeholder="Quiz title" id="qname">
						</div>

						<div class="no-of-question">
							<input type="number" name="num" placeholder="Number of questions" min="5" id="numQs">
						</div>

						<div class="set-time">

							<input type="number" name="time" placeholder="Set time for each question" maxlength="2" max="60" min="10" id="qtime">
						</div>
					</div>
					<div class="create-button">
						<p onclick="creat_quiz()">CREATE QUIZ</p>
					</div>
				</div>
			</div>
		</div>


		<footer>
			<p><i class="fa fa-copyright"></i> 2020 Quizy | All rights reserved by Team Titan.</p>
		</footer>
	</body>
	<script src="javascript.js"></script>


	<script>

		function creat_quiz(){

			var qName = $("#qname").val();
			var numQ = $("#numQs").val();
			var qtime = $("#qtime").val();

//			alert('hi');
			if (qName == '' || numQ == '' || qtime == '') {
				alert("Please fill the field....!!");
			}
			else{
				$.post("script.php", {
					quiz_title : qName,
					numQ: numQ,
					qtime: qtime,
				}, function(data) {
//					alert(data);
					window.location.href="addquestions.php?qid="+data;
				});
			}

		}




	</script>




</html>