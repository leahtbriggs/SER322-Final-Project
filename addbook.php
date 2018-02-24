<?php require('mysqli_connect.php'); ?>

<html>
<head>
  <title>Add Book</title>
</head>
<body>
  <form method="post" action="bookadded.php">
    <div>
  	  <label>ISBN</label>
  	  <input type="text" name="ISBN" value="<?php echo $ISBN; ?>">
  	</div>
    <div>
  	  <label>Title:</label>
  	  <input type="text" name="title" value="<?php echo $title; ?>">
  	</div>
  	<div>
  	  <label>Author</label>
  	  <input type="text" name="author" value="<?php echo $author; ?>">
  	</div>
  	<div>
  	  <label>Pages</label>
  	  <input type="text" name="pages" value="<?php echo $pages; ?>">
  	</div>
    <div>
  	  <label>Genre</label>
  	  <input type="text" name="genre" value="<?php echo $genre; ?>">
  	</div>
    <div>
  	  <label>Publisher ID</label>
  	  <input type="text" name="pubID" value="<?php echo $pubID; ?>">
  	</div>
  	<div>
  	  <button type="submit" class="btn" name="reg_user">Add Book</button>
  	</div>
  	<p>
  		 <a href="/index.html">Cancel</a>
  	</p>
  </form>
</body>
</html>
