<?php require('mysqli_connect.php'); ?>

<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form class="forms" method="post" action="newuser.php">
    <div>
  	  <label>First Name</label>
  	  <input type="text" name="fname" value="<?php echo $fname; ?>">
  	</div>
    <div>
  	  <label>Last Name</label>
  	  <input type="text" name="lname" value="<?php echo $lname; ?>">
  	</div>
  	<div>
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div>
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div>
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="/index.html">Sign in</a>
  	</p>
  </form>
</body>
</html>
