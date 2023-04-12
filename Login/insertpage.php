<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>InsertPage</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"

<body>

<form class="form-horizontal"   method="post" action="" enctype="multipart/form-data"> 
<fieldset>

<!-- Form Name -->
<legend>ฟอร์มเพิ่มข้อมูลสินค้า</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="id_a">รหัสสินค้า</label>  
  <div class="col-md-4">
  <input id="id_a" name="id_a" type="text"  class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name_a">ชื่อสินค้า</label>  
  <div class="col-md-4">
  <input id="name_a" name="name_a" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="price_a">ราคาสินค้า</label>
  <div class="col-md-4">                     
    <input id="price_a" name="price_a" type="text" class="form-control input-md" required="">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="detail_a">รายละเอียดสินค้า</label>
  <div class="col-md-4">                     
  <input id="detail_a" name="detail_a" type="text" class="form-control input-md" required="">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="type_a">ประเภท</label>
  <div class="col-md-4">                     
    <input id="type_a" name="type_a" type="text" class="form-control input-md" required="">
  </div>
</div>



<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="img">รูปสินค้า</label>
  <div class="col-md-4">
    <input id="img" name="img" class="input-file" type="file">
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="audio">ไฟล์เพลงสินค้า</label>
  <div class="col-md-4">
    <input id="audio" name="audio" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class=" btn btn-block mybtn btn-primary tx-tfm" >บันทึกข้อมูล</button>
  </div>
</div>

</fieldset>
</form>

<?php
	if (isset($_POST['Submit'])){
	
    $conn=mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
    mysqli_select_db($conn,"cd-album")or die("เลือกฐานข้อมูลไม่ได้");
    mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
    
		$sql = "INSERT INTO album (id_a, name_a, price_a, detail_a, type_a) VALUES ('{$_POST['id_a']}', '{$_POST['name_a']}', '{$_POST['price_a']}', '{$_POST['detail_a']}', '{$_POST['type_a']}');";
		mysqli_query($conn, $sql) or die ("insert ไม่ได้");
		
		@copy($_FILES['img']['tmp_name'],"../image/".$_POST['id_a'].".jpg");
		@copy($_FILES['audio']['tmp_name'],"../mp3/mp3/".$_POST['id_a'].".mp3");

		echo "<script>";
		echo "alert('บันทึกข้อมูลสำเร็จ');";
		echo "</script>";
		
	}
?>


</body>
</html>