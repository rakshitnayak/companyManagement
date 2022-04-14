<?php
include 'config.php';
if (isset($_POST['displaySend'])) {
  $table = '
<table class="table table-secondary">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Website</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col">Industry</th>
      <th scope="col">Actions</th>
      

    </tr>
  </thead>';

  $sql2 = "SELECT * FROM company";
  $result = mysqli_query($conn, $sql2);
  $number = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    $c_id = $row['c_id'];
    $c_name = $row['c_name'];
    $c_website = $row['c_website'];
    $c_ph = $row['c_ph'];
    $c_address = $row['c_address'];
    $c_city = $row['c_city'];
    $c_state = $row['c_state'];
    $c_country = $row['c_country'];
    $c_industry = $row['c_industry'];

    $table .= '<tr>
      <th scope="row">' . $number . '</th>
      <td>' . $c_name . '</td>
      <td>' . $c_website . '</td>
      <td>' . $c_ph . '</td>
      <td>' . $c_address . '</td>
      <td>' . $c_city . '</td>
      <td>' . $c_state . '</td>
      <td>' . $c_country . '</td>
      <td>' . $c_industry . '</td>
     <td>
      <button class="badge bg-dark mb-2" onclick="getDetails(' . $c_id . ')">Edit</button>
      <button class="badge bg-danger" onclick="deleteUser(' . $c_id . ')">Delete</button>
     </td>

    </tr>';
    $number++;
  }

  $table .= '</table>';
  echo $table;
}
