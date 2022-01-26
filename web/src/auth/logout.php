<?php
// start session
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

// redirect to index.php
header("Location: ../index.php");
