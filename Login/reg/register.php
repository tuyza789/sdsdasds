<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendot/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendot/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendot/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendot/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="cst/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    <form class="form-horizontal"  method="post" action="" enctype="multipart/form-data">
                    <fieldset>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="id" id="cus_id" name="cus_id" required="">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="name" id="cus_name" name="cus_name" required="">
                            
                        </div>
                        <div class="input-group">
                          
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="phone" id="cus_phone" name="cus_phone" required="">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="adress"  id="cus_adress" name="cus_adress" required="">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="username" id="cus_user" name="cus_user" required="">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="password" id="cus_pwd" name="cus_pwd" required="">
                        </div>
                        <div class="p-t-10">
                            <button  id="Submit" name="Submit" class="btn btn--pill btn--green" type="Submit">Submit</button>
                        </div>
                        </fieldset>
                    </form>
                    <?php
	if (isset($_POST['Submit'])){
	
    $conn=mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
    mysqli_select_db($conn,"cd-album")or die("เลือกฐานข้อมูลไม่ได้");
    mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
    
		$sql = "INSERT INTO costomer (cus_id, cus_name, cus_phone, cus_adress, cus_user, cus_pwd) VALUES ('{$_POST['cus_id']}', '{$_POST['cus_name']}', 
        '{$_POST['cus_phone']}', '{$_POST['cus_adress']}', '{$_POST['cus_user']}', '{$_POST['cus_pwd']}');";
		mysqli_query($conn, $sql) or die ("insert ไม่ได้");
	

		echo "<script>";
		echo "alert('บันทึกข้อมูลสำเร็จ');";
		echo "</script>";
		
	}
?>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendot/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendot/select2/select2.min.js"></script>
    <script src="vendot/datepicker/moment.min.js"></script>
    <script src="vendot/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="jt/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->