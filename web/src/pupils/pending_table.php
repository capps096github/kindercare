<?php


// read the requests file
require 'read_requests.php';

// sql
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// use the kindercare db
if ($conn->select_db('kindercare') === TRUE) {

  // get all pupils in the registeredpupils' table where isrequest =  "Yes"
  $sql = "SELECT * FROM  kindercare.registeredpupils WHERE isrequest = 'Yes';";

  // get the result
  $result = $conn->query($sql);


  // row count
  $row_count = $result->num_rows;

  // if there are pupils print available else register them
  if ($row_count > 0) {

    //  table-top part of the table
    echo '<div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-darkred/40 sm:rounded-lg">
                <table class="min-w-full divide-y divide-darkred text-darkred">

                    <!-- Heads -->
                   <thead class="bg-darkred">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        User Code
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        First Name
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Last Name
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Phone Number
                      </th>

                      <th scope="col" class="px-6 py-3  text-xs font-medium text-white uppercase text-center
                          tracking-wider">
                        Change Status
                      </th>

                    </tr>
                  </thead>

                  <!-- Table Body -->
                  <tbody class="bg-white divide-y divide-darkred/20">
                   ';

    // table rows
    // output data of each row using a foreach
    foreach ($result as $row) {
      // get the user code
      $db_usercode = $row['user_code'];
      // get the first name
      $db_firstname = $row['fname'];
      // get the last name
      $db_lastname = $row['lname'];
      // get the phone number
      $db_phonenumber = $row['phone_no'];

      // usercode parameter to be passed to the url and accessed via get method
      $user_code =  "user_code=$db_usercode";



      // table rows
      echo '<tr>
                      <td class="px-6 py-4">
                        <p class="text-sm font-bold text-left ">
                        ' . $db_usercode . '
                        </p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="text-sm  tracking-wider">
                           ' . $db_firstname . '
                        </p>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-sm leading-5  rounded-full ">
                        ' . $db_lastname . '
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm ">
                      ' . $db_phonenumber . '
                      </td>';


      // change status button
      echo '
<td class="px-6 py-4 text-green whitespace-nowrap text-sm ">
    <div class="justify-center flex items-center">
        <a class="mx-auto justify-center text-center w-full py-2 px-4 border border-transparent text-sm rounded-md text-green  bg-green/20 hover:bg-green hover:text-white transition-colors duration-300"
           href="activate_pupil_request.php?' . $user_code . '">
            Activate
        </a>
    </div>
</td>';


      // close row
      echo '</tr>';
    }


    // bottom part of the table
    echo '</tbody>
</table>
</div>
</div>
</div>
</div>';
  } else {
    //  No registered pupils
    echo '<div class="flex items-center justify-center text-xl font-bold text-center text-green underline items-center space-x-2">

    <svg class="w-10 h-10 fill-current " height="24" viewBox="0 0 24 24" width="24">
        <path d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z"/>
    </svg>
    <h1 class="text-xl font-bold text-center text-green underline">No Pending Requests</h1>
</div>';
  }


  // close connection
  $conn->close();
} else {
  echo "Error: " . $conn->error;
}
