//global variables
var treatmentTime;
var painB;
var painD;
var painA;

//current date
var today = new Date();
var dd = String(today.getDate()).padStart(2, "0");
var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
var yyyy = today.getFullYear();

today = mm + "/" + dd + "/" + yyyy;

//clicking submit button after filling out the survey

$("#submit-btn").on("click", function(event) {
  event.preventDefault();

  treatmentTime = $("#time-input").val();
  painB = $("input:radio[name=painScaleBefore]:checked").data("value");
  painD = $("input:radio[name=painScaleDuring]:checked").data("value");
  painA = $("input:radio[name=painScaleAfter]:checked").data("value");

  var results = {
    date: today,
    time: treatmentTime,
    painBefore: painB,
    painDuring: painD,
    painAfter: painA
  };
  console.log(results);
  database.ref().push(results);
});
