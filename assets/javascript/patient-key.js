// let patientKey;

$('#patient-auth-btn').on('click', function (event) {
  event.preventDefault();

  let email = $('#patient-auth-email').val().trim();

  PATIENTS.orderByChild('email').equalTo(email).on('value', function (snapshot) {
    let patientKey = Object.keys(snapshot.val())[0];
    // console.log(snapshot.val());
    console.log(patientKey);
    let pastSessions = PATIENTS.child(patientKey + '/sessions')
    console.log(pastSessions);
    // PATIENTS.child(patientKey).update({
    //   sessions: pastSessions.push()
    // });
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