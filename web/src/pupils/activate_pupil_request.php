<?php

// this has code to activate a pupil

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

//  use the kindercare db
if ($conn->select_db('kindercare') === TRUE) {

  // get usercode from the url
  $usercode = $_GET['user_code'];


  // get the pupil from the registered pupils table and update the activation status to Activated and isrequest = "No"
  $sql = "UPDATE `registeredpupils` SET `status` = 'Activated', `isrequest` = 'No'  WHERE `registeredpupils`.`user_code` = '$usercode';";

  // get the result
  $result = $conn->query($sql);

  // now overrite the value of requests.txt to empty
  $filename = '../../../cmd/requests.txt';
  $handle = fopen($filename, 'w') or die('Cannot open file:  ' . $filename);
  fclose($handle);


  // if the result is true print success else print error
  header("Location: dashboard.php");
} else {
  echo "Error: " . "<br>" . $conn->error;
}
