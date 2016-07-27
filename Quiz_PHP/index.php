<!doctype html>
<html>
<head>
 <title>A quiz!</title>
 <script type="text/javascript" src="global.js"></script>
</head>
<body>

<button name="start" id="start">Begin</button>

<div class="questions" id="q1" style="display: none">
	<h1>What color is the sky?</h1>
	<input id="a1" type="text" class="answers" name="a1">
	<button class="newQ" id="1" name="nextQ">Next Question</button>
</div> 

<div class="questions" id="q2" style="display: none">
	<h1>What color are the clouds?</h1>
	<input id="a2" type="text" class="answers" name="a2">
	<button class="newQ" id="2" name="nextQ">Next Question</button>
</div> 

<div class="questions" id="q3" style="display: none">
	<h1>What color is the mud?</h1>
	<input id="a3" type="text" class="answers" name="a3">
	<button name="getResults" id="getResults">Get results</button>
</div> 



<div class="results">
	<span id="r1"></span>
	<span id="r2"></span>
	<span id="r3"></span>
</div>



</body>
</html>