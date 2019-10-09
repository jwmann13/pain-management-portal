var config = {
    apiKey: "AIzaSyATH9AkcU8c8vKGeVuakMFlyPe_CSil0kk",
    authDomain: "gt-project-group-11.firebaseapp.com",
    databaseURL: "https://gt-project-group-11.firebaseio.com",
    projectId: "gt-project-group-11",
    storageBucket: "gt-project-group-11.appspot.com",
    messagingSenderId: "916608204316",
    appId: "1:916608204316:web:9b8d38bc3ad3eafa1729d9",
    measurementId: "G-LQK0SJKC5D"
};

firebase.initializeApp(config);

var database = firebase.database();

$('#add-btn').on('click', function(event) {
    event.preventDefault();
    console.log($('#patient-home-name').val().trim());
});