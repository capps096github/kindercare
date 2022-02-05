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

// put data in the teachers table
$sql_teachers_data = "INSERT IGNORE INTO kindercare.teachers (teacher_id, fname, lname, passwordx) VALUES
('TR7823KLP', 'Cephas', 'Brian','cephas'),
('TR2075KLP', 'Chosen', 'Eddie','ce'),
('TR7803KLP', 'Simon', 'Desire','tr'),
('TR2015KLP', 'Ankunda', 'Andante','tr')
;";

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


// insert some assingments into the assignments table
$sql_assignments_data = "INSERT IGNORE INTO kindercare.assignments (characters, character_no, start_datex, start_time, end_time, teacher_id) VALUES
('ABCDG', 1, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('SDRFT', 2, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('CBNGH', 3, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('JKLMO', 4, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('QWERTY', 5, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ZXCVBN', 6, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ASDFGH', 7, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('TYUIO', 8, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('QWERTY', 10, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ZXCVBN', 11, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ASDFGH', 12, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('TYUIO', 13, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('QWERTY', 14, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ZXCVBN', 15, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('ASDFGH', 16, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP'),
('TYUIO', 17, '2018-01-01', '09:00:00', '10:00:00', 'TR2345KLP')
;";


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

// register pupils
$sql_registerpupils_data = "INSERT IGNORE INTO kindercare.registeredpupils (user_code,fname,lname,phone_no,status, isrequest) VALUES
('7823KLP','John','Mugisa','+256780955031','Activated','No'),
('2075KLP','Jane','Choosen','+256700444642','Activated','No'),
('7853KLP','Mark','Desire','+256780958031','Activated','No'),
('2089KLP','Jane','Choosen','+256700744642','Activated','No'),
('7824KLP','Simon','Mugisa','+256780955031','Activated','No'),
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
('2019KLP','Ritah','Jane','+256720744642','Activated','No');";

// register pupils
$sql_requests = "CREATE TABLE IF NOT EXISTS kindercare.requests (
  `user_code` VARCHAR(30) PRIMARY KEY,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `phone_no` VARCHAR(30) NOT NULL
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

  // requests
  if ($conn->query($sql_requests) === TRUE) {
    // echo "Table requests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

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

// create a file registered_pupils.txt in the same directory
if (!file_exists("../../db/registered_pupils.txt")) {
  $pupils_file = fopen("../../db/registered_pupils.txt", "w");

  fclose($pupils_file);
  // echo ".";
} else {
  // echo "File registered_pupils.txt already exists <br>";
}

// create a file assignments.txt in the same directory
if (!file_exists("../../db/assignments.txt")) {
  $assign_file = fopen("../../db/assignments.txt", "w");

  fclose($assign_file);
  // echo "..";
} else {
  // echo "File assignments.txt already exists <br>";
}


// create a file performance.txt in the same directory
if (!file_exists("../../db/performance.txt")) {
  $assignscore_file = fopen("../../db/performance.txt", "w");

  fclose($assignscore_file);
  // echo "...";
} else {
  // echo "File performance.txt already exists <br>";
}
