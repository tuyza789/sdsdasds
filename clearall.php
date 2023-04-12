<?php
	@session_start();
	unset($_SESSION['ida']);
	unset($_SESSION['namea']);
	unset($_SESSION['pricea']);
	unset($_SESSION['detaila']);
	unset($_SESSION['picturea']);
	unset($_SESSION['itema']);

	

	echo "กำลังกลับหน้าหลัก กรุณารอสักครู่....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=index2.php\">";
	//header("Location: index.php");

?>
<meta charset="utf-8">