<?php
session_start();
if (!isset($_SESSION["teacher_id"])) {
  header("Location: ./teacher/login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Title -->
  <title>KINDERCARE PLATFORM SETTINGS</title>


  <!-- CSS -->
  <link href="../../css/kindercare.css" rel="stylesheet" />

  <!-- JS -->
  <script src="kindercare.js"></script>



</head>

<!-- Body -->

<body class="bg-blue font-spartan">
  <section class="flex flex-col justify-between h-screen">
    <!-- Nav Bar -->
    <nav class="md:flex md:justify-between lg:flex lg:justify-between md:px-4 px-2 py-4 sticky top-0 left-0 right-0 bg-blue">
      <!-- back -->
      <a href="../home.php" class="duration-300 transition-colors flex md:justify-start lg:justify-start justify-center items-center space-x-2 text-white hover:text-amber hover:no-underline hover:cursor-pointer">
        <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current w-5 h-5">
          <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
        </svg>

        <p class="text-sm font-bold">Back to Home</p>
      </a>


      <!-- Actions -->
      <div></div>
    </nav>


    <!-- Main -->
    <main class="mx-auto sm:max-w-6xl max-w-6xl px-4 sm:px-6  lg:px-8 ">

      <!-- Logo and Name -->
      <div class="flex flex-col space-y-4 items-center justify-center ">
        <!-- logo -->
        <div>



          <svg class="w-40 h-40 fill-amber m-auto" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
            <g>
              <path d="M0,0h24v24H0V0z" fill="none" />
              <path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z" />
            </g>
          </svg>

        </div>

        <!-- name -->
        <div class="text-center text-amber">

          <h3 class="  text-5xl font-bold mt-2 tracking-tight">
            KINDERCARE
          </h3>

          <h3 class="  text-xl font-bold mt-2 tracking-wide ">
            PLATFORM SETTINGS
          </h3>
          <h3 class="  text-xl font-bold mt-2 tracking-tight ">
            (KLP)
          </h3>
        </div>

        <!-- for user feedback -->
        <div class="sm:text-center text-center items-center transition-colors duration-500 text-amber hover:text-white">
          <?php
          // check if success session is set then echo it out in a h2 tag 
          if (isset($_SESSION['settings_success'])) {
            echo "<h2 class='text-3xl tracking-tight mt-1 font-extrabold sm:text-3xl md:text-4xl mx-auto text-white hover:text-amber' >" . $_SESSION['settings_success'] . "</h2>";
            unset($_SESSION['settings_success']);
          } else if (isset($_SESSION['settings_error'])) {
            echo "<h2 class='text-3xl tracking-tight mt-1 font-extrabold sm:text-3xl md:text-4xl mx-auto text-red hover:text-white' >" . $_SESSION['settings_error'] . "</h2>";
            unset($_SESSION['settings_error']);
          }
          ?>
        </div>
      </div>

      <!-- A grid of 2 cards -->
      <div class="mt-10 md:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-2 sm:max-w-6xl max-w-6xl mx-auto grid">

        <!-- pupil -->
        <a href="../db/dummy_data.php" class="hover:cursor-pointer bg-amber rounded-lg p-10 transition-colors duration-300 text-blue
            hover:text-blue hover:bg-white justify-center items-center">

          <div class="flex justify-center items-center mt-4 mb-4 ">
            <svg class="fill-current w-32 h-24" width="24" height="24" viewBox="0 0 24 24">
              <path d="M1 3.488c0-1.926 4.656-3.488 10-3.488 5.345 0 10 1.562 10 3.488s-4.655 3.487-10 3.487c-5.344 0-10-1.561-10-3.487zm10 14.823c.34 0 .677-.007 1.011-.019.045-1.407.537-2.7 1.342-3.745-.839.067-1.643.1-2.353.1-3.006 0-7.588-.523-10-2.256v2.434c0 1.925 4.656 3.486 10 3.486zm0-5.665c5.345 0 10-1.562 10-3.487v-2.44c-2.418 1.738-7.005 2.256-10 2.256-3.006 0-7.588-.523-10-2.256v2.44c0 1.926 4.656 3.487 10 3.487zm1.254 7.635c-.438.02-.861.03-1.254.03-2.995 0-7.582-.518-10-2.256v2.458c0 1.925 4.656 3.487 10 3.487 1.284 0 2.526-.092 3.676-.256-1.155-.844-2.02-2.055-2.422-3.463zm10.746-1.781c0 2.485-2.017 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.017-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-2-.5h-2v-2h-1v2h-2v1h2v2h1v-2h2v-1z" />
            </svg>
          </div>

          <h2 class="text-5xl  text-center tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            Dummy Data
          </h2>

          <p class=" font-bold text-center mt-4">
            To add mock data to the KLP platform.
          </p>
        </a>

        <!-- Assignment -->
        <a href="../db/clear_db.php" class="hover:cursor-pointer bg-red rounded-lg p-10 transition-colors duration-300 text-white hover:text-blue
            hover:bg-white justify-center items-center">

          <div class="flex justify-center items-center mt-4 mb-4 ">

            <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current w-24 h-24">
              <path d="M18.5 15c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-5v-1h5v1zm-7.18 4h-12.82v-24h8.409c4.857 0 3.335 8 3.335 8 3.009-.745 8.256-.419 8.256 3v2.501c-.771-.322-1.614-.501-2.5-.501-3.584 0-6.5 2.916-6.5 6.5 0 1.747.696 3.331 1.82 4.5zm-.252-23.925c2.202 1.174 5.938 4.883 7.432 6.881-1.286-.9-4.044-1.657-6.091-1.179.222-1.468-.185-4.534-1.341-5.702z" />
            </svg>


          </div>
          <h2 class="text-5xl text-center tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            Clear
          </h2>

          <p class=" font-bold text-center mt-4">
            To delete all data in the KLP database.
          </p>
        </a>
      </div>

    </main>

    <!-- Footer -->
    <footer class="mt-10 w-full bg-blue max-w-container mx-auto py-6 text-center space-y-2 items-center justify-center text-sm ">
      <p class="text-amber hover:text-white font-bold">
        &copy; 2022 - KinderCare Learning Platform | All rights Reserved
      </p>

    </footer>
  </section>
</body>

</html>