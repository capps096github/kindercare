<?php

$servername = "localhost";
$username = "root";
$password = "";

// Start the session
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// teachers table
$sql_teachers = "DROP TABLE IF EXISTS kindercare.teachers;";

// pupils table
$sql_pupils = "DROP TABLE IF EXISTS kindercare.pupils;";

// assignments table
$sql_assignments = "DROP TABLE IF EXISTS kindercare.assignments;";

// assignment score
$sql_assignmentscore = "DROP TABLE IF EXISTS kindercare.assignmentscore;";

// register pupils
$sql_registerpupils = "DROP TABLE IF EXISTS kindercare.registeredpupils;";


// check if the kindercare db was selected
if ($conn->select_db('kindercare') === TRUE) {


  // teachers table
  if ($conn->query($sql_teachers) === TRUE) {
    // echo "Table teachers created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  // pupils table
  if ($conn->query($sql_pupils) === TRUE) {
    // echo "Table pupils created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  // assignments table
  if ($conn->query($sql_assignments) === TRUE) {
    // echo "Table assignments created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_assignmentscore) === TRUE) {
    // echo "Table assignmentscore created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  // register pupils
  if ($conn->query($sql_registerpupils) === TRUE) {
    // echo "Table registeredpupils created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  // check if all queries were successful
  if (
    $conn->query($sql_teachers) === TRUE &&
    $conn->query($sql_pupils) === TRUE &&
    $conn->query($sql_assignments) === TRUE &&
    $conn->query($sql_assignmentscore) === TRUE &&
    $conn->query($sql_registerpupils) === TRUE
  ) {
    $_SESSION['settings_success'] = "Database Cleared Successfully!";

    // re create the deleted tables
    require "init_db.php";
  } else {

    // set error message
    $_SESSION['settings_error'] = "Error Deleting database: " . $conn->error;

    // end
    $conn->close();
  }

  // for web
  $filename = '../../../cmd/performance.txt';

  //  delete the file
  if (file_exists($filename)) {
    unlink($filename);
  }

  // clear the contents of the file
  // file_put_contents($filename, '');

  // redirect to settings page
  header("Location: ../settings/settings.php");
} else {
  echo "Error selecting database: " . $conn->error;
}
