// get the url
var url = window.location.href;
//getting the access token from url
var access_token =
  "eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyMkI2MlQiLCJzdWIiOiI3VDIzMjkiLCJpc3MiOiJGaXRiaXQiLCJ0eXAiOiJhY2Nlc3NfdG9rZW4iLCJzY29wZXMiOiJ3aHIgd3BybyB3bnV0IHdzbGUgd3dlaSB3c29jIHdhY3Qgd3NldCB3bG9jIiwiZXhwIjoxNTcxNDE5MjE2LCJpYXQiOjE1NzA4OTA4MTZ9.mubIeZA6bdh6Q834LH84enZEQYvCOHYNDYCrkzWtqIw";

// var access_token = url.split("#")[1].split("=")[1].split("&")[0];
// get the userid
var userId = "7T2329";

// var userId = url.split("#")[1].split("=")[2].split("&")[0];
// console.log(access_token);
// console.log(userId);

var xhr = new XMLHttpRequest();
xhr.open(
  "GET",
  "https://api.fitbit.com/1/user/" +
    userId +
    "/activities/heart/date/today/1w.json"
);
xhr.setRequestHeader("Authorization", "Bearer " + access_token);
xhr.onload = function() {
  if (xhr.status === 200) {
    // JSON.stringify(xhr.responseText)
    // console.log(xhr.responseText)
    // created a new variable from the response object
    let response = xhr.responseText;

    let result = JSON.parse(xhr.response);
    // gradded the targeted div
    let target = $(".patient-home-pain");
    // created new p tag
    let p = $("<p>");
    // appended the response data to the p tag
    p.append(response);
    // appended the p to the html
    //target.append(p);

    // console.log(result);
    // console.log(result['activities-heart']);

    for (var i = 0; i < result["activities-heart"].length; i++) {
      var results = result["activities-heart"][i];

      var heartResults = {
        dateTime: results.dateTime
      };

      // console.log(results);
      // console.log(heartResults);
    }

    $(".patient-home-pain").prepend(`
       <div>${"Resting Heart Rate: " +
         results.value
           .restingHeartRate}<img src="./assets/images/Fitbit_Logo.png" alt="Fitbit Logo"></div>`);
  }
};
xhr.send();
