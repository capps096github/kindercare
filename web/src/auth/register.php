<?php
// ---------------------- Create Account PHP -------------------- //
// Start the session
session_start();

//account is only created if you have clicked on the button
if (isset($_POST['create_btn'])) {

  // check if the terms' checkbox is checked
  if (isset($_POST['terms'])) {

    // sql
    //variables for the db that will be passed to connection
    //root works on most pcs
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    //die function is used to print the message and exits the php script
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // prevent SQL injection while getting the data from the form
    //real_escape_string prevents the user from writing the SQL commands in thr form, they will be captured as strings instead of commands
    $teacher_id = $conn->real_escape_string($_POST['teacher_id']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $password = $conn->real_escape_string($_POST['password']);


    // sql command
    //sql commands to insert captured data into the teacher's table in the db
    //ignore is used to prevent adding aother account in the db with the same tr id
    $sql_data = "INSERT IGNORE INTO
       kindercare.teachers (teacher_id, fname, lname, passwordx)
        VALUES ('$teacher_id', '$first_name', '$last_name', '$password');";

    //  use the kindercare db    
    $conn->select_db('kindercare');

    // insert data query
    //query () used to run a query to insert data in the db
    if ($conn->query($sql_data) === TRUE) {
      // echo "New record created successfully";

      // set sessions
      $_SESSION['teacher_id'] = $teacher_id;
      $_SESSION['first_name'] = $first_name;
      $_SESSION['last_name'] = $last_name;

      // redirect to the home screen
      //if everything is okay, it redirects to the home page
      header("Location: ../home.php");
    } else {
      $_SESSION['register_error'] = "Error: " . $sql_data . "<br>" . $conn->error;
    }

    //closes the connection to the db
    $conn->close();

    //exits this php script
    exit();
  } else {
    // echo "Please agree to the terms and conditions";

    // set the register_error session
    //so that it appears on the screen
    $_SESSION['register_error'] = "Please agree to the terms and conditions";

    // refresh the register page
    //navigates back to the same screen, incase of an error so that they can fix it
    header("Location: ../teacher/register.php");
  }
}
