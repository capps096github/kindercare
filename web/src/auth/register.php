<?php
// Start the session
session_start();


if (isset($_POST['signup_btn'])) {


  // check if the terms checkbox is checked
  if (isset($_POST['terms'])) {

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


    // check if a database called nois exists
    $sql = "CREATE DATABASE IF NOT EXISTS nois";

    if ($conn->query($sql) === TRUE) {
      // echo "Database created successfully";

      // prevent SQL injection
      $student_number = $conn->real_escape_string($_POST['student_number']);
      $username = $conn->real_escape_string($_POST['username']);
      $passwordx = $conn->real_escape_string($_POST['password']);
      $email = $conn->real_escape_string($_POST['email']);

      // courses
      $first_course = $conn->real_escape_string($_POST['first_course']);
      $second_course = $conn->real_escape_string($_POST['second_course']);


      //  use the nois db
      $conn->select_db('nois');


      // create table if it doesn't exist
      $sql = "CREATE TABLE IF NOT EXISTS nois.students (
                student_number INT(10) UNSIGNED PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                passwordx VARCHAR(30) NOT NULL,
                email VARCHAR(30) NOT NULL,
                first_course VARCHAR(30) ,
                second_course VARCHAR(30) 
                );";


      // check if table students exists then insert data
      if ($conn->query($sql) === TRUE) {
        // echo "Table students created successfully";

        // insert a student into the table only if the student number is not already in the table

        $sql = "INSERT INTO nois.students 
                VALUES ('$student_number','$username', '$passwordx', '$email', '$first_course', '$second_course') ;";

        if ($conn->query($sql) === TRUE) {
          // echo "New record created successfully";  

          // set new session variables from the data in the database i.e student_number, username, email
          $_SESSION['student_number'] = $student_number;
          $_SESSION['username'] = $username;
          $_SESSION['email'] = $email;

          header("Location: ../../dashboards/student/students_dashboard.php");
          exit();
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          header("Location: ../../login/students_login.php");
          exit();
        }
      } else {
        echo "Error creating table: " . $conn->error;
      }
    } else {
      echo "Error creating database: " . $conn->error;
    }
    $conn->close();
  } else {
    echo "Please agree to the terms and conditions";

    header("Location: ../../register/students_register.php");
  }
}
