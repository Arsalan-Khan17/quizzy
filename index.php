<?php 

require_once "config.php";



if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){

	$sql = "INSERT INTO teachers (teacher_name , email , password) VALUES (:name , :email , :password)";

	$stmt = $pdo->prepare($sql);

	$stmt->execute(array(

		':name' =>$_POST['name'],
		':email' =>$_POST['email'],
		':password '=>$_POST['password'],

	));


}

// $stmt = $pdo->query("Select * FROM teachers");

// while($row = $stmt->fetch(PDO::FETCH_ASSOC) ){
// 	print_r($row);
// }
?>








<!DOCTYPE html>
<html>
	<head>
		<title>Quizy</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/style2.css">
		<link href='https://fonts.googleapis.com/css?family=Days One' rel='stylesheet'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Capriola' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet'>
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
					<a href="index.html"><p>HOME</p></a>
				</div>
				<div class="aboutus">
					<a href="#about"><p>ABOUT US</p></a>
				</div>
				<div class="contact">
					<a href="#contact"><p>CONTACT</p></a>
				</div>
			</div>
		</div>

		<div class="center">
			<img src="images/background.jpg">
			<div id="tag-line">
				<p>Better Education For A Better World</p>
			</div>

			<div class="box">
				<div class="buttons">
					<div id="student" onclick="student_form()">
						<a href="#"><p>Student</p></a>
					</div>
					<div id="teacher" onclick="teacher_form()">
						<a href="#"><p>Teacher</p></a>
					</div>
				</div>
			</div>
		</div>


		<!--bottom-container-->
		<div class="bottom-container">
			<div class="developer-box">
				<div id="developer-image">
					<img src="images/riaz.jpg" alt="picture-Arsalan">
				</div>

				<div id="developer-name">
					<p>Muhammad Riaz</p>
				</div>
				<div id="feild">
					<p>Front-end Developer</p>
				</div>
			</div>

			<div class="bottom-center" id="about">
				<div class="about-title">
					<p>ABOUT US</p>
				</div>

				<div class="about-desc">
					<p>The development of Quizy, including the content and technology,<br>
						is mainly the work of us with years of classroom experience<br>
						we are splitting our time between studying and Quizy.</p>
				</div>

				<div class="social-media" id="contact">
					<ul>
						<li> <a href="www.facebook.com"> <i class="fa fa-facebook-square"> </i> </a></li>
						<li> <a href="www.instagram.com"> <i class="fa fa-instagram"> </i> </a></li>
						<li> <a href="www.google.com"> <i class="fa fa-google-plus-square"> </i> </a></li>
						<li> <a href="www.whatsapp.com"> <i class="fa fa-phone-square"> </i> </a> </li>

					</ul>
				</div>
			</div>

			<div class="developer-box">
				<div id="developer-image">
					<img src="images/arsalan.jpg" alt="picture-Arsalan">
				</div>

				<div id="developer-name">
					<p>Muhammad Arsalan</p>
				</div>
				<div id="feild">
					<p>Back-end Developer</p>
				</div>
			</div>
		</div>

		<!--Footer-->
		<footer>
			<p><i class="fa fa-copyright"></i> 2020 Quizy | All rights reserved by Team Titan.</p>
		</footer>

		<!--login Popups-->
		<div class="bg-form1">
			<div class="form-student">
				<div class="icon">
					<img src="images/student.png">
				</div>
				<div class="close"  onclick="close_form1()">
					+
				</div>
				<div class="title">
					<p>STUDENT</p>
				</div>

				<div class="input-name">
					<input type="text" name="name" placeholder="Name" id="student_name">
				</div>

				<div class="input-code">
					<input type="text" name="code" placeholder="Enter exam key" id="quiz_code">
				</div>
				<div class="button">
					<p onclick="quiz_join()">JOIN QUIZ</p>
				</div>
			</div>
		</div>

		<div class="bg-form2">
			<div class="form-teacher">
				<div class="icon">
					<img src="images/teacher.png">
				</div>
				<div class="close"  onclick="close_form2()">
					+
				</div>
				<div class="title">
					<p>TEACHER</p>
				</div>
				<div class="inputs-container">
					<div class="input">
						<input type="text" name="teacher_login_email" placeholder="Email" id="teacher_login_email">
					</div>

					<div class="input">
						<input type="Password" name="teacher_login_pass" placeholder="Password" id="teacher_login_pass">
					</div>

					<div class="forgot-password">
						<a href="#"><p>Forgot your password?</p></a>
					</div>
				</div>
				<div class="buttons-container">
					<div class="button-t">
						<p onclick="teacher_login()">LOGIN</p>
					</div>

					<div class="" id="reg" onclick="teacher_registration()">
						<input type="submit" name="submit" value="REGISTER">
					</div>
				</div>
			</div>
		</div>
		<div class="bg-form3">
			<div class="form-registeration-teacher">
				<div class="icon">
					<img src="images/teacher.png">
				</div>
				<div class="close"  onclick="close_form3()">+</div>
				<div class="title">
					<p>TEACHER REGISTERATION</p>
				</div>
				<div class="inputs-container">
					<div class="input">
						<input type="text" name="f-name" placeholder="Name" id="name">
					</div>

					<div class="input">
						<input type="text" name="email" placeholder="Email" id="email">
					</div>

					<div class="input">
						<input type="password" name="password" placeholder="Password" id="pass">
					</div>
					<div class="input">
						<input type="password" name="c-password" placeholder="Confirm Password" id="cPass">
					</div>

					<div class="agree">
						<input type="checkbox" id="myCheck"><p> Accept our user terms and our privacy policy.</p>
					</div>
				</div>

				<div class="button-r">
                    <p onclick="foo()">REGISTER</p>
				</div>
			</div>
		</div>
	</body>


	<script>


		function foo(){
			//			alert(name);
			var name = $("#name").val();
			var email = $("#email").val();
			var pass = $("#pass").val();
			var cPass = $("#cPass").val();
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var check = emailReg.test(email);
			if (name == '' || email == '') {
				alert("Please fill the field....!!");
			} 
			else if(!check){
                
                
                    alert("Invalid Email Format");
            }

            else if(pass.length < 6){
                alert("Password Must Be Atleast 6 Characters.");
            }


			else {
				//Returns successful data submission message when the entered information is stored in database.
				$.post("script.php", {
					tname: name,
					temail: email,
					tpass: pass,
					tcpass: cPass,
				}, function(data) {
					alert(data);
					//					$('#form')[0].reset(); // To reset form fields
					//					$.ajax({
					//						url: "add_brand.php",
					//						type: "post",
					//						success: function (html) 
					//						{
					//							$("#my-display").html();
					//							$("#my-display").html(html);
					//						}
					//					});
				});
			}
		}


		function teacher_login(){

			//			alert('hi');
			var email = $("#teacher_login_email").val();
			var pass = $("#teacher_login_pass").val();
			//			alert(email);
			if (email == '' || pass == '') {
				alert("Please fill the field....!!");
			}else {
				$.post("script.php", {
					t_l_email: email,
					t_l_pass: pass,
				}, function(data) {
					//					alert(data);
				//	window.location.href = "create-quiz.php";
                    
                    
                     if(data == 0){
                        
                         alert("Unknown User");
                    }
                    else
					  window.location.href = "create-quiz.php";
                    

				});
			}

		}


		function quiz_join(){

			var stName = $("#student_name").val();
			var qCode = $("#quiz_code").val();

			if (stName == '' || qCode == '') {
				alert("Please fill the field....!!");
			}else {

				//					alert(stName+" "+qCode);
				$.post("script.php", {
					st_name: stName,
					quiz_code: qCode,
				}, function(data) {
					//					alert(data);

					if($.isNumeric(data)){
//						alert('numeric');
						window.location.href = "attempt-quiz.php?code="+data+"&stName="+stName;
						
						
					}else
						alert("Invalid Qiuz Code");


				});

			}


		}


	</script>
	<script src="javascript.js"></script>
</html>