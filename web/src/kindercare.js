function goToHome() {
  setTimeout(function () {
    location.href = "home.php";
  }, 1000);
}

// * Go to Splash
function goToSplash(screen) {
  switch (screen) {
    case 'login':
      break;

    default:
      break;
  }

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
