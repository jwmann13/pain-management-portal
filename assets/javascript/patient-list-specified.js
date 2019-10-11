// Initialize Firebase (YOUR OWN APP)
// var config = {
//     apiKey: "AIzaSyATH9AkcU8c8vKGeVuakMFlyPe_CSil0kk",
//     authDomain: "gt-project-group-11.firebaseapp.com",
//     databaseURL: "https://gt-project-group-11.firebaseio.com",
//     projectId: "gt-project-group-11",
//     storageBucket: "gt-project-group-11.appspot.com",
//     messagingSenderId: "916608204316",
//     appId: "1:916608204316:web:9b8d38bc3ad3eafa1729d9",
//     measurementId: "G-LQK0SJKC5D"
//   };
  
//   firebase.initializeApp(config);
  
//   // Variable to reference the database
//   var database = firebase.database();

  
  var patientName;
  var patientAge;
  var patientFitbit;
  var patientEmail;
  var lastRecordedSession;
  
  // Capture Button Click
  $("#add-btn").on("click", function(event) {
    event.preventDefault();
  
    // Grabbed values from text boxes
    patientName = $("#name-input")
      .val()
      .trim();
    patientAge = $("#age-input")
      .val()
      .trim();
    patientFitbit = $("#fitbit-input")
      .val()
      .trim();
    patientEmail = $("#email-input")
      .val()
      .trim();
    lastRecordedSession = $("#session-input")
      .val()
      .trim();
  
    // Code for handling the push
    var patientObject = {
      patient: patientName,
      age: patientAge,
      fitbit: patientFitbit,
      email: patientEmail,
      sessionDate: {
        date: lastRecordedSession
      }
    };
    PATIENTS.push(patientObject);
  });
  
  // Firebase watcher .on("child_added")
  PATIENTS.on(
    "child_added",
    function(snapshot) {
      // storing the snapshot.val() in a variable for convenience
      var sv = snapshot.val();
  
      addPatientRow(sv, snapshot.ref.key);
  
      // Handle the errors
    },
    function(errorObject) {
      console.log("Error: " + errorObject.code);
    }
  );
  
  PATIENTS.on(
    "child_removed",
    function(snapshot) {
      removePatientRow(snapshot.ref.key);
    },
    function(errorObject) {
      console.log("Error: " + errorObject.code);
    }
  );
  
  //dynamic table
  //tutorial source: https://youtu.be/ri5Nqe_IK50
  function addPatientRow(element, uniqueID) {
    const tableBody = document.getElementById("tableData");
    let dataHtml = `<tr id=${uniqueID}>
            <td>${element.patient}</td>
            <td>${element.sessions.date}</td>
            <td><a onclick="removePatientFromDatabase('${uniqueID}');">X</a></td>
          </tr>`;
    tableBody.innerHTML += dataHtml;
  }
  
  function removePatientFromDatabase(uniqueID) {
    database
      .ref()
      .child(uniqueID)
      .remove();
  }
  
  function removePatientRow(uniqueID) {
    var patientRow = document.getElementById(uniqueID);
    patientRow.remove();
  }
  