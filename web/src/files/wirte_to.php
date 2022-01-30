<?php

// here are the steps for writing to a file in php
// 1. open the file
// 2. write to the file
// 3. close the file

// implementation
// 1.
$file = fopen("./db/text.c", "w");

// 2.
fwrite($file, "Hello World");

// 3.
fclose($file);