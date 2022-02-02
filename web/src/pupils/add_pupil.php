<?php

// create file and folder
// require_once 'create_file.php';


// Start the session
session_start();


$filename = '../../db/registered_pupils.txt';
// $pupil_string = "Add this to the file\n";

if (isset($_POST['register_btn'])) {


  $user_code = $_POST['user_code'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone_no = $_POST['phone_no'];

  // create a string from all the above variables
  $pupil_string = "(" . $user_code . "," . $first_name . "," . $last_name . "," . $phone_no . ")\n";


  // Let's make sure the file exists and is writable first.
  if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $pupil_string will go when we write() it.
    if (!$fp = fopen($filename, 'a')) {
      echo "Cannot open file ($filename)";
      exit;
    }

    // Write $pupil_string to our opened file.
    if (fwrite($fp, $pupil_string) === FALSE) {
      // echo "Cannot write to file ($filename)";

      $_SESSION['success'] = "Pupil Registration Failed";

      header("Location: register_pupil.php");
      exit;
    }

    // echo "Success, wrote ($pupil_string) to file ($filename)";
    $_SESSION['success'] = "Pupil Successfully registered";

    // redirect to the register screen
    header("Location: register_pupil.php");

    fclose($fp);
  } else {
    $_SESSION['success'] = "The file $filename is not writable";
  }
}
