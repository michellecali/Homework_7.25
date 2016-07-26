window.addEventListener("load", function(){

  var clicker = document.getElementById("clicker");

  clicker.addEventListener("click", function(){
    var banana = new XMLHttpRequest();

    banana.addEventListener("loadstart", function(){
      alert("Okay, starting.");
    });

    banana.addEventListener("load", function(e){
      var response = JSON.parse(e.target.response);

      response.name
      response.age
      response.friends

     }); 

    banana.open("get", "info");
    banana.send();
  });

});