
function student_form(){
	document.querySelector('.bg-form1').style.display = 'flex';
}



function close_form1(){
	document.querySelector('.bg-form1').style.display = 'none';
}


function teacher_form(){
	document.querySelector('.bg-form2').style.display = 'flex';
}



function close_form2(){
	document.querySelector('.bg-form2').style.display = 'none';
}


function teacher_registration(){
	document.querySelector('.bg-form2').style.display = 'none';
	document.querySelector('.bg-form3').style.display = 'flex';
}

function close_form3(){
	document.querySelector('.bg-form3').style.display = 'none';
}


function create_quiz(){
	window.open("create-quiz.html", "_self");
}

function add_questions(){
	window.open("add-questions.html", "_self");
}

function join_quiz(){
	window.open("attempt-quiz.html", "_self");
}

function show_message(){
	document.querySelector('.bg-form4').style.display = 'flex';
}

function close_mesg(){
	window.open("index.html", "_self");
}