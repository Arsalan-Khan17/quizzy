<?php
include 'config.php';
$qid = $_GET['qid'];



if($qid == ''){
    
    
    header('location:logout.php');
    
}












$qry = "SELECT `quiz_id`, `quiz_name`, `quiz_code`, `num_of_quest`, `quiz_time`, `teacher_id` FROM `quizz_info` WHERE quiz_id = '$qid'";
$query = mysqli_query($conn , $qry);
$quiz = mysqli_fetch_array($query);
$num_quest = $quiz['num_of_quest'];
$quiz_name = $quiz['quiz_name'];
$quiz_code = $quiz['quiz_code'];
$quiz_time = $quiz['quiz_time'];
//echo $num_quest;


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


		<div class="add-questions-center-area">
			<div class="add-questions-container">

				<div class="icon">
					<img src="images/addQuestions.png">
				</div>
				<div>
					<p class="create-title">ADD QUESTIONS</p>
					
					<p class="create-tagline">Add question, four choices and the correct answer.</p>
					<h4 id="q-no">Question number: <span id="nmbr"></span></h4>
				</div>
				<div class="add-question">

					<div class="question">
						<input type="text" name="title" placeholder="Question" id="question">
					</div>
					<div class="option">
						<input type="text" id="option1"  placeholder="option 1">
					</div>
					<div class="option">
						<input type="text" id="option2" placeholder="option 2">
					</div>
					<div class="option">
						<input type="text" id="option3" placeholder="option 3">
					</div>
					<div class="option">
						<input type="text" id="option4" placeholder="option 4">
					</div>
					<label for="option">Choose the correct option:</label>

					<select name="option" id="correct_option">
						<option value="">select option</option>
						<option value="option1">Option 1</option>
						<option value="option2">Option 2</option>
						<option value="option3">Option 3</option>
						<option value="option4">Option 4</option>
					</select>
				</div>

				<div class="add-question-button">
					<p id="add_btn" onclick="addQuestion()">ADD</p>
				</div>

			</div>
		</div>


		<footer>
			<p><i class="fa fa-copyright"></i> 2020 Quizy | All rights reserved by Team Titan.</p>
		</footer>


		<div class="bg-form6">
			<div class="message-create">
				<div class="message-container">
					<p class="created-message"> Quiz Created </p>
					<p class="mesg-des">Title : <span id="title"> <?php echo $quiz_name  ?></span></p>
					<p class="mesg-des">No of Questions : <span id="num_no"><?php echo $num_quest  ?> </span></p>
					<p class="mesg-des">Total Time : <span id="ttime"><?php echo $quiz_time  ?></span></p>
					<p class="mesg-des">Quiz Code : <span id="ecode"><?php echo $quiz_code  ?></span></p>
					
					<div class="create-button-close">
						<p><a href="index.php">CLOSE </a></p>
					</div>
				</div>
			</div>
		</div>


	</body>
	<script src="javascript.js"></script>



	<script>

		let count = <?php echo $num_quest ?>;
		let id = <?php echo $qid ?>;
		let num = 1;
		$("#nmbr").html(num);
		//		alert(count);
		function addQuestion(){

			var question = $("#question").val();
			var option1 = $("#option1").val();
			var option2 = $("#option2").val();
			var option3 = $("#option3").val();
			var option4 = $("#option4").val();
			var correct = $("#"+$("#correct_option").val()).val();


			if (question == "" ) {
				alert("Please fill the field....!!");
			}
			else{
				$.post("script.php", {
					question : question,
					optionA: option1,
					optionB: option2,
					optionC: option3,
					optionD: option4,
					correct: correct,
					qid:id,
				}, function(data) {
//					alert(data);
					if(data == 1){
						    //$(window).scrollTop(50);
                        $("#question").focus();
                        
						if(num == (count-1)){
							$("#add_btn").html('FINISH');
						}
						
						num++;
                        $("#question").val('');
                        $("#option1").val('');
                        $("#option2").val('');
                        $("#option3").val('');
                        $("#option4").val('');
                        
                        
                        
						$("#nmbr").html(num);
                        
                        
						if(num > count){
							
                          //  $(".bg-form6").show();
                            
//                            $('#title').html();
//                            $('#ques_no').html();
//                            $('#ttime').html();
//                            $('#ecode').html();
                            
//							
                            document.querySelector('.bg-form6').style.display = 'flex';
                         
							//window.location.href = "index.php";
						}
					}
					//					window.location.href = ".php";
				});
			}

		}
	</script>
</html>