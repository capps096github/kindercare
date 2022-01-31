<?php

// create a folder db if it does not exist
if (!file_exists("../../db")) {
  mkdir("../../db");
  echo "Folder db created successfully <br>";
} else {
  echo "Folder db already exists";
}


// create a file registered_pupils.txt in the same directory
if ( !file_exists("../../db/registered_pupils.txt")) {
  $pupils_file = fopen("../../db/registered_pupils.txt", "w");

  fclose($pupils_file);
  echo "File registered_pupils.txt created successfully <br>";
} else {
  echo "File registered_pupils.txt already exists <br>";
}
