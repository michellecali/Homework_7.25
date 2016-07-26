<!doctype html>
<html>
<head>
 <title>A quiz!</title>
 <script type="text/javascript" src="global.js"></script>
</head>
<body>

<button name="start" id="start">Begin</button>

<div id="q1" style="display: none">
	<h1>What color is the sky?</h1>
	<input type="text" class="answer" name="sky_color">
	<button id="1" name="next1" class="nextQ">Next Question</button>
</div> 

<div id="q2" style="display: none">
	<h1>What color are the clouds?</h1>
	<input type="text" class="answer" name="cloud_color">
	<button id="2" name="submit2" class="nextQ">Next Question</button>
</div> 

<div id="q3" style="display: none">
	<h1>What color is the ocean?</h1>
	<input type="text" class="answer" name="ocean_color">
	<button name="getResults" id="getResults">Get results</button>
</div> 

<div class="results" id="q1Answers"></div>

<div class="results" id="q2Answers"></div>

<div class="results" id="q3Answers"></div>



</body>
</html>