<?php


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

// get $teacher_id from the session
$teacher_id = $_SESSION['teacher_id'];

// use the kindercare db
if ($conn->select_db('kindercare') === TRUE) {

  // get all pupils in the assignments table where teacher_id = $teacher_id
  $sql = "SELECT * FROM kindercare.assignments WHERE assignments.teacher_id = '$teacher_id' ORDER BY assignments.assignment_id DESC;";

  // get the result
  $result = $conn->query($sql);

  // row count
  $row_count = $result->num_rows;

  // if there are pupils print available else register them
  if ($row_count > 0) {

    //  table-top part of the table
    echo '
      <div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-blue/40 sm:rounded-lg">
                <table class="min-w-full divide-y divide-blue text-blue">
                  <!-- Heads -->
                  <thead class="bg-blue">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Assignment ID
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Characters
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        No. of Characters
                      </th>
                       <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                        Start Date
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                        Start Time
                      </th>
                      <th scope="col" class="px-6 py-3  text-xs font-medium text-white text-left uppercase
                          tracking-wider">
                       End Time
                      </th>
                 </tr>
                  </thead>

                  <!-- Table Body -->
                  <tbody class="bg-white divide-y divide-blue/40">
                    ';

    // table rows
    // output data of each row using a foreach
    foreach ($result as $row) {
      // assignment_id
      $db_assignment_id = $row['assignment_id'];
      // get the characters
      $db_characters = $row['characters'];
      // get the character_no
      $db_character_no = $row['character_no'];
      // get the start_datex
      $db_start_date = $row['start_datex'];
      // get the start_time
      $db_start_time = $row['start_time'];

      // get the end_time
      $db_end_time = $row['end_time'];



      // table rows
      echo '
       <tr>
                      <td class="px-6 py-4">
                        <p class="text-sm font-bold text-left text-blue">
                          ' . $db_assignment_id . '
                        </p>
                      </td>
                      <td class="px-6 py-4">
                        <p class="text-sm text-blue  tracking-wider">
                           ' . $db_characters . '
                        </p>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-sm leading-5  rounded-full ">
                          ' . $db_character_no . '
                        </span>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap  font-bold text-sm ">
                        ' . $db_start_date . '
                      </td>
                       <td class="px-6 py-4">
                        <p class="text-sm text-green tracking-wider">
                           ' . $db_start_time . '
                        </p>
                      </td>


                       <td class="px-6 py-4">
                        <p class="text-sm text-red tracking-wider">
                           ' . $db_end_time . '
                        </p>
                      </td>
                      
                      
                      
                      ';

      // close row
      echo '</tr>';
    }


    // bottom part of the table
    echo '</tbody>
</table>
</div>
</div>
</div>
</div>
';
  } else {
    //  No registered pupils
    echo '<div class="flex items-center justify-center text-xl font-bold text-center text-red underline items-center space-x-2">

    <svg class="w-10 h-10 fill-current " height="24" viewBox="0 0 24 24" width="24">
        <path d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z"/>
    </svg>
    <h1 class="text-xl font-bold text-center text-red underline">No Assignments Uploaded Yet</h1>
</div>';
  }

  // close connection
  $conn->close();
} else {
  echo "Error: " . $conn->error;
}
