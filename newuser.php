<?php
require('mysqli_connect.php');

$homelink = "index.html";

$username = mysqli_real_escape_string($dbc, $_POST['username']);
$fname = mysqli_real_escape_string($dbc, $_POST['fname']);
$lname = mysqli_real_escape_string($dbc, $_POST['lname']);
$password = mysqli_real_escape_string($dbc, $_POST['password']);

$newUser = "CREATE USER '$username'@'localhost' IDENTIFIED BY '$password'";
$query = "INSERT INTO CUSTOMER (Fname, Lname, username, password)
          VALUES('$fname', '$lname', '$username', '$password')";
$response2 = mysqli_query($dbc, $newUser);
$response = mysqli_query($dbc, $query);


if($response && $response2) {
  echo 'Registration Successful.'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
} else {
  echo 'Unsuccessful Registration'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
}

mysqli_close($dbc);
 ?>
