<?php
if (isset($_GET['id'])){
include("connectdb.php");
$sql = "select * from album where  id_a='{$_GET['id']}'";
$rs = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($rs);



}?>



<!DOCTYPE html>
<html lang="en">




<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="green-audio-player-master/dist/css/green-audio-player.css">

    <meta charset="UTF-8">
    <title>CodePen - Flat music player</title>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.7/mediaelementplayer.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                        <<div class="search-input">
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
            <div class="col-12">
                <div class="page-content">



                    <div class="row">
                        <div class="col-lg-12">





                            <div class="row">
                                <div align="center">
                                    <div class="col-lg-8">
                                        <div class="main-profile ">
                                            <div class="row">

                                                
                                                <?php
													include("connectdb.php");//ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
													$sql = "SELECT * FROM `album` where id_a='{$_GET['a']}'";
													$rs = mysqli_query($conn,$sql); 
													
													if($data = mysqli_fetch_array($rs)){ ?>
														
														
                                                
                                                <div align="center">
                                                    <div class="heading-section">
                                                        <h4><em>Alblum</em>  <?=$data['album_a'];?></h4>
                                                    </div>
                                                </div>   
                                                        
                                                    
                                                    

                                               
                                                    <div class="item">
                                                        <div class="col-lg-12 ">
                                                        
                                                            <div class="music">
                                                                <div class="music-player">
                                                                    <div class="cover">
                                                                       <!--<img src="image/100001.jpg" >-->
                                                                       
                                                                       
                                                                       <img src='image/<?=$_GET['a'];?>.jpg'>
                                                                       
                                                                       
                                                                      
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="titre">

                                                                        <h1><?=$data['name_a'];?></h1>
                                                                        
                                                                        <h3><?=$data['art_a'];?><h3>

                                                                    </div>
                                                                    
                                                                        <div class="lecteur">
                                                                            <div class="ready-player-1">
                                                                                <audio >
                                                                                    
                                                                                    <source src="mp/<?=$_GET['a'];?>.mp3" >
                                                                                </audio>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                               
                                                            
                                                             <?php	} ?>
                                                               
                                                    </div>
                                                    </div>
                                                    
                                                  
                                           





                                                <div class="row">
                                                    <div class="col-lg-12">
                                                   

                                                        <div align="center">
                                                        
                                                            <div class="main-info header-text">
                                                                <!--<span>Offline</span>-->
                                                                <!--<h4>Alan Smithee</h4>-->
                                                                <p>.</p>
                                                               
                                                                <div style='text-align:left'>
                                                                <h3>อัลบั้ม :<h3>
                                                                    <pre><p><?=$data['album_a'];?></p>  </pre> 
                                                                <h3>ชื่อวง/ชื่อนักร้อง :<h3>
                                                                    <pre><p><?=$data['name_a'];?></p>  </pre>  
                                                                
                                                                <h3>รายละเอียดสินค้า :<h3>
                                                                    <pre><p><?=$data['detail_a'];?></p>  </pre>  

                                                                
                                                                </div>
                                                                
                                                                    <div style='text-align:right'>
                                                                    <h4><?=number_format($data['price_a'],0);?> ฿ </h4> 
                                                                     </div>	

                                                                <div class="main-button">
                                                                <a href="bas.php?id=<?=$data['id_a'];?>" role="button">buy</a>
                                                                <p>&nbsp;</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                    <!-- ***** Banner Start ***** -->
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
                    <p>
                        &nbsp; <a href="#">&nbsp;</a> &nbsp;

                        <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>  Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.7/mediaelement-and-player.min.js'></script>
    <script src="assets/js/scriptse.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

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


</body>

</html>
