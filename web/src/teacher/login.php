<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>KINDERCARE | Teacher's Login</title>
    <!-- CSS -->
    <link href="../../css/kindercare.css" rel="stylesheet" />

    <!-- JS -->
    <script src="../kindercare.js"></script>
  </head>

  <body class="bg-blue font-spartan">
    <section class="flex flex-col justify-between h-screen space-y-10">
      <!-- Main Content -->
      <main class="mx-auto sm:max-w-4xl max-w-4xl px-4 sm:mt-5 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-14">
        <div class="sm:text-center text-center items-center transition-colors duration-500 text-white hover:text-amber">
          <!-- Center Logo -->
          <a href="../index.php" title="The KinderCare"
            class="hover:cursor-pointer flex justify-center items-center mt-6 mb-4 ">
            <svg class="w-24 h-24 fill-current m-auto" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z" />
            </svg>
          </a>


          <h2 class="text-3xl tracking-tight mt-1 font-extrabold sm:text-3xl md:text-4xl mx-auto">
            Welcome Back to the KinderCare Learning Platform (KLP)
          </h2>
          <p class="text-xs mt-6 text-amber hover:text-white tracking-tight font-extrabold">
            Login to continue.
          </p>


        </div>

        <!-- form div -->
        <div class="mt-10 justify-center items-center">
          <div class="max-w-xl mx-auto">
            <form class="space-y-6 ">
              <!-- TeacherID -->
              <label class="block mt-4">
                <span class="block text-sm font-medium text-white">TeacherID</span>
                <input type="text" name="teacherid"
                  placeholder="Your TeacherID e.g TR234568KLP, TR2442358KLP,TR288568KLP" class="text-blue mt-1 w-full px-3 py-2 bg-white border border-white rounded-md text-sm shadow-sm
                  placeholder-blue/50 focus:outline-none focus:border-amber focus:ring-1 focus:ring-amber" required />
              </label>
              
              <!-- Password -->
              <label class="block mt-4">
                <span class="block text-sm font-medium text-white">Password</span>
                <input type="password" name="password" id="password"
                  placeholder="Your Password - Keep it Short, Secure and Secret" class="text-blue mt-1 w-full px-3 py-2 bg-white border border-white rounded-md text-sm shadow-sm
                  placeholder-blue/50 focus:outline-none focus:border-amber focus:ring-1 focus:ring-amber" required />
              </label>


              <!-- show -->
              <div class="flex items-center">
                <input id="show-me" name="show-me" type="checkbox" onclick="togglePassword()"
                  class="h-4 w-4 text-amber focus:ring-amber border-amber rounded" />
                <label for="show-me" class="ml-2 block text-sm text-white">
                  Show Password
                </label>
              </div>


              

              <!-- Submit Button -->
              <button type="submit" name="login_btn"
                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-md text-blue uppercase bg-amber hover:bg-white transition-colors duration-300">
                <span class="absolute left-0 inset-y-0 flex items-center pl-3">


                  <svg class="w-5 h-5 fill-current " width="24" height="24" viewBox="0 0 24 24">
                    <path
                      d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z" />
                  </svg>
                </span>
                LOGIN
              </button>

              <!-- Log in -->
              <p class="tracking-tight text-center text-sm text-amber sm:mt-2 sm:text-sm md:mt-2 p-4 lg:mx-0 ">
                Have no account?
                <a  href="register.php"
                  class="font-extrabold text-white hover:cursor-pointer ml-2 underline hover:text-amber hover:underline duration-300"
                  title="Create your Account">
                  Create Account Instead.
                </a >
              </p>



              <!-- end -->
            </form>
          </div>
        </div>
      </main>

      <!-- Footer -->
      <footer
        class="mt-10 w-full bg-blue max-w-container mx-auto py-6 text-center space-y-2 items-center justify-center text-sm ">
        <p class="text-amber hover:text-white font-bold">
          &copy; 2022 - KinderCare Learning Platform | All rights Reserved
        </p>

      </footer>
    </section>
  </body>

</html>