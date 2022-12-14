<?php
session_start();
// $nametk =$_GET['name'];
require_once('../db/config.php');

$sql_LoaiThuCung = "SELECT * FROM loaithucung";
$sql_LoaiThuCung1 = "SELECT * FROM loaithucung inner join thucung on loaithucung.id_loaithucung = thucung.id_loaithucung 
GROUP by TENLOAI";
$sql_thucung2="SELECT * FROM loaithucung inner join thucung on loaithucung.id_loaithucung = thucung.id_loaithucung ";

$query_LoaiThuCung = mysqli_query($connect, $sql_LoaiThuCung);
$query_LoaiThuCung1 = mysqli_query($connect, $sql_LoaiThuCung1);
$query_LoaiThuCung2 = mysqli_query($connect, $sql_LoaiThuCung);
$query_LoaiThuCung3 = mysqli_query($connect, $sql_LoaiThuCung1);
$query_LoaiThuCung4 = mysqli_query($connect, $sql_thucung2);

$sql_thucung = "SELECT * FROM thucung";
$query_thucung = mysqli_query($connect, $sql_thucung);

$sql_thucungmoi="SELECT * FROM thucung ORDER by CREATED_AT DESC LIMIT 3";
$query_thucungmoi = mysqli_query($connect, $sql_thucungmoi);

$sql_thucungmoi1="SELECT * FROM thucung ORDER by CREATED_AT ASC LIMIT 3";
$query_thucungmoi1 = mysqli_query($connect, $sql_thucungmoi1);

$sql_thucunghot="SELECT *
FROM thucung
ORDER by soluong ASC
LIMIT 3";
$query_thucunghot = mysqli_query($connect, $sql_thucunghot);

$sql_thucunghot1="SELECT *
FROM thucung
ORDER by soluong DESC
LIMIT 3";
$query_thucunghot1 = mysqli_query($connect, $sql_thucunghot1);

$sql_thucungsale ="SELECT *
FROM thucung
ORDER by GIATHUCUNG ASC
LIMIT 3";
$query_thucungsale = mysqli_query($connect, $sql_thucungsale);

$sql_thucungsale1 ="SELECT *
FROM thucung
ORDER by GIATHUCUNG DESC
LIMIT 3";
$query_thucungsale1 = mysqli_query($connect, $sql_thucungsale1);

?>
<!DOCTYPE html>
<html lang="zxx">

<head>



    <meta charset="UTF-8">
    <meta name="description" content="MTP SHOP">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOP-MTP</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img style="width:150px;height: 60px;" src="/webdemo/image/banner/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img style="width:40px;height:20px" src="https://cdn.pixabay.com/photo/2012/04/10/23/04/vietnam-26834_640.png" alt="">
                <div>Ti???ng vi???t</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Ti???ng vi???t</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="/webdemo/dangnhap/"><i class="fa fa-user"></i> ????ng nh???p</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.php">Chi ti???t s???n ph???m</a></li>
                        <li><a href="./shoping-cart.php">Gi??? h??ng</a></li>
                        <li><a href="./checkout.php">Thanh to??n</a></li>
                        <li><a href="./blog-details.php">Th??ng tin Blogs</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> MTP-SHOP@gmail.com</li>
                <li>Welcome To OurShop</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> MTP-SHOP@gmail.com</li>
                                <li>Welcome To OurShop</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img style="width:40px;height:20px" src="https://cdn.pixabay.com/photo/2012/04/10/23/04/vietnam-26834_640.png" alt="">
                                <div>Ti???ng vi???t</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Ti???ng vi???t</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                           
   
                            <a href="/webdemo/dangnhap/"><i class="fa fa-user"></i> ????ng nh???p</a>
                                <label for=""><?php 
                                if(isset($_SESSION['tentk'])){
                                echo $_SESSION['tentk'];
                                }else {echo 'B???n ch??a ????ng nh???p!';}  ?>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img style="width:150px;height: 60px;" src="/webdemo/image/banner/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Chi ti???t s???n ph???m</a></li>
                                    <li><a href="./shoping-cart.php">Gi??? h??ng</a></li>
                                    <li><a href="./checkout.php">Thanh to??n</a></li>
                                    <li><a href="./blog-details.php">Th??ng tin Blogs</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="./shoping-cart.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">T??i kho???n: <span>500.000vn??</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>T???t c??? th?? c??ng</span>
                        </div>
                        <ul>
<?php
   
   while($row_loaithucung = mysqli_fetch_assoc($query_LoaiThuCung)) {?>
       <tr>
           
           <li><a href="#"><?php echo $row_loaithucung['TENLOAI']; ?></a></li>                             
          
       </tr>
   
<?php }  ?>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    To??n b??? th?? c??ng
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="H??y t??m th?? c??ng d??nh cho b???n ??i n??o">
                                <button type="submit" class="site-btn">T??M KI???M</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 395.489.217</h5>
                                <span>H??? tr??? 24/7</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="/webdemo/image/banner/banner.png">
                        <div class="hero__text">
                            <span style="color:pink;font-size: 20px;">Cute Pets</span>
                            <h2 style="color:white">Th?? c??ng <br />100% thu???n ch???ng</h2>
                            <p >Khuy???n m??i gi???m gi?? v?? mi???n ph?? v???n chuy???n</p>
                            <a href="shop-grid.php" class="primary-btn">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
<?php
   
   while($row_loaitc = mysqli_fetch_assoc($query_LoaiThuCung1)) {?>
       <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/webdemo/image/thucung/<?php echo $row_loaitc['ANH_1']?>">
                            <h5><a href="#"><?php echo $row_loaitc['TENLOAI']; ?></a></h5>
                            
                        </div>
       </div>
   
<?php }  ?>
                    
                    
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Th?? c??ng ti??u bi???u</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">T???t c???</li>
            <?php
   
   while($row_loaitc3 = mysqli_fetch_assoc($query_LoaiThuCung3)) {?>
       
           
       <li data-filter=".loai<?php echo $row_loaitc3['id_loaithucung']?>"><?php echo $row_loaitc3['TENLOAI']?></li>                         
          
       
   
<?php }  ?>
                            
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row featured__filter">

    <?php
   
   while($row_loaitc4 = mysqli_fetch_assoc($query_LoaiThuCung4)) {?>
       
       <div class="col-lg-3 col-md-4 col-sm-6 mix loai<?php echo $row_loaitc4['id_loaithucung']?> ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="/webdemo/image/thucung/<?php echo $row_loaitc4['ANH_1']?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="./shoping-cart.php?id_thucung=<?php echo $row_loaitc4['id_thucung']?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="./shop-details.php?id_thucung=<?php echo $row_loaitc4['id_thucung']?>"><?php echo $row_loaitc4['TENTHUCUNG']?></a></h6>
                            <h5 style="font-size :15px ; font-weight:normal"><?php echo $row_loaitc4['GIATHUCUNG']?>???</h5>
                        </div>
                    </div>
        </div>
                            
          
       
   
<?php }  ?>
                
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img style="width:500px;height:256px" src="/webdemo/image/banner/banner1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img style="width:500px;height:256px" src="/webdemo/image/banner/banner2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Th?? c??ng m???i</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">

                               
                                
                                <?php
   
   while($row_thucungmoi = mysqli_fetch_assoc($query_thucungmoi)) {?>
       
       <a href="./shop-details.php?id_thucung=<?php echo $row_thucungmoi['id_thucung']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img style="width:160px;height: 100px" src="/webdemo/image/thucung/<?php echo $row_thucungmoi['ANH_1']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $row_thucungmoi['TENTHUCUNG']?></h6>
                                        <span style="font-size :15px ; font-weight:normal"><?php echo $row_thucungmoi['GIATHUCUNG']?>???</span>
                                    </div>
         </a>
                              
          
       
   
<?php }  ?>
                
                               
                            </div>
                            
                            <div class="latest-prdouct__slider__item">
                            <?php
   
   while($row_thucungmoi1 = mysqli_fetch_assoc($query_thucungmoi1)) {?>
       
       <a href="./shop-details.php?id_thucung=<?php echo $row_thucungmoi1['id_thucung']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img style="width:160px;height: 100px" src="/webdemo/image/thucung/<?php echo $row_thucungmoi1['ANH_1']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $row_thucungmoi1['TENTHUCUNG']?></h6>
                                        <span style="font-size : 15px ; font-weight:normal"><?php echo $row_thucungmoi1['GIATHUCUNG']?>???</span>
                                    </div>
         </a>
                              
          
       
   
<?php }  ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top th?? c??ng hot</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php
   
   while($row_thucunghot = mysqli_fetch_assoc($query_thucunghot)) {?>
       
       <a href="./shop-details.php?id_thucung=<?php echo $row_thucunghot['id_thucung']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img style="width:160px;height: 100px" src="/webdemo/image/thucung/<?php echo $row_thucunghot['ANH_1']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $row_thucunghot['TENTHUCUNG']?></h6>
                                        <span style="font-size : 15px ; font-weight:normal"><?php echo $row_thucunghot['GIATHUCUNG']?>???</span>
                                    </div>
         </a>
                              
          
       
   
<?php }  ?>


                                
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
   
   while($row_thucunghot1 = mysqli_fetch_assoc($query_thucunghot1)) {?>
       
       <a href="./shop-details.php?id_thucung=<?php echo $row_thucunghot1['id_thucung']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img style="width:160px;height: 100px" src="/webdemo/image/thucung/<?php echo $row_thucunghot1['ANH_1']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $row_thucunghot1['TENTHUCUNG']?></h6>
                                        <span style="font-size: 15px ; font-weight:normal"><?php echo $row_thucunghot1['GIATHUCUNG']?>???</span>
                                    </div>
         </a>
                              
          
       
   
<?php }  ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top sales</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php
   
   while($row_thucungsale = mysqli_fetch_assoc($query_thucungsale)) {?>
       
       <a href="./shop-details.php?id_thucung=<?php echo $row_thucungsale['id_thucung']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img style="width:160px;height: 100px" src="/webdemo/image/thucung/<?php echo $row_thucungsale['ANH_1']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $row_thucungsale['TENTHUCUNG']?></h6>
                                        
                                        <span style="font-size: 15px ; font-weight:normal"><?php echo $row_thucungsale['GIATHUCUNG']?>???</span>
                                    </div>
         </a>
                              
          
       
   
<?php }  ?>
                               
                            </div>

                            <div class="latest-prdouct__slider__item">
                                                 <?php
   
   while($row_thucungsale1 = mysqli_fetch_assoc($query_thucungsale1)) {?>
       
       <a href="./shop-details.php?id_thucung=<?php echo $row_thucungsale1['id_thucung']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img style="width:160px;height: 100px" src="/webdemo/image/thucung/<?php echo $row_thucungsale1['ANH_1']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo $row_thucungsale1['TENTHUCUNG']?></h6>
                                        <span style="font-size :15px ; font-weight:normal"><?php echo $row_thucungsale1['GIATHUCUNG']?>???</span>
                                    </div>
         </a>
                              
          
       
   
<?php }  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>B??i vi???t n???i b???t</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img style="width:360px;height:255px" src="https://thucungblog.com/wp-content/uploads/2021/10/cho-akita-1.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Mar 5,2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="./blog-details.php">Ch?? Akita: Ngu???n g???c, ?????c ??i???m, t??nh c??ch, gi?? b??n</a></h5>
                                    <p>Ch?? Akita ???????c m???nh danh l?? b???o v???t t??? nhi??n, l?? ???qu???c khuy???n??? c???a Nh???t B???n. Gi???ng ch?? qu?? t???c, ho??ng gia n???i ti???ng b???i l??ng trung th??nh tuy???t ?????i..  </p>
                                    <a href="./blog-details.php" class="blog__btn">Xem th??m <span class="arrow_right"></span></a>
                                </div>
                            </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                    <div class="blog__item__pic">
                                    <img style="width:360px;height:255px" src="https://thucungblog.com/wp-content/uploads/2021/10/meo-aegean.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Mar 5,2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">M??o Aegean: Ngu???n g???c, ?????c ??i???m, t??nh c??ch</a></h5>
                                    <p>Aegean l?? m???t gi???ng m??o t??? nhi??n r???t ph??? bi???n v?? l??u ?????i nh???t t???i Hy L???p. Ch??ng ???????c y??u th??ch b???i kh??? n??ng h??a nh???p 
                                        nhanh, t??nh c??ch d??? th????ng, th??ng minh v?? lanh l???i..</p>
                                    <a href="#" class="blog__btn">Xem th??m <span class="arrow_right"></span></a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                    <div class="blog__item__pic">
                                    <img style="width:360px;height:255px" src="https://thucungblog.com/wp-content/uploads/2022/03/Cho-Dom-an-gi-Cach-cho-cho-Dom-an-khoa-hoc-nhat.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Mar 5,2022</li>
                                        <li><i class="fa fa-comment-o"></i> 10</li>
                                    </ul>
                                    <h5><a href="#">Ch?? ?????m ??n g??? C??ch cho ch?? ?????m ??n khoa h???c nh???t</a></h5>
                                    <p>Ch?? ?????m c??n ???????c g???i l?? ch?? Dalmatian, l?? gi???ng ch?? c?? m??u l??ng ?????c bi???t v?? r???t n???i ti???ng trong b??? phim 101 ch?? ch?? ?????m. 
                                        Tuy nhi??n, v?? ch??ng ch??a ph??? bi???n ??? Vi???t Nam n??n.. </p>
                                    <a href="#" class="blog__btn">Xem th??m <span class="arrow_right"></span></a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img style="width:150px;height: 60px;" src="/webdemo/image/banner/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: S??? 298 ,C???u Di???n,Minh Khai,B???c T??? Li??m,H?? N???i</li>
                            <li>Phone: 0395489217</li>
                            <li>Email: MTP-SHOP@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Quan t??m</h6>
                        <ul>
                            <li><a href="#">V??? ch??ng t??i</a></li>
                            <li><a href="#">V??? c???a h??ng</a></li>
                            <li><a href="#">Mua s???m b???o m???t</a></li>
                            <li><a href="#">Th??ng tin v???n chuy???n</a></li>
                            <li><a href="#">??i???u kho???n</a></li>
                            <li><a href="#">?????a ch??? shop</a></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Tr??? th??nh thanh vi??n c???a shop</h6>
                        <p>??i???n email ????? nh???n ??u ????i v?? th??ng tin m???i nh???t c???a shop.</p>
                        <form action="#">
                            <input type="text" placeholder="Nh???p email c???a b???n">
                            <button type="submit" class="site-btn">????ng k??</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | B???n quy???n thu???c v???<i class="fa fa-heart" aria-hidden="true"></i> <a href="https://www.facebook.com/fong.IT.haui" target="_blank">MTP team</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>