<meta charset="utf-8">
<?php
if (isset($_GET['a'])){
	include("connectdb.php");
	$sql = "DELETE FROM `order` WHERE `order`.`o_id` = '{$_GET['a']}'";
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	$sql2 = "DELETE FROM `order_detail` WHERE `order_detail`.`o_id` = '{$_GET['a']}'";
	mysqli_query($conn, $sql2) or die ("ลบข้อมูลไม่ได้");
	
	

	echo "<script>";
	echo "alert('ลบออเดอร์สำเร็จ');";
	echo "window.location='index2.php';";
	echo "</script>";
	
	
	
}
?>