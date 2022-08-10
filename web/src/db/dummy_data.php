<?php
$servername = "localhost";
$username = "root";
$password = "";

// Start the session
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// put data in the teachers table
$sql_teachers_data = "INSERT IGNORE INTO kindercare.teachers (teacher_id, fname, lname, passwordx) VALUES
('TR7823KLP', 'Cephas', 'Brian','cephas'),
('TR2075KLP', 'Chosen', 'Eddie','ce'),
('TR7803KLP', 'Simon', 'Desire','tr'),
('TR2015KLP', 'Ankunda', 'Andante','tr')
;";

// pupils data
$sql_pupils_data = "INSERT IGNORE INTO kindercare.pupils(user_code,fname,lname,phone_no,gender,teacher_id,passwordx) VALUES
('7823KLP','John','Mugisa','+256780955031','M','TR7823KLP','JM'),
('2075KLP','Jane','Choosen','+256700444642','F','TR2075KLP','JC'),
('7853KLP','Mark','Desire','+256780958031','M','TR7893KLP','MD'),
('2089KLP','Jane','Choosen','+256700744642','F','TR2045KLP','FC'),
('7823KLP','Simon','Mugisa','+256780955031','M','TR7823KLP','SM'),
('2075KLP','Jane','Martha','+256700444642','F','TR2075KLP','JM'),
('7853KLP','John','Mugisah','+256380958031','M','TR7893KLP','JM'),
('2099KLP','Ritah','Fibi','+256720744642','F','TR2045KLP','FC'),
('7823KLP','Peter','Mugisa','+256780955031','M','TR7823KLP','PM'),
('2075KLP','Jane','Choosen','+256700444642','F','TR2075KLP','JC'),
('7853KLP','Mark','Desire','+256780958031','M','TR7893KLP','MD'),
('2039KLP','Jane','Choosen','+256700744642','F','TR2045KLP','JC'),
('7823KLP','Simon','Mugisa','+256780955031','M','TR7823KLP','SM'),
('2075KLP','Jane','Martha','+256700444642','F','TR2075KLP','JM'),
('7873KLP','John','Mugisah','+256380958031','M','TR7893KLP','JM'),
('2019KLP','Ritah','Jane','+256720744642','F','TR2045KLP','RJ');";

// insert some assingments into the assignments table
$sql_assignments_data = "INSERT IGNORE INTO kindercare.assignments (characters, character_no, start_datex, start_time, end_time, teacher_id) VALUES
('ABCDG', 5, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('SDRFT', 5, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('CBNGH', 5, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('JKLMO', 5, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('QWERTY', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ZXCVBN', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ASDFGH', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('TYUIO', 5, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('QWERTY', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ZXCVBN', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ASDFGH', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('TYUIO', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('QWERTY', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ZXCVBN', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ASDFGH', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('TYUIO', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP')
;";

// register pupils
$sql_registerpupils_data = "INSERT IGNORE INTO kindercare.registeredpupils (user_code,fname,lname,phone_no,status, isrequest) VALUES
('7823KLP','John','Mugisa','+256780955031','Deactivated','No'),
('2075KLP','Jane','Choosen','+256700444642','Deactivated','No'),
('7853KLP','Mark','Desire','+256780958031','Deactivated','No'),
('2089KLP','Jane','Choosen','+256700744642','Deactivated','No'),
('7824KLP','Simon','Mugisa','+256780955031','Deactivated','No'),
('2275KLP','Jane','Martha','+256700444642','Activated','No'),
('7843KLP','John','Mugisah','+256380958031','Activated','No'),
('2099KLP','Ritah','Fibi','+256720744642','Activated','No'),
('7833KLP','Peter','Mugisa','+256780955031','Activated','No'),
('2675KLP','Jane','Choosen','+256700444642','Activated','No'),
('7883KLP','Mark','Desire','+256780958031','Activated','No'),
('2039KLP','Jane','Choosen','+256700744642','Activated','No'),
('2823KLP','Simon','Mugisa','+256780955031','Activated','No'),
('2275KLP','Jane','Martha','+256700444642','Activated','No'),
('7873KLP','John','Mugisah','+256380958031','Activated','No'),
('9973KLP','Ming','Pa','+256380958031','Deactivated','Yes'),
('9873KLP','Yeng','Yu','+256380958031','Deactivated','Yes'),
('9473KLP','Angela','Justine','+256380958031','Deactivated','Yes'),
('4973KLP','Ming','Pa','+256380958031','Deactivated','Yes'),
('5973KLP','Shi','Fu','+256380958031','Deactivated','Yes'),
('6973KLP','Desp','Erado','+256380958031','Deactivated','Yes'),
('7973KLP','Amos','San','+256380958031','Deactivated','Yes'),
('8973KLP','Ankunda','Andante','+256380958031','Deactivated','Yes'),
('1973KLP','Alexa','Xi','+256380958031','Deactivated','Yes'),
('2973KLP','Xxi','Jing','+256380958031','Deactivated','Yes'),
('3973KLP','Lax','Inspira','+256380958031','Deactivated','Yes'),
('9373KLP','Drua','Pal','+256380958031','Deactivated','Yes'),
('2019KLP','Ritah','Jane','+256720744642','Activated','No');";

// add data to the assignmentscore table
$sql_assignmentscore_data = "INSERT IGNORE INTO kindercare.assignmentscore (user_code, assignment_id, score,comment) VALUES 
('7823KLP',2,92,'Excellent'),
('2075KLP',2,50,'Fair'),
('7853KLP',2,70,'Good'),
('2089KLP',2,80,'Very Good'),
('7823KLP',2,67,'Tried'),
('2075KLP',2,45,'Poor'),
('7853KLP',2,80,'Add Comment'),
('2099KLP',2,56,'Poor'),
('7823KLP',2,78,'Tried'),
('2075KLP',2,80,'Poor');
 ";


// check if the kindercare db was selected
if ($conn->select_db('kindercare') === TRUE) {

  // insert dummy data into the tables by running the data queries
  if ($conn->query($sql_teachers_data) === TRUE) {
    // echo "Table teachers created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_pupils_data) === TRUE) {
    // echo "Table pupils created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_assignments_data) === TRUE) {
    // echo "Table assignments created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_registerpupils_data) === TRUE) {
    // echo "Table registeredpupils created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  if ($conn->query($sql_assignmentscore_data) === TRUE) {
    // echo "Table registeredpupils created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  // check if all queries were successful
  if ($conn->query($sql_teachers_data) === TRUE && $conn->query($sql_pupils_data) === TRUE && $conn->query($sql_assignments_data) === TRUE && $conn->query($sql_registerpupils_data) === TRUE && $conn->query($sql_assignmentscore_data) === TRUE) {
    // set success message
    $_SESSION['settings_success'] = "Dummy Data Successfully!";
    // echo "Tables created successfully";
  } else {
    // set error message
    $_SESSION['settings_error'] = "Error Adding Dummy Data: " . $conn->error;
  }

  // end
  $conn->close();

  // redirect to settings page
  header("Location: ../settings/settings.php");
} else {
  echo "Error selecting database: " . $conn->error;
}