function goToHome() {
  setTimeout(function () {
    location.href = "home.php";
  }, 1000);
}

// * Go to Splash
function goToSplash(screen) {

  location.href = "index.php";
}

// * Go to Pupils Dashboard
function goToPupilsDashboard() {
  location.href = "./pupils/dashboard.php";
}

// * Go to Assignments Dashboard
function goToAssignmentsDashboard() {
  location.href = "./assignment/assignments.php";
}

// THis toggles to show the password
function togglePassword() {
  const passwordField = document.getElementById("password");
  if (passwordField.type === "password") {
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}
