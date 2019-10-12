let patientKey;

$('#patient-home-btn').on('click', function(event) {
    event.preventDefault();

    let email = $('#patient-home-email').val().trim();

    PATIENTS.orderByChild('email').equalTo(email).on('value', function(snapshot) {
      // console.log(snapshot.val());
      patientKey = Object.keys(snapshot.val())[0];

      // console.log(key);
    })
    // console.log($('#patient-home-email').val().trim());
});

PATIENTS.on('child_added', function(snapshot) {
  let email = snapshot.child('email').val();
  console.log(email);
});