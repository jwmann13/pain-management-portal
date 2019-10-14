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

const PATIENTS = database.ref("patients");
const SESSIONS = database.ref("sessions");
