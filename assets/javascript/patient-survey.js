//global variables
var patientList;
var treatmentTime;
var painB = 0;
var painD = 0;
var painA = 0;

//current date
var today = new Date();
var dd = String(today.getDate()).padStart(2, "0");
var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
var yyyy = today.getFullYear();

today = mm + "/" + dd + "/" + yyyy;

$("#patient-home-button").on("click", function(event) {
  event.preventDefault();
});

//Get current patients
PATIENTS.on(
  "value",
  function(snapshot) {
    patientList = snapshot.val();
  }
  //console.log("Patients: " + patientList)
);

//clicking submit button after filling out the survey
$("#submit-btn").on("click", function(event) {
  event.preventDefault();

  treatmentTime = $("#time-input").val();
  painB = $("input:radio[name=painScaleBefore]:checked").data("value");
  painD = $("input:radio[name=painScaleDuring]:checked").data("value");
  painA = $("input:radio[name=painScaleAfter]:checked").data("value");

  var results = {
    time: treatmentTime,
    painBefore: painB,
    painDuring: painD,
    painAfter: painA
  };
  //console.log(results);
  //SESSIONS.update(results);
  SESSIONS.push(results);
  SESSIONS.on("child_added", snapshot => {
    PATIENTS.child(patientKey + "/sessions").update({
      sessions: snapshot.key
    });
  });
});

//write results to treatment session result areas
SESSIONS.on(
  "child_added",
  function(snapshot) {
    var snapVal = snapshot.val();

    addSessionInfo(snapVal, snapshot.ref.key);

    // Handle the errors
  },
  function(errorObject) {
    console.log("Error: " + errorObject.code);
  }
);

function addSessionInfo(element) {
  const displayResultsArea = document.querySelector(".patient-home-pain");
  let dataHtml = `<p>${"Treatment Time: " + element.time}</p></br>
                  <p>${"Pain Before: " + element.painBefore}</p></br>
                  <p>${"Pain During: " + element.painDuring}</p></br>
                  <p>${"Pain After: " + element.painAfter}</p></br>`;
  displayResultsArea.innerHTML += dataHtml;
}
