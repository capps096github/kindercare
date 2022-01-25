CREATE DATABASE IF NOT EXISTS nois;
-- our database
USE `nois`;
-- students table
CREATE TABLE IF NOT EXISTS nois.students (
  `student_number` INT(10) UNSIGNED PRIMARY KEY,
  `username` VARCHAR(30) NOT NULL,
  `passwordx` VARCHAR(30) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `first_course` VARCHAR(30),
  `second_course` VARCHAR(30)
);