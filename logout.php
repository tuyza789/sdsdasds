<meta charset="utf-8">
<?php
	session_start();
	session_destroy();
	
			echo "<script>";
			echo "window.location='memberlogin.php';";
			echo "</script>";
?>
