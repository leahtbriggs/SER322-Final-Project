<?php
require('mysqli_connect.php');

$homelink = "index.html";
$user = $DBUser;
$date = date("y-m-d");

$bookISBN = mysqli_real_escape_string($dbc, $_POST['bookISBN']);
$rating = mysqli_real_escape_string($dbc, $_POST['rating']);
$reviewText = mysqli_real_escape_string($dbc, $_POST['reviewText']);

$query = "INSERT INTO BOOK_REVIEW (bookISBN, user, date, rating, reviewText)
          VALUES('$bookISBN', '$user', '$date', '$rating', '$reviewText')";
$response = mysqli_query($dbc, $query);


if($response) {
  echo 'Book review submitted.'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
} else {
  echo 'Unsuccessful submission.'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
}

mysqli_close($dbc);
 ?>
