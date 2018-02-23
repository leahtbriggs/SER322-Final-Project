<?php
require('mysqli_connect.php');

$query = "SELECT Fname, Lname, username FROM CUSTOMER";

$response = mysqli_query($dbc, $query);

if($response) {

echo '<table align="left"
cellspacing="5" cellpadding="8" style="background-color:#111;color: #818181;">

<tc><td align="left"><b>Last Name</b></td>
<tc><td align="left"><b>First Name</b></td>
<tc><td align="left"><b>Username</b></td>';

  while($row = mysqli_fetch_array($response)){
    echo '<tr><td align="left">' .
    $row['Lname'] . '</td><td align="left">' .
    $row['Fname'] . '</td><td align="left">' .
    $row['username'] . '</td><td align="left">';


    echo '</tr>';
  }

  echo '</table>';

} else {
  echo "Query not issued...<br />";

  echo mysqli_error($dbc);

}

// close connection
mysqli_close($dbc);

 ?>
