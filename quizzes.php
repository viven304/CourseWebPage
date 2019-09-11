<!DOCTYPE php>

<html>
<head>
<style type="text/css">
	<!--
	 .tab { margin-left: 40px; }
	-->
</style>
	<link href="https://fonts.googleapis.com/css?family=Geostar&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<div class = "header">
	<a class="home" href="./index.html"> <h1>INTRO TO C++ <h1> </a>
	<title>Quizzes</title>
</div>

<body>


<form id="frm1" method="post">
	<h1>Quiz 1</h1>
	<p>This quiz will consist of multiple multiple (iteration) choice questions. You have unlimited time and can take the quiz for practice after submission. </p>

	


  		<div class="grid">
    		<div class="box one">
    			<p>1. What does it mean to compile a program?</p>
				<label for="A" class="tab">A. Break it</label>
				<input type="radio" id="1" name="answer1" value="A">
				<br>
				<label for="B" class="tab">B. Check for errors in the code and create an executable</label>
				<input type="radio" id="2" name="answer1" value="B">
    		</div>

    		<div class="box two">
    			<img src="scopequestion.png" alt="Scope Question" class = "scopequestion">
    			<p> 2. Is num1 alive at return 0?</p>
				<label for="A" class="tab">A. Yes</label>
				<input type="radio" id="1" name="answer2" value="A">
				<br>
				<label for="B" class="tab">B. No</label>
				<input type="radio" id="2" name="answer2" value="B">

    		</div>
    		<div class="box three">Q3</div>
    		<div class="box four">Q4</div>
    		<div class="box five">Q5</div>
    		</form>
  		</div>
  		<br><br><br><br><br><br><br><br><br>


  		<input type = "button" value="Submit" class = "submit"> 
	
 	
<p id = "result"></p>

<!-- <script>
	var form = document.getElementbyId('frm1');
	form.onsubmit = function(e) {
		e.preventDefault();
		var result = document.getElementById('result');
		result.innerHTML = "Hello" +form.answer.value;
	}
</script> -->

<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("input[type='button']").click(function(){
            var radioValue = $("input[name='answer1']:checked").val();
            if(radioValue == "B"){
                alert("Your are correct!");
            }
            else {
            	alert("That's wrong!");
            }
        });
        
    });
</script>
 -->
<? php echo $_POST['answer1'];
?>
</body>


</html>