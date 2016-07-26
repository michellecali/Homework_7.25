<!doctype html>
<html>
<head>
 <title>A quiz!</title>
</head>
<body>
<?php include ("check_answer.php"); ?>


<form>
	<h1>What color is the sky?</h1>
	<input type="text" id="sky" name="sky_color">
	<button name="submit" id="button">submit</button>
</form> 

<div id="skyAnswers"></div>
window.addEventListener("load", function(){

	<div id="skyAnswersTrue" > That is correct - the sky is blue! </div>
	<div id="skyAnswersFalse" >I'm sorry, that's incorrect - the sky is actually blue! </div>



</body>
</html>