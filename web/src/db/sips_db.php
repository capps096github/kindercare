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
$sql_db = "CREATE DATABASE IF NOT EXISTS sips";

// products table
$sql_products = "CREATE TABLE IF NOT EXISTS sips.products (   
    `product_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `name` varchar(255) NOT NULL,   
    `price` decimal(10, 2) NOT NULL,  
    `image_url` varchar(255) NOT NULL,  
    `category` varchar(255) NOT NULL, 
    `likes` int(11) NOT NULL,  
    `sales` int(11) NOT NULL);";

// staff table
$sql_staff = "CREATE TABLE IF NOT EXISTS sips.staff (
 `staff_id` VARCHAR(30) PRIMARY KEY,
 `staff_name` VARCHAR(100) NOT NULL,
 `phone_no` INT(20) NOT NULL,
 `product_line` VARCHAR(100) NOT NULL,
 `staff_status` VARCHAR(30) NOT NULL
);";

$sql_managers = "CREATE TABLE IF NOT EXISTS sips.managers (
 `admin_id` VARCHAR(30) PRIMARY KEY,
 `username` VARCHAR(100) NOT NULL,
 `email` VARCHAR(30) NOT NULL,
 `passwordx` VARCHAR(30) NOT NULL
);";


$sql_customers = "CREATE TABLE IF NOT EXISTS sips.customers (
 `email` VARCHAR(30) PRIMARY KEY,
 `username` VARCHAR(100) NOT NULL,
 `preferences` VARCHAR(30) NOT NULL,
 `locationx` VARCHAR(6) NOT NULL,
 `gender` VARCHAR(30) NOT NULL, 
 `passwordx` VARCHAR(30) NOT NULL
);";


$sql_orders = "CREATE TABLE IF NOT EXISTS sips.orders (
 `order_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
`product_id` INT NOT NULL,
 `user_id` VARCHAR(30),
 `quantity` INT NOT NULL
);";


// Create database
if ($conn->query($sql_db) === TRUE) {
    // echo "Database created successfully";

    // teachers table
    if ($conn->query($sql_products) === TRUE) {
        // echo "Table teachers created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // pupils table
    if ($conn->query($sql_staff) === TRUE) {
        // echo "Table pupils created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // assignments table
    if ($conn->query($sql_managers) === TRUE) {
        // echo "Table assignments created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    if ($conn->query($sql_customers) === TRUE) {
        // echo "Table assignmentscore created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    //
    // register pupils
    if ($conn->query($sql_orders) === TRUE) {
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