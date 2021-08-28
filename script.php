<?php

include 'config.php';
if(isset($_POST['tname'])){



    $name = $_POST['tname'];
    $email = $_POST['temail'];
    $pass = $_POST['tpass'];
    $cpass = $_POST['tcpass'];

    //    echo $name.$email.$pass.$cpass;


    if(strcmp($pass,$cpass) == 0){

        $query = mysqli_query($conn , "INSERT INTO `teachers`( `teacher_name`, `email`, `password`) VALUES ('$name','$email','$pass')"); //Insert query
        if($query){
            echo "Data Submitted succesfully";
        }
        else
            echo 'Error: ' .mysqli_error($conn);
    }
    else
        echo 'Password Does not match!!!';


}


if(isset($_POST['t_l_email'])){



    $email = $_POST['t_l_email'];
    $pass = $_POST['t_l_pass'];

    $qry = "SELECT `teacher_id`, `teacher_name`, `email`, `password` FROM `teachers` WHERE email='$email'";
    $query = mysqli_query($conn , $qry);

    if(mysqli_num_rows($query) > 0){

        $teacher = mysqli_fetch_array($query);
        if(strcmp($pass , $teacher['password']) == 0){
            //            header('location:signup.php');
            session_start();
            $_SESSION['teacher'] = $teacher['teacher_name'];
            $_SESSION['teacher_ID'] = $teacher['teacher_id'];
            echo 1;


        }
    }
    else
        echo 0;



}


if(isset($_POST['quiz_title'])){


    $title = $_POST['quiz_title'];
    $num_quest = $_POST['numQ'];
    $quiz_time = $_POST['qtime'];

    //    echo $title . $num_quest . $quiz_time;

    session_start();
    $teacher = $_SESSION['teacher_ID'];
    $code = rand(100000,9999999);
    
   


    $query = mysqli_query($conn , "INSERT INTO `quizz_info`( `quiz_name`, `quiz_code`,`num_of_quest`, `quiz_time`, `teacher_id`) VALUES ('$title','$code','$num_quest','$quiz_time','$teacher')"); //Insert query
    if($query){
        //            echo "Quiz created succesfully";
        $last_id = $conn->insert_id;
        echo $last_id;
    }
    else
        echo 'Error: ' .mysqli_error($conn);


}



if(isset($_POST['question'])){

    $question = $_POST['question'];
    $optionA = $_POST['optionA'];
    $optionB = $_POST['optionB'];
    $optionC = $_POST['optionC'];
    $optionD = $_POST['optionD'];
    $correct = $_POST['correct'];
    $qid = $_POST['qid'];

    //    echo $question." ".$optionA." ".$optionB." ".$optionC." ".$optionD." ".$correct." ".$qid;
    $query = mysqli_query($conn , "INSERT INTO `questions`(`quiz_id`,`question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct`) VALUES ('$qid' , '$question', '$optionA', '$optionB', '$optionC', '$optionD', '$correct')"); //Insert query
    if($query){
        //            echo "Quiz created succesfully";
        //        $last_id = $conn->insert_id;
        //        echo 'Insertion Successfull';
        echo 1;
    }
    else
        echo 'Error: ' .mysqli_error($conn);

}




if(isset($_POST['st_name'])){

    $st_name = $_POST['st_name'];
    $quiz_code = $_POST['quiz_code'];

    //    echo $quiz_code . $st_name;
    $qry = "SELECT `quiz_id`, `quiz_name`, `num_of_quest`, `quiz_time`, `teacher_id` FROM `quizz_info` WHERE quiz_code='$quiz_code'";
    $query = mysqli_query($conn , $qry);
    if(mysqli_num_rows($query) > 0){

        $quiz = mysqli_fetch_array($query);
        echo $quiz['quiz_id'];

        

    }
    else
        echo "Invalid Quiz Code";

}



?>