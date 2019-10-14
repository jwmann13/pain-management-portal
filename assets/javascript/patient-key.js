$('#patient-auth-btn').on('click', function (event) {
  event.preventDefault();

  let email = $('#patient-auth-email').val().trim();

  PATIENTS.orderByChild('email').equalTo(email).once('value', function (snapshot) {
    let patientKey = Object.keys(snapshot.val())[0];

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, "0");
    var mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0!
    var yyyy = today.getFullYear();
    today = mm + "/" + dd + "/" + yyyy;

    let sessionInfo = {
      patient: patientKey,
      date: today,
      surveyTaken: false
    };

    SESSIONS.push(sessionInfo).once('value', function (sessSnap) {
      console.log(sessSnap.key)
      PATIENTS.child(patientKey).update({
        sessionKeys: {
          0: sessSnap.key
        }
      })
    });
  });
});

function authenticatePatientByEmail(email) {

  PATIENTS.orderByChild('email').equalTo(email).on('value', function (snapshot) {
    return Object.keys(snapshot.val())[0];
  });
}

function writeUserSurveysToHome(element, patientKey) {
  let table = $('.past-surveys');
  table.append($(
    `<tr><td></td><td></td></tr>`
  ));
}