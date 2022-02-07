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
  <title>KLP | Add Assignment</title>
  <!-- CSS -->
  <link href="../../css/kindercare.css" rel="stylesheet" />

  <!-- JS -->
  <script src="../kindercare.js"></script>
</head>

<body class="bg-blue font-spartan">
  <section class="flex flex-col justify-between h-screen space-y-10">

    <nav class="flex justify-between items-center py-4  px-2">

      <!-- back -->
      <a href="assignments.php" class="duration-300 transition-colors flex md:justify-start lg:justify-start justify-center items-center space-x-2 text-amber hover:text-white hover:no-underline hover:cursor-pointer">
        <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current w-5 h-5">
          <path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
        </svg>

        <p class="text-sm font-bold">Back</p>
      </a>

      <!-- Logo -->
      <span class="hover:cursor-pointer space-x-2 flex justify-center items-center mt-4 md:mt-0" title="">
        <div class="flex text-white hover:text-amber hover:underline items-center space-x-2">


          <svg class="w-10 h-10 fill-current " width="24" height="24" viewBox="0 0 24 24">
            <path d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z" />
          </svg>

          <p class="">ADD ASSIGNMENT</p>
        </div>
      </span>

      <div></div>

    </nav>
    <!-- Main Content -->
    <main class="mx-auto sm:max-w-4xl max-w-4xl px-4 sm:mt-5 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14">
      <div class="sm:text-center text-center items-center transition-colors duration-500 text-amber hover:text-white">

        <?php
        // check if success session is set then echo it out in a h2 tag 
        if (isset($_SESSION['ass_success'])) {
          echo "<h2 class='text-3xl tracking-tight mt-1 font-extrabold sm:text-3xl md:text-4xl mx-auto text-white hover:text-amber' >" . $_SESSION['ass_success'] . "</h2>";
          echo "<p class='mt-2 font-bold text-white hover:text-amber'>Feel free to add another assignment </p>";
          unset($_SESSION['ass_success']);
        } else if (isset($_SESSION['ass_error'])) {
          echo "<h2 class='text-3xl tracking-tight mt-1 font-extrabold sm:text-3xl md:text-4xl mx-auto text-red hover:text-white' >" . $_SESSION['ass_error'] . "</h2>";
          unset($_SESSION['ass_error']);
        }

        echo '<h2 class="text-3xl tracking-tight mt-4 font-extrabold sm:text-3xl md:text-4xl mx-auto">
          Add the Assignment Details below
        </h2>';


        ?>





      </div>

      <!-- form div -->
      <div class="mt-10 justify-center items-center">
        <div class="max-w-xl mx-auto">
          <!-- <form class="space-y-6 " action="add_assignment.php" method="post"> -->
          <form class="space-y-6 " action="assignment_action.php" method="post">
            <!-- Question -->
            <label class="block mt-4">
              <span class="block text-sm font-medium text-white mb-4">Characters (Not more than 8)</span>

              <div class=" md:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-2 sm:max-w-6xl max-w-6xl mx-auto grid">


                <!-- A -->
                <div class="flex items-center ">
                  <input id="char_a" name="char_a" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_a" class="ml-2 block text-sm text-white">
                    A
                  </label>

                </div>

                <!-- B -->
                <div class="flex items-center ">
                  <input id="char_b" name="char_b" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_b" class="ml-2 block text-sm text-white">
                    B
                  </label>

                </div>
                <!-- C -->
                <div class="flex items-center ">
                  <input id="char_c" name="char_c" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_c" class="ml-2 block text-sm text-white">
                    C
                  </label>

                </div>
                <!-- D -->
                <div class="flex items-center ">
                  <input id="char_d" name="char_d" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_d" class="ml-2 block text-sm text-white">
                    D
                  </label>

                </div>
                <!-- E -->
                <div class="flex items-center ">
                  <input id="char_e" name="char_e" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_e" class="ml-2 block text-sm text-white">
                    E
                  </label>

                </div>
                <!-- F -->
                <div class="flex items-center ">
                  <input id="char_f" name="char_f" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_f" class="ml-2 block text-sm text-white">
                    F
                  </label>

                </div>
                <!-- G -->
                <div class="flex items-center ">
                  <input id="char_g" name="char_g" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_g" class="ml-2 block text-sm text-white">
                    G
                  </label>

                </div>
                <!--H -->
                <div class="flex items-center ">
                  <input id="char_h" name="char_h" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_h" class="ml-2 block text-sm text-white">
                    H
                  </label>

                </div>
                <!-- I -->
                <div class="flex items-center ">
                  <input id="char_i" name="char_i" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_i" class="ml-2 block text-sm text-white">
                    I
                  </label>

                </div>
                <!-- J -->
                <div class="flex items-center ">
                  <input id="char_j" name="char_j" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_j" class="ml-2 block text-sm text-white">
                    J
                  </label>

                </div>
                <!-- K -->
                <div class="flex items-center ">
                  <input id="char_k" name="char_k" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_k" class="ml-2 block text-sm text-white">
                    K
                  </label>

                </div>
                <!-- L -->
                <div class="flex items-center ">
                  <input id="char_l" name="char_l" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_l" class="ml-2 block text-sm text-white">
                    L
                  </label>

                </div>
                <!-- M -->
                <div class="flex items-center ">
                  <input id="char_m" name="char_m" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_m" class="ml-2 block text-sm text-white">
                    M
                  </label>

                </div>
                <!-- N -->
                <div class="flex items-center ">
                  <input id="char_n" name="char_n" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_n" class="ml-2 block text-sm text-white">
                    N
                  </label>

                </div>
                <!-- O -->
                <div class="flex items-center ">
                  <input id="char_o" name="char_o" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_o" class="ml-2 block text-sm text-white">
                    O
                  </label>

                </div>
                <!-- P -->
                <div class="flex items-center ">
                  <input id="char_p" name="char_p" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_p" class="ml-2 block text-sm text-white">
                    P
                  </label>

                </div>
                <!-- Q -->
                <div class="flex items-center ">
                  <input id="char_q" name="char_q" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_q" class="ml-2 block text-sm text-white">
                    Q
                  </label>

                </div>
                <!-- R -->
                <div class="flex items-center ">
                  <input id="char_r" name="char_r" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_r" class="ml-2 block text-sm text-white">
                    R
                  </label>

                </div>
                <!-- S -->
                <div class="flex items-center ">
                  <input id="char_s" name="char_s" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_s" class="ml-2 block text-sm text-white">
                    S
                  </label>

                </div>
                <!-- T -->
                <div class="flex items-center ">
                  <input id="char_t" name="char_t" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_t" class="ml-2 block text-sm text-white">
                    T
                  </label>

                </div>
                <!-- U -->
                <div class="flex items-center ">
                  <input id="char_u" name="char_u" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_u" class="ml-2 block text-sm text-white">
                    U
                  </label>

                </div>
                <!-- V -->
                <div class="flex items-center ">
                  <input id="char_v" name="char_v" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_v" class="ml-2 block text-sm text-white">
                    V
                  </label>

                </div>
                <!-- W -->
                <div class="flex items-center ">
                  <input id="char_w" name="char_w" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_w" class="ml-2 block text-sm text-white">
                    W
                  </label>

                </div>
                <!-- X -->
                <div class="flex items-center ">
                  <input id="char_x" name="char_x" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_x" class="ml-2 block text-sm text-white">
                    X
                  </label>

                </div>
                <!-- Y -->
                <div class="flex items-center ">
                  <input id="char_y" name="char_y" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_y" class="ml-2 block text-sm text-white">
                    Y
                  </label>

                </div>
                <!-- Z -->
                <div class="flex items-center ">
                  <input id="char_z" name="char_z" type="checkbox" class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                  <label for="char_z" class="ml-2 block text-sm text-white">
                    Z
                  </label>

                </div>
              </div>






            </label>



            <!-- Start Date -->
            <label class="block mt-4">
              <span class="block text-sm font-medium text-white">Start Date</span>
              <input type="date" name="start_date" placeholder="Your Start Date in format YYYY-MM-DD e.g 2022-12-13" class="text-blue mt-1 w-full px-3 py-2 bg-white border border-white rounded-md text-sm shadow-sm
                  placeholder-blue/50 focus:outline-none focus:border-amber focus:ring-1 focus:ring-amber" required />
            </label>
            <!-- Start Time -->
            <label class="block mt-4">
              <span class="block text-sm font-medium text-white">Start Time</span>
              <input type="time" name="start_time" placeholder="Your Start Time e.g 20:00 (24 hour format)" class="text-blue mt-1 w-full px-3 py-2 bg-white border border-white rounded-md text-sm shadow-sm
                  placeholder-blue/50 focus:outline-none focus:border-amber focus:ring-1 focus:ring-amber" required />
            </label>
            <!-- End Time -->
            <label class="block mt-4">
              <span class="block text-sm font-medium text-white">End Time</span>
              <input type="time" name="end_time" placeholder="Your End Time e.g 23:00  (24 hour format)" class="text-blue mt-1 w-full px-3 py-2 bg-white border border-white rounded-md text-sm shadow-sm
                  placeholder-blue/50 focus:outline-none focus:border-amber focus:ring-1 focus:ring-amber" required />
            </label>



            <!-- Submit Button -->
            <button type="submit" name="add_assignment_btn" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-md text-blue uppercase bg-amber hover:bg-white transition-colors duration-300">
              <span class="absolute left-0 inset-y-0 flex items-center pl-3">


                <svg class="w-5 h-5 fill-current " width="24" height="24" viewBox="0 0 24 24">
                  <path d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z" />
                </svg>
              </span>
              ADD ASSIGNMENT
            </button>





            <!-- end -->
          </form>
        </div>
      </div>
    </main>

      <!-- Footer -->
      <?php require_once '../footer.php'; ?>
  </section>
</body>

</html>