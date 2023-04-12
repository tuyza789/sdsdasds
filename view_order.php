
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
                    <a href="admin.php" class="logo">
                        <img src="assets/images/logogo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                            <form id="search" action="admin.php" method="post">
                                <input name="kw" type="text" placeholder="ค้นหาสินค้า" id='searchText' name="searchKeyword" onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form> </div>
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
      <div class="col-lg-12">
      
        <div class="page-content">
        <div class="main-button" > 
                            <a href="admin.php">กลับไปแก้ไขสินค้า</a>
                            
                          </div>
        <div class="gaming-library profile-library">
        <div class="col-lg-12">
        
                         
                        
            <div class="col-lg-12">
              <div class="heading-section">
              <h4><em>รายการใบสั่งซื้อ</em> </h4>
              </div>
              <div class="item">
              <ul>
                  
                  
                  <li><h4>เลขใบสั่งซื้อ</h4></li>
                  <li><h4>วันที่</h4></li>
                  
                  <li><h4>ราคารวม</h4></li>
                  <li><h4>รหัสลูกค้า</h4></li>
                  <li><h4></h4></li>
                  <li><h4></h4></li>
                  <li><h4></h4></li>
                 
                  
                </ul>
                <?php
                include("connectdb.php");
                $sql = "select  *  from  `order`  order by o_id  desc ";
                $rs = mysqli_query($conn, $sql) ;
                while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
              ?>


                <ul>
                
                
                  
                  <li><h4><?=$data['o_id'];?></h4></li>
                  <li><h4><?=$data['o_date'];?></h4></li>
                  <!--<li><h4><?=$_SESSION['itema'][$pid];?></h4></li>-->
                  <li><h4><?=number_format($data['o_total'],0);?> ฿</h4></li>
                  <li><h4><?=$data['o_member'];?></h4></li>
                  <li><div class="main-button"><a href="view_order_detail.php?a=<?=$data['o_id']?>">ดูรายละเอียด</a></div></li>
                  <li><h4><div class="main-button"><a href="profile2.php?r=<?=$data['o_member']?>">ลูกค้า</a></div></h4></li>
                 
  
                 
                </ul>
                <ul>
     
    
     <li ><h4></h4></li>
      <li ><h4></h4></li>
     <li ><h4></h4></li>
		<li ><h4></h4></li>
		<li><h4></h4></li>
    <li><div class="main-button"><a href="cle2.php?a=<?=$data['o_id'];?>">ลบ</a></div></li>
    
	<ul>
                <?php } // end foreach ?>
  
                
                       
        
       
       

                
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
