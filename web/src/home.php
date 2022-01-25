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
  <title>KINDERCARE LEARNING PLATFORM</title>

  <!-- CSS -->
  <link href="../css/kindercare.css" rel="stylesheet" />

  <!-- JS -->
  <script src="kindercare.js"></script>



</head>

<!-- Body -->

<body class="bg-lightblue font-spartan">

<a href="./teacher/login.php">c</a>

  <section class="flex flex-col justify-between h-screen">
    <!-- Nav Bar -->
    <nav class="md:flex md:justify-between lg:flex lg:justify-between md:px-4 px-2 py-2 sticky top-0 left-0 right-0 bg-blue">
      <!-- Logo -->
      <span class="hover:cursor-pointer space-x-2 flex justify-center items-center mt-4 md:mt-0" title="KINDERCARE">
        <div onclick="goToSplash()" class="flex font-bold text-white hover:text-amber hover:underline items-center space-x-2">


          <svg class="w-10 h-10 fill-current " width="24" height="24" viewBox="0 0 24 24">
            <path d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z" />
          </svg>

          <p class="">KINDERCARE</p>
        </div>
      </span>

      <!-- Actions -->
      <div class="space-x-2 flex justify-center items-center mt-4 md:mt-0">
        <!-- Log out -->
        <a href="index.php" class="text-white bg-darkred  hover:text-red hover:bg-white rounded-md  px-5 py-3 text-sm bg-transparent
            transition-all duration-300">
          <i class="fas fa-sign-in-alt"></i>
          <span>LOGOUT</span>
        </a>


      </div>
    </nav>


    <!-- Main -->
    <main class="mx-auto sm:max-w-6xl max-w-6xl px-4 sm:px-6  lg:px-8 ">

      <!-- Logo and Name -->
      <div class="flex flex-col space-y-4 items-center justify-center ">
        <!-- logo -->
        <div>

          <svg class="w-40 h-40 fill-blue m-auto" width="24" height="24" viewBox="0 0 24 24">
            <path d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z" />
          </svg>
        </div>

        <!-- name -->
        <div class="text-center text-blue">

          <h3 class="text-blue  text-5xl font-bold mt-2 tracking-tight">
            KINDERCARE
          </h3>

          <h3 class="text-blue  text-xl font-bold mt-2 tracking-wide ">
            LEARNING PLATFORM
          </h3>
          <h3 class="text-blue  text-xl font-bold mt-2 tracking-tight ">
            (KLP)
          </h3>
        </div>
      </div>

      <!-- A grid of 2 cards -->
      <div class="mt-10 md:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-2 sm:max-w-6xl max-w-6xl mx-auto grid">

        <!-- Image -->
        <!-- <img src="../images/kids.jpg" alt="KinderCare Pupil" class="aspect-video"> -->

        <!-- pupil -->
        <article onclick="goToPupilsDashboard()" class="hover:cursor-pointer bg-amber rounded-lg p-10 transition-colors duration-300 text-blue
            hover:text-white hover:bg-blue justify-center items-center">

          <div class="flex justify-center items-center mt-4 mb-4 ">
            <svg width="32px" height="24px" viewBox="0 0 32 24" class="fill-current w-32 h-24">
              <path d="M20.5 12.5c0 .828-.56 1.5-1.25 1.5s-1.25-.672-1.25-1.5.56-1.5 1.25-1.5 1.25.672 1.25 1.5zm-7.75-1.5c-.69 0-1.25.672-1.25 1.5s.56 1.5 1.25 1.5 1.25-.672 1.25-1.5-.56-1.5-1.25-1.5zm3.25 8.354c2.235 0 3-2.354 3-2.354h-6s.847 2.354 3 2.354zm12-5.803c0 1.925-.896 4.738-3.317 5.188-1.959 3.492-4.877 5.261-8.683 5.261s-6.724-1.769-8.683-5.26c-2.421-.451-3.317-3.263-3.317-5.189 0-2.147.809-4.093 2.843-4.223.453-5.099 3.946-8.328 9.157-8.328s8.704 3.229 9.157 8.329c2.036.129 2.843 2.073 2.843 4.222zm-2.631-2.116c-.272-.178-.615-.104-.756-.041-.661.293-1.406-.191-1.406-.914 0-1.344-.315-5.007-3.46-6.654 1.304 1.354 1.753 3.792 1.753 5.174h-12.591999999999999c-.09.601-.115 1.124-.115 1.48 0 .723-.745 1.207-1.406.914-.142-.063-.484-.137-.756.041-1.102.716-.798 5.326 1.337 5.367.367.007.702.216.87.543 2.391 4.655 5.981 4.655 7.162 4.655s4.771 0 7.162-4.655c.168-.328.503-.536.87-.543 2.134-.042 2.44-4.651 1.337-5.367zm-.619-6.748c3.797-1.093.375 7.346 7.25 7.313-2.266-1.469-.893-5.476-1.5-8.166-.518-2.293-2.328-2.834-3.5-2.834-1.875 0-3.106 1.106-3.603 1.922.544.478 1.014 1.224 1.353 1.765zm-16.147-1.765c-.497-.816-1.728-1.922-3.603-1.922-1.172 0-2.982.541-3.5 2.834-.607 2.69.766 6.697-1.5 8.166 6.875.033 3.453-8.406 7.25-7.313.339-.541.809-1.287 1.353-1.765z" />
            </svg>
          </div>

          <h2 class="text-5xl  text-center tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            Pupils
          </h2>

          <p class=" font-bold text-center mt-4">
            To check out info about pupils and register new ones
          </p>
        </article>

        <!-- Assignment -->
        <article onclick="goToAssignmentsDashboard()" class="hover:cursor-pointer bg-blue rounded-lg p-10 transition-colors duration-300 text-white hover:text-blue hover:bg-amber justify-center items-center">

          <div class="flex justify-center items-center mt-4 mb-4 ">

            <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current w-24 h-24">
              <path d="M14.568.075c2.202 1.174 5.938 4.883 7.432 6.881-1.286-.9-4.044-1.657-6.091-1.179.222-1.468-.185-4.534-1.341-5.702zm7.432 10.925v13h-20v-24h8.409c4.857 0 3.335 8 3.335 8 3.009-.745 8.256-.419 8.256 3zm-16 5h5v-4h-5v4zm12 2h-12v1h12v-1zm0-3h-5v1h5v-1zm0-3h-5v1h5v-1z" />
            </svg>
          </div>
          <h2 class="text-5xl text-center tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            Assignments
          </h2>

          <p class=" font-bold text-center mt-4">
            To check out info about pupils performance and add new assignment
          </p>
        </article>
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