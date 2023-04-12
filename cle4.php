<meta charset="utf-8">
<?php
if (isset($_GET['e'])){
	include("connectdb.php");
	$sql = "DELETE FROM `customer` WHERE `customer`.`cus_id` = '{$_GET['e']}'";
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	
	
	

	echo "<script>";
	echo "window.location='view_member.php';";
	echo "</script>";
	
	
	
}
?>

