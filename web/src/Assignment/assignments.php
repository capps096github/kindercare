<?php
session_start();
if (!isset($_SESSION["teacher_id"])) {
  header("Location: ../teacher/login.php");
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
  <title>KLP | Register Pupil</title>
  <!-- CSS -->
  <link href="../../css/kindercare.css" rel="stylesheet" />

  <!-- JS -->
  <script src="../kindercare.js"></script>
</head>

<body class="bg-lightblue font-spartan">
  <section class="flex flex-col justify-between h-screen space-y-10">

    <!-- Nav Bar -->
    <nav class="md:flex md:justify-between lg:flex lg:justify-between md:px-4 px-2 py-5 fixed top-0 left-0 right-0 bg-blue">
      <!-- back -->
      <a href="../home.php" class="duration-300 transition-colors flex md:justify-start lg:justify-start justify-center items-center space-x-2 text-white hover:text-amber hover:no-underline hover:cursor-pointer">
        <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current w-5 h-5">
          <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
        </svg>

        <p class="text-sm font-bold">Back to Home</p>
      </a>

      <!-- Logo -->
      <a href="" class="space-x-2 flex justify-center items-center mt-4 md:mt-0" title="KLP | Pupil's Dashboard">
        <div class="flex text-white font-bold hover:text-amber hover:underline items-center space-x-2">

          <svg class="w-10 h-10 fill-current " width="24" height="24" viewBox="0 0 24 24">
            <path d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z" />
          </svg>
          <p>GRADEBOOK</p>
        </div>
      </a>

      <!--Register Pupil -->
      <div class="space-x-2 flex justify-center items-center mt-4 md:mt-0">
        <a href="add_assignment_screen.php" class="flex items-center rounded-md text-blue text-sm font-bold pl-2 pr-3 py-2 shadow-sm hover:text-blue hover:bg-white hover:no-underline normal-case px-5 bg-amber transition-colors duration-300">
          <svg width="20" height="20" fill="currentColor" class="mr-2" aria-hidden="true">
            <path d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
          </svg>
          Add New Assignment
        </a>
      </div>



    </nav>

    <!-- main -->
    <main class="md:mt-28 lg:mt-28 mt-40 p-4 space-y-4 w-full mx-auto">

      <!--all pupils -->
      <div class="mb-10">
        <h2 class="text-3xl text-blue tracking-tight mt-12 mb-10 text-center font-bold sm:text-4xl md:text-5xl mx-auto">
          Pupils'
          <span class="text-blue underline xl:inline">Performance</span>
        </h2>


        <!-- performance -->
        <?php
        require_once 'performance_table.php';
        ?>



      </div>


    </main>


    <!-- Footer -->
    <footer class="mt-10 w-full bg-blue max-w-container mx-auto py-6 text-center space-y-2 items-center justify-center text-sm ">
      <p class="text-white hover:text-amber">
        &copy; 2022 - KinderCare Learning Platform | All rights Reserved
      </p>
    </footer>
  </section>
</body>

</html>