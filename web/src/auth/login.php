<?php
// ---------------------- Login PHP -------------------- //
// Start the session
session_start();


if (isset($_POST['login_btn'])) {

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
  $teacher_id = $conn->real_escape_string($_POST['teacher_id']);
  $login_password = $conn->real_escape_string($_POST['login_password']);


  //  use the kindercare db
  if ($conn->select_db('kindercare') === TRUE) {
    // echo "Database selected";

    // check if a teacher with the teacher_id and password exists
    $sql_select = "SELECT * FROM kindercare.teachers WHERE teachers.teacher_id = '$teacher_id' AND teachers.passwordx = '$login_password';";

    // run query
    $result = $conn->query($sql_select);

    // check if the teacher exists
    if ($result->num_rows > 0) {
      // output data of each row first name, last name, teacher id, password
      while ($row = $result->fetch_assoc()) {
        $db_first_name = $row["fname"];
        $db_last_name = $row["lname"];
        $db_teacher_id = $row["teacher_id"];
        $db_password = $row["passwordx"];
      }
    } else {
      // echo "Create an account first";
      // set session error login_error
      $_SESSION['login_error'] = "Create an account first";

      // redirect to the Teacher's create account page
      header("Location: ../teacher/register.php");
    }

    // check if the teacher_id and password matches
    if ($teacher_id == $db_teacher_id && $login_password == $db_password) {
      // echo "Login Successful";

      // set the session variables
      $_SESSION['first_name'] = $db_first_name;
      $_SESSION['last_name'] = $db_last_name;
      $_SESSION['teacher_id'] = $db_teacher_id;


      // go Home Screen
      header("Location: ../home.php");
    } else {
      // set the session error login_error
      $_SESSION['login_error'] = "Login Failed! Incorrect Teacher ID or Password";
      // echo "Login Failed";

      // go to Teachers Login
      header("Location: ../teacher/login.php");
    }

    $conn->close();
    exit();
  } else {
    echo "Database not found";

    // redirect to the register page
    header("Location: ../register/register.php");
  }
}
