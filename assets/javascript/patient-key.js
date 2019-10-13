let patientKey;

$('#patient-auth-btn').on('click', function (event) {
  event.preventDefault();

  let email = $('#patient-auth-email').val().trim();

  patientKey = PATIENTS.orderByChild('email').equalTo(email).on('value', function (snapshot) {
    return Object.keys(snapshot.val())[0];
    // console.log(snapshot.val());
    // console.log(patientKey);
  });
});

function authenticatePatientByEmail(email) {

  PATIENTS.orderByChild('email').equalTo(email).on('value', function (snapshot) {
    return Object.keys(snapshot.val())[0];
  });
}