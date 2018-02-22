<?php
require('mysqli_connect.php');
$author = mysqli_real_escape_string($dbc, $_POST['author']);
$query = "SELECT * FROM BOOK WHERE author LIKE '%$author%'";

$response = mysqli_query($dbc, $query);
$homelink = "index.html";
if($response) {

echo '<table align="left"
cellspacing="5" cellpadding="8" style="background-color:blue;color:white">

<tc><td align="left"><b>ISBN</b></td>
<tc><td align="left"><b>Title</b></td>
<tc><td align="left"><b>Author</b></td>
<tc><td align="left"><b>Pages</b></td>
<tc><td align="left"><b>Genre</b></td>';

  while($row = mysqli_fetch_array($response)){
    echo '<tr><td align="left">' .
    $row['ISBN'] . '</td><td align="left">' .
    $row['title'] . '</td><td align="left">' .
    $row['author'] . '</td><td align="left">' .
    $row['pages'] . '</td><td align="left">' .
    $row['genre'] . '</td><td align="left">';


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
