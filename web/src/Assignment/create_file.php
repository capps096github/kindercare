<?php

// create a folder db if it does not exist
if (!file_exists("../../db")) {
  mkdir("../../db");
  echo "Folder db created successfully <br>";

} else {
  echo "Folder db already exists";
}


// create a file assignments.txt in the same directory
if (!file_exists("../../db/assignments.txt") || !file_exists("../../db/registered_pupils.txt")) {
  $assign_file = fopen("../../db/assignments.txt", "w");

  fclose($assign_file);
  echo "File assignments.txt created successfully <br>";
} else {
  echo "File assignments.txt already exists <br>";
}