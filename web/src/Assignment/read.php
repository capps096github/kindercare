<?php

// $filename = '../../db/performance.txt';
$filename = './db/performancex.txt';

$myFile = new SplFileObject($filename);





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


while (!$myFile->eof()) {
  // echo $myFile->fgets() . PHP_EOL;
  $line = $myFile->fgets() ;


  echo $line . PHP_EOL;

  // sql command to insert data into the db
  $sql_data = "INSERT IGNORE INTO 
        kindercare.registeredpupils (	user_code,fname,lname,phone_no,status)
         VALUES   " .  $line . ";";

  //  use the kindercare db
  $conn->select_db('kindercare');

  // insert data query
  if ($conn->query($sql_data) === TRUE) {

    // set session success
    echo "Pupil Added Successfully Added!";


    // redirect to the add assingnment screen
    // header("Location: add_assignment_screen.php");
  } else {
    echo "Error: " . $sql_data . "<br>" . $conn->error;
  }
}

$conn->close();
exit();
