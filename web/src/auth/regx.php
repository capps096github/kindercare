<?php
// Start the session
session_start();

if (isset($_POST['create_btn'])) {

  // check if the terms checkbox is checked
  if (isset($_POST['terms'])) {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // prevent SQL injection
    $teacher_id = $conn->real_escape_string($_POST['teacher_id']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $password = $conn->real_escape_string($_POST['password']);




    // sql command
    $sql_data = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

    //  use the nois db
    $conn->select_db('nois');

    // insert data query
    if ($conn->query($sql_data) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql_data . "<br>" . $conn->error;
    }



    $conn->close();
  } else {
    echo "Please agree to the terms and conditions";

    // refresh the register page
    header("Location: ../teacher/register.php");
  }
}
