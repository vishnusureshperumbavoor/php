<?php
session_start();
if (!isset($_SESSION['regno'])) {
	//$_SESSION['msg'] = "You have to log in first";
	//header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<body>
		<?php if (isset($_SESSION['regno'])) : ?>
			<strong><?php echo $_SESSION['regno']; ?></strong>
		<?php endif ?>
</body>
