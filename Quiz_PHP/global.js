window.addEventListener("load", function(){
  var start = document.getElementById("start");
  var questions = document.getElementsByClassName("questions");
  var q1 = document.getElementById("q1");
  var answers = document.getElementsByClassName("answers");
  var getResults = document.getElementById("getResults");
  var r1 = document.getElementById("r1");

  start.addEventListener("click",function(){
    start.style.display="none";
    q1.style.display="block";


    getResults.addEventListener("click", function(){
        q1.style.display = "none";

      
      var check = new XMLHttpRequest();

      check.addEventListener("load", function(e){
        var a1 = document.getElementById("a1");
        var correctAnswers = JSON.parse(e.target.response)
          r1.innerHTML = correctAnswers.q1

      });

      var string = document.getElementById("a1").value;
      check.open("get", "check_answer.php?string=" + string);
      check.send();

    });
  });

});

