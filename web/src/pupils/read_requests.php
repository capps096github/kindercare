<?php


// for web
$filename = '../../../cmd/requests.txt';
// for cmd
// $filename = '../cmd/performance.txt';


// check if file exists
if (file_exists($filename)) {


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
    $usercode = $myFile->fgets();

    // check if usercode is not empty
    if (!empty($usercode)) {
      // get the pupil from the registered pupils table and update the isrequest = "Yes"
      $sql = "UPDATE kindercare.registeredpupils  SET `isrequest` = 'Yes'  WHERE registeredpupils.user_code = '$usercode';";

      //  select the kindercare db
      $conn->select_db('kindercare');

      // run the query if error print error
      if ($conn->query($sql) === TRUE) {

        // set session success
        // echo "Pupil Request Added!";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }

  $conn->close();
} else {
  echo "The file does not exist";
  exit();
}
