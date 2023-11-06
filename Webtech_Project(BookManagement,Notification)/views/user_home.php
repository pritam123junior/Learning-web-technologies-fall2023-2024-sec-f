<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>
<center>
	<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<a href="profile.php">Profile</a>
	<br />
	<a href="change_password.php">Change Password</a>
	<br />
	<br />
	<a href="ViewBook.php">Books</a>
	<br />
	<a href="Notification.php">Logout</a>
	<br/>
	<a href="../controller/logout.php">Logout</a>
</center>