document.addEventListener("DOMContentLoaded", event => {
  const app = firebase.app();
  console.log(app);
});

function login() {
  const loginProvider = new firebase.auth.GoogleAuthProvider();
  firebase
    .auth()
    .signInWithPopup(loginProvider)

    .then(result => {
      const user = result.user;
      document.write("Hello ${user.displayName}");
    })
    .catch(console.log);
}
