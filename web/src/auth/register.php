<?php
// ---------------------- Create Account PHP -------------------- //
// Start the session
session_start();

if (isset($_POST['create_btn'])) {

  // check if the terms checkbox is checked
  if (isset($_POST['terms'])) {

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
    $teacher_id = $conn->real_escape_string($_POST['teacher_id']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $password = $conn->real_escape_string($_POST['password']);


    // sql command
    $sql_data = "INSERT INTO
       kindercare.teachers (teacher_id, fname, lname, passwordx)
        VALUES ('$teacher_id', '$first_name', '$last_name', '$password');";

    //  use the kindercare db
    $conn->select_db('kindercare');

    // insert data query
    if ($conn->query($sql_data) === TRUE) {
      // echo "New record created successfully";

      // set sessions
      $_SESSION['teacher_id'] = $teacher_id;
      $_SESSION['first_name'] = $first_name;
      $_SESSION['last_name'] = $last_name;

      // redirect to the home screen
      header("Location: ../home.php");
    } else {
      echo "Error: " . $sql_data . "<br>" . $conn->error;
    }


    $conn->close();
    exit();
  } else {
    echo "Please agree to the terms and conditions";

    // refresh the register page
    header("Location: ../teacher/register.php");
  }
}
