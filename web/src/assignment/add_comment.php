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

  // get the assignment_id from the url
  $assignment_id = $_GET['assignment_id'];

  // get via post the comment from the comment dropdown menu while preventing sql injection
  $comment = mysqli_real_escape_string($conn, $_POST['comment']);


  //  print comment
  echo '<div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 border-b border-darkred/20">
          <h3 class="text-xl font-bold leading-tight text-darkred">
            Comment
          </h3>
        </div>
        <div class="px-4 py-5">
          <p class="text-darkred">
            ' . $comment . '
          </p>
        </div>
      </div>';


  // update the assignmentscore table to have the new comment
  $sql = "UPDATE `assignmentscore` SET `comment` = '$comment' WHERE `user_code` = '$usercode' AND `assignment_id` = '$assignment_id';";

  // get the result
  $result = $conn->query($sql);

  // if the result is true print success else print error
  if ($result === TRUE) {

    header("Location: assignments.php");
  } else {

    header("Location: assignments.php");
  }
} else {
  echo "Error: ". "<br>" . $conn->error;
}
