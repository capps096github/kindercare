CREATE DATABASE IF NOT EXISTS kindercare;
-- our database
USE `kindercare`;
-- teachers table
CREATE TABLE IF NOT EXISTS kindercare.teachers (
  
  `teacher_id` VARCHAR(30) PRIMARY KEY ,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `passwordx` VARCHAR(30) NOT NULL
);
-- pupils table
CREATE TABLE IF NOT EXISTS kindercare.pupils (
  
  `user_code` VARCHAR(30) PRIMARY KEY ,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `phone_no` INT(30) NOT NULL,
  `gender` VARCHAR(6) NOT NULL,
  `teacher_id` VARCHAR(30) NOT NULL,
  `passwordx` VARCHAR(30) NOT NULL
);
-- assignments table
CREATE TABLE IF NOT EXISTS kindercare.assignments (
  
  `assignment_id` VARCHAR(100) AUTO_INCREMENT PRIMARY KEY,
  `characters` VARCHAR(30) NOT NULL,
  `character_no` INT NOT NULL,
  `start_date` DATE NOT NULL,
  `start_time` TIME NOT NULL,
  `end_time` TIME NOT NULL,
  `teacher_id` VARCHAR(30) NOT NULL,
  `user_code` VARCHAR(30) NOT NULL
);

-- assignmentscore table
CREATE TABLE IF NOT EXISTS kindercare.assignmentscore (
  
  `assignment_id` VARCHAR(100) PRIMARY KEY,
  `comment` VARCHAR(100) NOT NULL,
  `user_code` VARCHAR(30) NOT NULL
);

-- registeredpupils table
CREATE TABLE IF NOT EXISTS kindercare.registeredpupils (
  
  `user_code` VARCHAR(30) PRIMARY KEY ,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `phone_no` INT(30) NOT NULL,
  `status` VARCHAR(30) NOT NULL DEFAULT 'Activated'
);