<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql_db = "CREATE DATABASE IF NOT EXISTS kindercare";

// teachers table
$sql_teachers = "CREATE TABLE IF NOT EXISTS kindercare.teachers (
  `teacher_id` VARCHAR(30) PRIMARY KEY,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `passwordx` VARCHAR(30) NOT NULL
);";

// pupils table
$sql_pupils = "CREATE TABLE IF NOT EXISTS kindercare.pupils (
  `user_code` VARCHAR(30) PRIMARY KEY,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `phone_no` INT(30) NOT NULL,
  `gender` VARCHAR(6) NOT NULL,
  `teacher_id` VARCHAR(30) NOT NULL,
  `passwordx` VARCHAR(30) NOT NULL
);";


// assignments table
$sql_assignments = "CREATE TABLE IF NOT EXISTS kindercare.assignments (
  `assignment_id` INT(30) AUTO_INCREMENT PRIMARY KEY,
  `characters` VARCHAR(30) NOT NULL,
  `character_no` INT NOT NULL,
  `start_datex` DATE NOT NULL,
  `start_time` TIME NOT NULL,
  `end_time` TIME NOT NULL,
  `teacher_id` VARCHAR(30) NOT NULL
);";


// assignment score
$sql_assignmentscore = "CREATE TABLE IF NOT EXISTS kindercare.assignmentscore (
  `assignment_id` VARCHAR(100) PRIMARY KEY,
  `score` INT(3) NOT NULL,
  `comment` VARCHAR(100) NOT NULL,
  `user_code` VARCHAR(30) NOT NULL
);";

// register pupils
$sql_registerpupils = "CREATE TABLE IF NOT EXISTS kindercare.registeredpupils (
  `user_code` VARCHAR(30) PRIMARY KEY,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `phone_no` INT(30) NOT NULL,
  `status` VARCHAR(30) NOT NULL DEFAULT 'Activated'
);";

// register pupils
$sql_requests = "CREATE TABLE IF NOT EXISTS kindercare.requests (
  `user_code` VARCHAR(30) PRIMARY KEY,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `phone_no` INT(30) NOT NULL
);";


// Create database
if ($conn->query($sql_db) === TRUE) {
  // echo "Database created successfully";

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

  // assignment score
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

  // requests
  if ($conn->query($sql_requests) === TRUE) {
    // echo "Table requests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  // END
} else {
  echo "Error creating database: " . $conn->error;
}

// end
$conn->close();
