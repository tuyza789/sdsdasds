<?php
error_reporting(E_NOTICE);

	@session_start();
	include("connectdb.php");
	$sql = "select * from album where id_a='{$_GET['id']}' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
	$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['ida'][$id] = $data['id_a'];
		$_SESSION['namea'][$id] = $data['album_a'];
		$_SESSION['pricea'][$id] = $data['price_a'];
		$_SESSION['detaila'][$id] = $data['detail_a'];
		$_SESSION['picturea'][$id] = $data['id_a'];
		@$_SESSION['itema'][$id]++;
    
	}
?>

<!DOCTYPE html>
<html lang="en">


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Paypleng</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
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
                    <a href="index2.php" class="logo">
                        <img src="assets/images/logogo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                            <form id="search" action="index2.php" method="post">
                                <input name="kw" type="text" placeholder="ค้นหาสินค้า" id='searchText' name="searchKeyword" onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>

                            
                            
                        </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                   
                    
                    <li><a href="index2.php">Home</a></li>
                        <li><a href="order.php?m=<?=$_SESSION['ses_id']?>">Order</a></li>
                        
                        <li><a href="bas.php">Basket</a></li>
                        <li><a href="profile.php?m=<?=$_SESSION['ses_id']?>" class="active">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
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
      <div class="col-lg-12">
      
        <div class="page-content">
        <div class="main-button"> 
                            <a href="index2.php">กลับไปเลือกสินค้า</a>
                            
                          </div>
        <div class="gaming-library profile-library">
        <div class="col-lg-12">
        
                         
                        
            <div class="col-lg-12">
              <div class="heading-section">
              <h4><em>Your</em> Order</h4>
              </div>
              <div class="item">
              <ul>
                  
                  
                  <li><h4>รูปสินค้า</h4></li>
                  <li><h4>ชื่อสินค้า</h4></li>
                  <li><h4>ราคา/ชิ้น</h4></li>
                  <li><h4>จำนวน</h4></li>
                  <li><h4>รวม</h4></li>
                  <li><h4></h4></li>
                  
                </ul>
                <?php
                    if(!empty($_SESSION['ida'])) {
                        foreach($_SESSION['ida'] as $pid) {
                            @$i++;
                            $sum[$pid] = $_SESSION['pricea'][$pid] * $_SESSION['itema'][$pid] ;
                            @$total += $sum[$pid] ;
                    ?>

                <ul>
                
                
                  <li><a href="pro.php?a=<?=$pid;?>"><img src="image/<?=$_SESSION['picturea'][$pid];?>.jpg" class="templatemo-item"></a></li>
                  <li><h4><?=$_SESSION['namea'][$pid];?></h4></li>
                  <li><h4><?=number_format($_SESSION['pricea'][$pid],0);?> ฿</h4></li>
                  <li><h4><?=$_SESSION['itema'][$pid];?></h4></li>
                  <li><h4><?=number_format($sum[$pid],0);?> ฿</h4></li>
                  <li><div class="main-button"><a href="cle.php?id=<?=$pid;?>">ลบ</a></div></li>
                </ul><br>
                <?php } // end foreach ?>
  
     <ul>
     <li ><h4></h4></li>
     <li ><h4></h4></li>
     <li ><h4></h4></li>
		<li ><h4>รวมทั้งสิ้น</h4></li>
		<li><h4><?=number_format($total,0);?> ฿</h4></li>
		<li><h4>บาท</h4></li>
	<ul><
        <?php 
        } else {
        ?>
            <tr>
                <td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
            </tr>
        <?php } // end if ?> 
              </div>
              <div class="col-lg-12">
                          <div class="main-button">
                            <a href="clearall.php">ลบสินค้าทั้งหมด</a>
                            <a href="rec.php">สั่งซื้อสินค้า</a>
                          </div>
                        </div>
                       
        
       
       

                
              </div>
             
          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span>Offline</span>
                      
                      <p>You Haven't Gone Live yet. Go Live By Touching The Button Below.</p>
                     
                    </div>
                  </div>
                 
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          
             
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>  Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>
