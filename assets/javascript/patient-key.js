// var config = {
//     apiKey: "AIzaSyATH9AkcU8c8vKGeVuakMFlyPe_CSil0kk",
//     authDomain: "gt-project-group-11.firebaseapp.com",
//     databaseURL: "https://gt-project-group-11.firebaseio.com",
//     projectId: "gt-project-group-11",
//     storageBucket: "gt-project-group-11.appspot.com",
//     messagingSenderId: "916608204316",
//     appId: "1:916608204316:web:9b8d38bc3ad3eafa1729d9",
//     measurementId: "G-LQK0SJKC5D"
// };

var config = {
    apiKey: "AIzaSyAARBRklYvGPYYT7lRMiFDolSgRivtuq3s",
    authDomain: "gt-project-1-group-11-b08d3.firebaseapp.com",
    databaseURL: "https://gt-project-1-group-11-b08d3.firebaseio.com",
    projectId: "gt-project-1-group-11-b08d3",
    storageBucket: "gt-project-1-group-11-b08d3.appspot.com",
    messagingSenderId: "986153651299",
    appId: "1:986153651299:web:560e09006a98a2ceecbc56",
    measurementId: "G-LC5DNRC73Q"
  };

firebase.initializeApp(config);

var database = firebase.database();

$('#patient-home-btn').on('click', function(event) {
    event.preventDefault();

    database.ref().push()
    console.log($('#patient-home-email').val().trim());
});