<?php
// ---------------------- Register Pupil PHP -------------------- //
// Start the session
session_start();

if (isset($_POST['register_btn'])) {



  // sql
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // prevent SQL injection while getting the data from the form
  $user_code = $conn->real_escape_string($_POST['user_code']);
  $first_name = $conn->real_escape_string($_POST['first_name']);
  $last_name = $conn->real_escape_string($_POST['last_name']);
  $phone_no = $conn->real_escape_string($_POST['phone_no']);


  // sql command
  $sql_data = "INSERT IGNORE INTO
       kindercare.registeredpupils (	user_code,	fname,	lname,	phone_no	)
        VALUES ('$user_code', '$first_name', '$last_name', '$phone_no');";

  //  use the kindercare db
  $conn->select_db('kindercare');

  // insert data query
  if ($conn->query($sql_data) === TRUE) {
    // echo "New record created successfully";

    // set session success
    $_SESSION['success'] = "Pupil Successfully registered";


    // redirect to the register screen
    header("Location: register_pupil.php");
  } else {
    echo "Error: " . $sql_data . "<br>" . $conn->error;
  }


  $conn->close();
  exit();
}
