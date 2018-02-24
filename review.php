<?php require('mysqli_connect.php'); ?>

<html>
<head>
  <title>Leave a Book Review</title>
</head>
<body>
  <form method="post" action="submitreview.php">
    <div>
  	  <label>ISBN</label>
  	  <input type="text" name="bookISBN" value="<?php echo $bookISBN; ?>">
  	</div>
    <div>
  	  <label>Rating: 0-5</label>
  	  <input type="number" name="rating" min="0" max="5"
        value="<?php echo $rating; ?>">
  	</div>
    <br />
  	<div>
  	  <label>Review</label>
  	  <textarea name="reviewText" rows="4" cols="30" maxlength="300"></textarea>
  	</div>
  	<div>
  	  <button type="submit" class="btn" name="reg_user">Submit Review</button>
  	</div>
  	<p>
  		 <a href="/index.html">Cancel</a>
  	</p>
  </form>
</body>
</html>
