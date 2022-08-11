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


// products table
$sql_products = "DROP TABLE IF EXISTS sips.products;";

// staff table
$sql_staff = "DROP TABLE IF EXISTS sips.staff;";

// assignments table
$sql_managers = "DROP TABLE IF EXISTS sips.managers;";

// customers score
$sql_customers = "DROP TABLE IF EXISTS sips.customers;";

// likes score
$sql_likes = "DROP TABLE IF EXISTS sips.likes;";

// orders score
$sql_orders = "DROP TABLE IF EXISTS sips.orders;";

// register pupils
// $sql_registerpupils = "DROP TABLE IF EXISTS sips.registeredpupils;";


// check if the sips db was selected
if ($conn->select_db('sips') === TRUE) {


  // teachers table
  if ($conn->query($sql_products) === TRUE) {
    // echo "Table teachers created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  // pupils table
  if ($conn->query($sql_staff) === TRUE) {
    // echo "Table pupils created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  // assignments table
  if ($conn->query($sql_managers) === TRUE) {
    // echo "Table assignments created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_customers) === TRUE) {
    // echo "Table assignmentscore created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


  // check if all queries were successful
  if (
    $conn->query($sql_products) === TRUE &&
    $conn->query($sql_staff) === TRUE &&
    $conn->query($sql_managers) === TRUE &&
    $conn->query($sql_likes) === TRUE &&
    $conn->query($sql_orders) === TRUE &&
    $conn->query($sql_customers) === TRUE
  ) {
    $_SESSION['settings_success'] = "Database Cleared Successfully!";

    // re-create the deleted tables
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