<meta charset="utf-8">
<?php
if (isset($_GET['id'])){
	$conn=mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($conn,"cd-album")or die("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้);
	$sql = "delete from album where id_a='{$_GET['id']}'";
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	unlink("image/".$_GET['id'].".jpg");
    unlink("mp/".$_GET['id'].".mp3");
	
	echo "<script>";
	echo "window.location='admin.php';";
	echo "</script>";
}
?>