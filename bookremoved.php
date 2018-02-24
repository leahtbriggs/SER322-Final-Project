<?php
require('mysqli_connect.php');

$homelink = "index.html";

$ISBN = mysqli_real_escape_string($dbc, $_POST['ISBN']);

$query = "DELETE FROM BOOK WHERE ISBN=$ISBN";
$response = mysqli_query($dbc, $query);

if($response) {
  echo 'Removal Successful.'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
} else {
  echo 'Unsuccessful Removal'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
}

mysqli_close($dbc);
 ?>
