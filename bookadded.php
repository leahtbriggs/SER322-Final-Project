<?php
require('mysqli_connect.php');

$homelink = "index.html";

$ISBN = mysqli_real_escape_string($dbc, $_POST['ISBN']);
$title = mysqli_real_escape_string($dbc, $_POST['title']);
$author = mysqli_real_escape_string($dbc, $_POST['author']);
$pages = mysqli_real_escape_string($dbc, $_POST['pages']);
$genre = mysqli_real_escape_string($dbc, $_POST['genre']);
$pubID = mysqli_real_escape_string($dbc, $_POST['pubID']);


$query = "INSERT INTO BOOK (ISBN, title, author, pages, genre, pubID)
          VALUES('$ISBN', '$title', '$author', '$pages', '$genre', '$pubID')";
$response = mysqli_query($dbc, $query);


if($response) {
  echo 'Book has been added.'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
} else {
  echo 'Unsuccessful addition.'; echo "<br />";
  echo "<a href='$homelink'>Return Home</a>";
}

mysqli_close($dbc);
 ?>
