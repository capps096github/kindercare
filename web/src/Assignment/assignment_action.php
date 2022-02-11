<?php
// ---------------------- Add Assignment Action -------------------- //
// Start the session
session_start();

if (isset($_POST['add_assignment_btn'])) {

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
  // $user_code = $conn->real_escape_string($_POST['user_code']);

  // create an array that will hold the characters from the checkboxes in the form ranging from char_a to char_z
  $characters = array();

  // loop through the checkboxes ranging from char_a to char_z, check for the ones that are checked and add their characters to the array

  for ($i = 'a'; $i <= 'z'; $i++) {
    if (isset($_POST['char_' . $i])) {
      // change i to uppercase and add it to the array
      $characters[] = strtoupper($i);
    }
  }

  // get the array length
  $char_count = count($characters);

  // if the characters are more than 8, tell the user to choose less than 8 characters else create a string from the array
  if ($char_count > 8) {
    // echo "Please choose less than 8 characters";
    // set session error
    $_SESSION['ass_error'] = "Please choose not more than 8 characters";

    // go to assignment page
    header("Location: add_assignment_screen.php");
    exit();
  }

  // get the string from the array with characters separated by commas
  $char_string = implode(",", $characters);


  // assignment details
  $start_date = $conn->real_escape_string($_POST['start_date']);
  $start_time = $conn->real_escape_string($_POST['start_time']);
  $end_time = $conn->real_escape_string($_POST['end_time']);

  // get teacher_id from the session
  $teacher_id = $_SESSION['teacher_id'];

  // get the time_difference= the end time - start time
  $time_difference = strtotime($end_time) - strtotime($start_time);

  // check if the time difference is less than 0 and also check if the end time is less than the start time and if it is, tell the user to choose a valid time
  if ($time_difference < 0 || strtotime($end_time) < strtotime($start_time)) {
    echo "Please choose a valid time";
    // set session error
    $_SESSION['ass_error'] = "Please choose a valid time, the end time must be greater than the start time";

    // go to assignment page
    header("Location: add_assignment_screen.php");
    exit();
  }

  //  print all the captured data
  // echo "teacher_id: " . $teacher_id . "<br>";
  // echo "start_date: " . $start_date . "<br>";
  // echo "start_time: " . $start_time . "<br>";
  // echo "end_time: " . $end_time . "<br>";
  // echo "char_string: " . $char_string . "<br>";


  // sql command to insert data into the db
  $sql_data = "INSERT IGNORE INTO
        kindercare.assignments (characters, character_no, start_datex, start_time, end_time, teacher_id)
         VALUES ('$char_string', '$char_count', '$start_date', '$start_time', '$end_time', '$teacher_id');";

  // read the assignment id from the db
  $sql_read_id = "SELECT assignment_id FROM kindercare.assignments WHERE teacher_id = '$teacher_id' AND start_datex = '$start_date' AND start_time = '$start_time' AND end_time = '$end_time' AND characters = '$char_string' AND character_no = '$char_count';";

  //  use the kindercare db
  $conn->select_db('kindercare');

  // insert data query
  if ($conn->query($sql_data) === TRUE) {
    // echo "New record created successfully";

    // read the assignment id from the db
    $result = $conn->query($sql_read_id);

    // if the result is not empty
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        // echo "assignment_id: " . $row["assignment_id"] . "<br>";

        // assign the id to a variable
        $ass_id = $row["assignment_id"];

        // put this in a session
        $_SESSION['ass_id'] = $ass_id;
      }
    } else {
      echo "0 results";
    }

    require_once 'add_assignment_txt.php';
  } else {
    $_SESSION['ass_error'] = "Assignment Not Added!";

    // redirect to the add assignment screen
    header("Location: add_assignment_screen.php");
    // echo "Error: " . $sql_data . "<br>" . $conn->error;
  }


  $conn->close();
  exit();
}
