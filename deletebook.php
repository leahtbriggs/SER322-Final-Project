<?php require('mysqli_connect.php'); ?>

<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form class="forms" method="post" action="bookremoved.php">
    <div>
  	  <label>ISBN</label>
  	  <input type="text" name="ISBN" value="<?php echo $ISBN; ?>">
  	</div>
  	<div>
  	  <button type="submit" class="btn" name="reg_user">Remove Book</button>
  	</div>
  	<p>
  		 <a href="/index.html">Cancel</a>
  	</p>
  </form>
</body>
</html>
