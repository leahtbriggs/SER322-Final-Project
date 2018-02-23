<?php
require('mysqli_connect.php');

$homelink = "index.html";

$username = mysqli_real_escape_string($dbc, $_POST['username']);
$fname = mysqli_real_escape_string($dbc, $_POST['fname']);
$lname = mysqli_real_escape_string($dbc, $_POST['lname']);
$password = mysqli_real_escape_string($dbc, $_POST['password']);

$query = "INSERT INTO CUSTOMER (Fname, Lname, username, password)
          VALUES('$fname', '$lname', '$username', '$password')";
$response = mysqli_query($dbc, $query);

if($response) {
  echo 'Registration Successful.'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
} else {
  echo 'Unsuccessful Registration'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
}

mysqli_close($dbc);
 ?>
