<?php
// Start the session
session_start();

if (isset($_POST['signup_btn'])) {

  // check if the terms checkbox is checked
  if (isset($_POST['terms'])) {
  } else {
    echo "Please agree to the terms and conditions";

    
    header("Location: ../teacher/register.php");
  }
}
