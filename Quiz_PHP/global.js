window.addEventListener("load", function(){
  var start = document.getElementById("start");
  var nextQ = document.getElementsByClassName("nextQ");
  var getResults = document.getElementById("getResults");

  start.addEventListener("click",function(){
    var questions = [document.getElementById("q1"), document.getElementById("q2"), document.getElementById("q3")]
    start.style.display="none";
    q1.style.display="block";

  

    for(i=0; i<nextQ.length; i++){
      nextQ[i].addEventListener("click", function(){
        var x = this.getAttribute("id");
        questions[x-1].style.display = "none";
        questions[x].style.display = "inline";
      });
    }



    getResults.addEventListener("click", function(){
        q3.style.display = "none";
    
      var answers = document.getElementsByClassName("answer");
      var check = new XMLHttpRequest();

      check.addEventListener("load", function(e){
        var answers = document.getElementsByClassName("answers");
        var results = document.getElementsByClassName("results");
        var correctAnswers = JSON.parse(e.target.response)

        for(i=0; i < answers.length; i++){
          
          if(answers[i].value === correctAnswers[i]){
            results[i].innerHTML = i+1 + ". correct";
          } else {
            results[i].innerHTML = i+1 + ". incorrect";
          }
        }

      });

      check.open("get", "info");
      check.send();

    });
  });

});

