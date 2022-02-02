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
  `phone_no` VARCHAR(30) NOT NULL,
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


// insert some assingments into the assignments table
$sql_assignments_insert = "INSERT INTO kindercare.assignments (characters, character_no, start_datex, start_time, end_time, teacher_id) VALUES
('a', 1, '2018-01-01', '09:00:00', '10:00:00', 'teacher1'),
('b', 2, '2018-01-01', '10:00:00', '11:00:00', 'teacher1'),
('c', 3, '2018-01-01', '11:00:00', '12:00:00', 'teacher1'),
('d', 4, '2018-01-01', '12:00:00', '13:00:00', 'teacher1'),
('e', 5, '2018-01-01', '13:00:00', '14:00:00', 'teacher1'),
('f', 6, '2018-01-01', '14:00:00', '15:00:00', 'teacher1'),
('g', 7, '2018-01-01', '15:00:00', '16:00:00', 'teacher1'),
('h', 8, '2018-01-01', '16:00:00', '17:00:00', 'teacher1'),
('i', 9, '2018-01-01', '17:00:00', '18:00:00', 'teacher1'),
('j', 10, '2018-01-01', '18:00:00', '19:00:00', 'teacher1'),
('k', 11, '2018-01-01', '19:00:00', '20:00:00', 'teacher1'),
('l', 12, '2018-01-01', '20:00:00', '21:00:00', 'teacher1'),
('m', 13, '2018-01-01', '21:00:00', '22:00:00', 'teacher1'),
('n', 14, '2018-01-01', '22:00:00', '23:00:00', 'teacher1')
;";


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
  `phone_no` VARCHAR(30) NOT NULL,
  `status` VARCHAR(30) NOT NULL DEFAULT 'Activated'
);";

// register pupils
$sql_requests = "CREATE TABLE IF NOT EXISTS kindercare.requests (
  `user_code` VARCHAR(30) PRIMARY KEY,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `phone_no` VARCHAR(30) NOT NULL
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


//Creating text files needed by the app

// create a folder db if it does not exist
if (!file_exists("../../db")) {
    mkdir("../../db");
    // echo "Folder db created successfully <br>";
} else {
    echo "Folder db already exists";
}

// create a file registered_pupils.txt in the same directory
if ( !file_exists("../../db/registered_pupils.txt")) {
    $pupils_file = fopen("../../db/registered_pupils.txt", "w");

    fclose($pupils_file);
    // echo ".";
} else {
    // echo "File registered_pupils.txt already exists <br>";
}

// create a file assignments.txt in the same directory
if (!file_exists("../../db/assignments.txt") ) {
    $assign_file = fopen("../../db/assignments.txt", "w");

    fclose($assign_file);
    // echo "..";
} else {
    // echo "File assignments.txt already exists <br>";
}


// create a file assignmentscore.txt in the same directory
if (!file_exists("../../db/assignmentscore.txt") ) {
    $assignscore_file = fopen("../../db/assignmentscore.txt", "w");

    fclose($assignscore_file);
    // echo "...";
} else {
    // echo "File assignmentscore.txt already exists <br>";
}