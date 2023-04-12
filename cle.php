<meta charset="utf-8">
<?php
	@session_start();
	$id2 = $_GET['id'] ;
	unset($_SESSION['ida'][$id2]) ;
	unset($_SESSION['namea'][$id2]) ;
	unset($_SESSION['pricea'][$id2]) ;
	unset($_SESSION['detaila'][$id2]) ;
	unset($_SESSION['picturea'][$id2]) ;
	unset($_SESSION['itema'][$id2]) ;
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=bas.php\">";

?>