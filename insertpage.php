<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags-->
  <meta charset="UTF-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
 <!-- Title Page-->
<title>InsertPage</title>
 <!-- Icons font CSS-->
 <link href="log/vendot/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="log/vendot/font-awesome-10.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="log/vendot/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="log/vendot/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="log/cst/main.css" rel="stylesheet" media="all">
    <link href="log/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="green-audio-player-master/dist/css/green-audio-player.css">

    <meta charset="UTF-10">
    <title>CodePen - Flat music player</title>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/10.0.3/css/font-awesome.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/10.2.7/mediaelementplayer.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>


    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="green-audio-player-master/dist/css/main.min.css">
    <script src="green-audio-player-master/dist/js/app.js"></script>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/src/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />



    <!--

    TemplateMo 579 Cyborg Gaming

    https://templatemo.com/tm-579-cyborg-gaming

    -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-10.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/css/util.css">
	<link rel="stylesheet" type="text/css" href="log/css/main.css">
<!--===============================================================================================-->

</head>


<body>


<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="admin.php" class="logo">
                            <img src="assets/images/logogo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Search End ***** -->
                        <div class="search-input">
                            <form id="search" action="admin.php" method="post">
                                <input name="kw" type="text" placeholder="ค้นหาสินค้า" id='searchText' name="searchKeyword" onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
</div>
                        <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                           <li><a href="view_member.php">สมาชิก</a></li>
                        <li><a href="insertpage.php">เพิ่มสินค้า</a></li>
                          
                          <li><a href="view_order.php" class="active">ดูออเดอร์<img src="assets/images/profile-header.jpg" alt=""></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>

		</header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">



	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
<form class="form-horizontal"   method="post" action="" enctype="multipart/form-data"> 
<fieldset>

<!-- Form Name -->
<legend>ฟอร์มเพิ่มข้อมูลสินค้า</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-10 control-label" for="id_a">รหัสสินค้า</label>  
  <div class="col-md-10">
  <input id="id_a" name="id_a" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-10 control-label" for="name_a">ชื่อสินค้า</label>  
  <div class="col-md-10">
  <input id="name_a" name="name_a" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-10 control-label" for="art_a">ชื่อเพลงตัวอย่าง</label>  
  <div class="col-md-10">
  <input id="art_a" name="art_a" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-10 control-label" for="price_a">ราคาสินค้า</label>
  <div class="col-md-10">                     
    <input id="price_a" name="price_a" type="text" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-10 control-label" for="album_a">ชื่ออัลบัม</label>  
  <div class="col-md-10">
  <input id="album_a" name="album_a" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-10 control-label" for="detail_a">รายละเอียดสินค้า</label>
  <div class="col-md-10">                     
  <input id="detail_a" name="detail_a" type="text" class="form-control input-md" required="">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-10 control-label" for="type_a">ประเภท</label>
  <div class="col-md-10">                     
    <input id="type_a" name="type_a" type="text" class="form-control input-md" required="">
  </div>
</div>



<!-- File Button --> 
<div class="form-group">
  <label class="col-md-10 control-label" for="img">รูปสินค้า</label>
  <div class="col-md-10">
    <input id="img" name="img" class="input-file" type="file">
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-10 control-label" for="audio">ไฟล์เพลงสินค้า</label>
  <div class="col-md-10">
    <input id="audio" name="audio" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-10 control-label" for="Submit"></label>
  <div class="col-md-10">
    <button id="Submit" name="Submit" class=" btn btn-block mybtn btn-primary tx-tfm" >บันทึกข้อมูล</button>
  </div>
</div>

</fieldset>
</form>

<?php
	if (isset($_POST['Submit'])){
	
    include("connectdb.php");
    
		$sql = " INSERT INTO `album` (`id_a`, `name_a`, `art_a`, `price_a`, `album_a`, `detail_a`, `type_a`) VALUES ('{$_POST['id_a']}', '{$_POST['name_a']}', '{$_POST['art_a']}', 
    '{$_POST['price_a']}', '{$_POST['album_a']}', '{$_POST['detail_a']}', '{$_POST['type_a']}');";
    
		mysqli_query($conn, $sql) or die ("insert ไม่ได้");
		
		@copy($_FILES['img']['tmp_name'],"image/".$_POST['id_a'].".jpg");
		@copy($_FILES['audio']['tmp_name'],"mp/".$_POST['id_a'].".mp3");

		echo "<script>";
		echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "window.location='admin.php';";
		echo "</script>";
		
	}
?>

<div class="row">
                                                    <div class="col-lg-12">
                                                   

                                                        <div align="center">
                                                        
                                                            <div class="main-info header-text">
                                                                <!--<span>Offline</span>-->
                                                                <!--<h4>Alan Smithee</h4>-->
                                                                <p>.</p>
                                                               
                                                               
                                                                
                                                                   

                                                                <div>
                                                               

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                   
                    <img src="assets/images/ki.gif"  alt="">

                        <br>&nbsp; <a href="https://templatemo.com" target="_blank" title="free CSS templates"></a> <a href="https://themewagon.com" target="_blank"></a>
                    </p>
                    <p>
                   
                   <img src="assets/images/ki.gif"  alt="">

                       <br>&nbsp; <a href="https://templatemo.com" target="_blank" title="free CSS templates"></a> <a href="https://themewagon.com" target="_blank"></a>
                   </p>
                   <p>
                   
                   <img src="assets/images/ki.gif"  alt="">

                       <br>&nbsp; <a href="https://templatemo.com" target="_blank" title="free CSS templates"></a> <a href="https://themewagon.com" target="_blank"></a>
                   </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->

    <script src="cd-shop/log/vendot/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="cd-shop/log/vendot/select2/select2.min.js"></script>
    <script src="cd-shop/log/vendot/datepicker/moment.min.js"></script>
    <script src="cd-shop/log/vendot/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="cd-shop/log/jt/global.js"></script>



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/10.2.7/mediaelement-and-player.min.js'></script>
    <script src="log/assets/js/scriptse.js"></script>
    <script src="log/vendors/jquery/jquery.min.js"></script>
    <script src="log/vendors/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/scriptse.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

    <script src="green-audio-player-master/dist/js/green-audio-player.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new GreenAudioPlayer('.ready-player-1', { showTooltips: true, showDownloadButton: false, enableKeystrokes: true });
        });
    </script>
	
<!--===============================================================================================-->	
	<script src="cd-shop/log/vendors/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="cd-shop/log/vendors/bootstrap/js/popper.js"></script>
	<script src="cd-shop/log/vendors/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="cd-shop/log/vendors/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="cd-shop/log/vendors/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="cd-shop/log/js/main.js"></script>
</body>
</html>