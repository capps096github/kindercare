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

<<<<<<< Updated upstream
// pupils data
$sql_pupils_data = "INSERT IGNORE INTO kindercare.pupils(user_code,fname,lname,phone_no,gender,teacher_id,passwordx) VALUES
('7823KLP','John','Mugisa','+256780955031','M','TR7823KLP','JM'),
('2075KLP','Judith','Tusiime','+256700444642','F','TR2075KLP','JC'),
('7853KLP','Mark','Desire','+256780958031','M','TR7893KLP','MD'),
('2089KLP','Joan','Choosen','+256700744642','F','TR2045KLP','FC'),
('7823KLP','Simon','Mugisa','+256780955031','M','TR7823KLP','SM'),
('2075KLP','Jane','Martha','+256700444642','F','TR2075KLP','JM'),
('7853KLP','John','Mugisah','+256380958031','M','TR7893KLP','JM'),
('2099KLP','Ritah','Fibi','+256720744642','F','TR2045KLP','FC'),
('7823KLP','Peter','Mugisa','+256780955031','M','TR7823KLP','PM'),
('2075KLP','Jenny','Aine','+256700444642','F','TR2075KLP','JC'),
('7853KLP','Mark','Desire','+256780958031','M','TR7893KLP','MD'),
('2039KLP','Jane','Barbra','+256700744642','F','TR2045KLP','JC'),
('7823KLP','Simon','Mugisa','+256780955031','M','TR7823KLP','SM'),
('2075KLP','Patience','Martha','+256700444642','F','TR2075KLP','JM'),
('7873KLP','John','Mugisa','+256380958031','M','TR7893KLP','JM'),
('2019KLP','Ritah','Jane','+256720744642','F','TR2045KLP','RJ');";

=======
>>>>>>> Stashed changes

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


// assignment score
$sql_assignmentscore = "CREATE TABLE IF NOT EXISTS kindercare.assignmentscore (
  `user_code` VARCHAR(30) PRIMARY KEY,
  `assignment_id` VARCHAR(100),
  `score` INT(3) NOT NULL,
  `comment` VARCHAR(100) NOT NULL
);";



// register pupils
$sql_registerpupils = "CREATE TABLE IF NOT EXISTS kindercare.registeredpupils (
  `user_code` VARCHAR(30) PRIMARY KEY,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `phone_no` VARCHAR(30) NOT NULL,
  `status` VARCHAR(30) NOT NULL DEFAULT 'Activated',
  `isrequest` VARCHAR(30) NOT NULL DEFAULT 'No'
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
  //    echo "Folder db already exists";
}


// create a file assignments.txt in the same directory
if (!file_exists("../../db/assignments.txt")) {
  $assign_file = fopen("../../db/assignments.txt", "w");

  fclose($assign_file);
  // echo "..";
} else {
  // echo "File assignments.txt already exists <br>";
}
