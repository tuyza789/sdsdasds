<?php
session_start();
	$conn=mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
    mysqli_select_db($conn,"cd-album")or die("เลือกฐานข้อมูลไม่ได้");
    mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.7/mediaelementplayer.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">


    <title>Paypleng</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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
                        <!--คลาสของแถบข้างบน-->
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logogo.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Search End ***** -->
                       

                        
                        <div class="search-input">
                            <form id="search" action="pleaselogin.php" method="post">
                                <input name="kw" type="text" placeholder="ค้นหาสินค้า" id='searchText' name="searchKeyword" onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>

                            
                            
                        </div>
                       
                        <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                        
                        <li><a href="index.php">Home</a></li>
                       
                        <li><a href="register.php">Register</a></li>
                        <li><a href="memberlogin.php" class="active">Login <img src="assets/images/profile-header.jpg" alt=""></a></li>
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

                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">

                
                                
                                


                                

                                   
                                    <h4><em>Hello</h4>
                                    <h6>Welcome to Paypleng shop</h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <!-- ***** Banner End ***** -->
                    <!-- ***** Most Popular Start ***** -->

                    
                            



                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Most Popular</em> Right Now</h4>
                                </div>

							




        
													
		  
		  
		 					 <div class="container">
							  <div class="row">
							 
                            
							  					<?php
													$conn=mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
													mysqli_select_db($conn,"cd-album")or die("เลือกฐานข้อมูลไม่ได้");
													mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
													$sql = "SELECT * FROM `album` ORDER BY `album`.`id_a` ASC";
													$rs = mysqli_query($conn,$sql); 
													
													while($data = mysqli_fetch_array($rs)){ ?>
														
														<?php
															$y = substr($data['id'], 0, 2);
														?>
		
        <?php
                                @$kw = $_POST['kw'] ;
                                @$pt = $_GET['pt'] ;
                                if (isset($_GET['pt'])) {
                                    $s = "and (type_a = '$pt')"; 
                                } else {
                                    $s = "";	
                                }
                                $sql = "select * from album where ( name_a like '%$kw%' or album_a like '%$kw%' ) $s ";
                                $rs = mysqli_query($conn, $sql) ;
                                $i = 0;
                                while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                                    $i++;
                                    if( ($i % 4) == 1) {
                                        echo "<div class='row' >";
                                    }
                            ?>
							  


						<div class="col-lg-3 col-sm-8">	
								<div class="item">
											
                                         <a href="pleaselogin.php"><img src='image/<?=$data['id_a']?>.jpg' ></a>     
                                        
                                         <h4><?=$data['album_a'];?><br>
                                            
                                            
                                            <span><?=$data['name_a'];?></span></h4>
                                            <div style='text-align:right'>
                                                <h4><?=number_format($data['price_a'],0);?> ฿ </h4> 
                                                </div>	
                                            
                                            
                                            
											<!--<h4>รหัสอัลบั้ม: <?=$data['id_a'];?></h4><br>
											<h4>ชื่อ: <?=$data['name_a'];?></h4>-->	
											<div class="main-button"style="font-size:10%" >
												<a href="pleaselogin.php" style="font-size:14px">รายละเอียด</a>
                                                <a href="pleaselogin.php" class="bi bi-cart-plus-fill" role="button"></a>
                                                
												<!--<a href="mu/play.html"style="font-size:10px"><i class="bi bi-cart-plus-fill"></i></a>-->
											</div>
																														
										
                                    		</div>

                                    
                                    
											</div>	
                                            
                                         
                                            
                                            <?php 
                                        if ( ($i % 4 ) == 0){
                                            echo "</div>";	
                                        }
                                    } // end while

                                    mysqli_close($conn);
                                ?>
                                
									
						 	
								<?php	} ?>
                               
	 </div>
						
					


                    <!-- ***** Most Popular End ***** -->
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
                    <p>
                        Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

                        <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>  Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.7/mediaelement-and-player.min.js'></script>
    <script src="./scriptse.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
