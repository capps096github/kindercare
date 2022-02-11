<?php


// Start the session
session_start();


$filename = '../../../db/assignments.txt';

if (isset($_POST['add_assignment_btn'])) {

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
  $char_string = implode($characters);


  // assignment details
  $start_date = $_POST['start_date'];
  $start_time = $_POST['start_time'];
  $end_time = $_POST['end_time'];

  // get teacher_id from the session
  $teacher_id = $_SESSION['teacher_id'];

  // get the time_difference= the end time - start time
  $time_difference = strtotime($end_time) - strtotime($start_time);

  // check if the time difference is less than 0 and also check if the end time is less than the start time and if it is, tell the user to choose a valid time
  if ($time_difference < 0 || strtotime($end_time) < strtotime($start_time)) {
    echo "Please choose a valid time";
    // set session error
    $_SESSION['ass_error'] = "Please choose a valid time";

    // go to assignment page
    header("Location: add_assignment_screen.php");
    exit();
  }

  // get the assignment id from the session
  $assignment_id = $_SESSION['ass_id'];

  // create a string from all the above variables (assignment_id, characters, character_no, time_difference)
  $assignment_string = $assignment_id . "-" . $char_string . "-" . $char_count . "-" . $time_difference;

  // print the string
  // echo $assignment_string;


  // Let's make sure the file exists and is writable first.
  if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $pupil_string will go when we fwrite() it.
    if (!$fp = fopen($filename, 'w')) {
      echo "Cannot open file ($filename)";
      exit();
    }

    // Write $pupil_string to our opened file.
    if (fwrite($fp, $assignment_string) === FALSE) {
      // echo "Cannot write to file ($filename)";

      $_SESSION['ass_success'] = "Assignment Not Added!";

      // redirect to the add assignment screen
      header("Location: add_assignment_screen.php");

      exit();
    }

    $_SESSION['ass_success'] = "Assignment Added Successfully !";


    // unset the assignment id from the session
    unset($_SESSION['ass_id']);

    // redirect to the add assignment screen
    header("Location: add_assignment_screen.php");

    fclose($fp);
  } else {
    $_SESSION['ass_error'] = "The file $filename is not writable";

    // go to assignment page
    header("Location: add_assignment_screen.php");
  }
}
