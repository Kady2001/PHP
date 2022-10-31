<?php
require_once('../db/config.php');
session_start();
$sql_ThuCung = "SELECT * FROM thucung";
$query_ThuCung = mysqli_query($connect, $sql_ThuCung);
$query_ThuCung2 = mysqli_query($connect, $sql_ThuCung);
$query_ThuCung3 = mysqli_query($connect, $sql_ThuCung);

$sql_LoaiThuCung1 = "SELECT * FROM loaithucung inner join thucung on loaithucung.id_loaithucung = thucung.id_loaithucung";
$sql_LoaiThuCung3 = "SELECT * FROM loaithucung";
$query_LoaiThuCung = mysqli_query($connect, $sql_LoaiThuCung3);
//thu cung sale
$sql_LoaiThuCungSale1 = "SELECT * FROM loaithucung inner join thucung on loaithucung.id_loaithucung = thucung.id_loaithucung where GIAMTHUCUNGGIAM >0 and GIAMTHUCUNGGIAM<20000;";
$sql_LoaiThuCungSale2 = "SELECT * FROM loaithucung inner join thucung on loaithucung.id_loaithucung = thucung.id_loaithucung where GIAMTHUCUNGGIAM >20000 and GIAMTHUCUNGGIAM<50000;";
$sql_LoaiThuCungSale3 = "SELECT * FROM loaithucung inner join thucung on loaithucung.id_loaithucung = thucung.id_loaithucung where GIAMTHUCUNGGIAM >50000;";

$query_tcsale=mysqli_query($connect, $sql_LoaiThuCungSale1);

$query_tcsale1=mysqli_query($connect, $sql_LoaiThuCungSale2);

$query_tcsale2=mysqli_query($connect, $sql_LoaiThuCungSale3);

$sql_thucungmoi="SELECT * FROM thucung ORDER by CREATED_AT DESC LIMIT 5";
$query_thucungmoi = mysqli_query($connect, $sql_thucungmoi);

$sql_NCC = "SELECT * FROM nha_cung_cap";
$query_NCC = mysqli_query($connect, $sql_NCC);

$sql_thucungmoi1="SELECT * FROM thucung ORDER by CREATED_AT ASC LIMIT 5";
$query_thucungmoi1 = mysqli_query($connect, $sql_thucungmoi1);

$query_countThuCung = mysqli_query($connect, $sql_ThuCung);
$query_allThuCung=mysqli_query($connect, $sql_LoaiThuCung1);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTP-SHOP</title>

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
            <a href="#"><img style="width:250px;height: 60px;" src="/webdemo/image/banner/logo.png" alt=""></a>
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
                <div>Tiếng việt</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Tiếng việt</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Đăng nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.php">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <li><a href="./blog-details.php">Blog Details</a></li>
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
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> MTP-SHOP@gmail.com</li>
                                <li>Welcome To OurShop</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img style="width:40px;height:20px" src="https://cdn.pixabay.com/photo/2012/04/10/23/04/vietnam-26834_640.png" alt="">
                                <div>Tiếng việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Tiếng việt</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                           
   
                            <a href="/webdemo/dangnhap/"><i class="fa fa-user"></i> Đăng nhập</a>
                                <label for=""><?php 
                                if(isset($_SESSION['tentk'])){
                                echo $_SESSION['tentk'];
                                }else {echo 'Bạn chưa đăng nhập!';}  ?>
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
                        <a href="./index.php"><img style="width:250px;height: 60px;" src="/webdemo/image/banner/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                   <li><a href="./shop-details.php">Chi tiết sản phẩm</a></li>
                                    <li><a href="./shoping-cart.php">Giỏ hàng</a></li>
                                    <li><a href="./checkout.php">Thanh toán</a></li>
                                    <li><a href="./blog-details.php">Thông tin Blogs</a></li>
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
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
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
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Tất cả thú cưng</span>
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
                                    Tất cả danh mục
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0395489217</h5>
                                <span>Hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="https://traicholebinh.com/images/slideshow/banner.png">
        <div class="container"  style = "width:1535;height:160px">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <!-- <h2>MTP Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Thú cưng phổ biến</h4>
                            <ul>
                                <?php
                                $count = 0;
                                while($row_thucung = mysqli_fetch_assoc($query_ThuCung) ){?>
                                    <li><a href="./shop-details.php?id_thucung=<?php echo $row_thucung['id_thucung']?>"><?php echo $row_thucung['TENTHUCUNG'];?> </a></li>
                                    <?php $count++;
                                    if($count > 6)
                                    break; ?>
                                <?php } ?>
                                
                                <!-- <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                <li><a href="#">Fresh Berries</a></li>
                                <li><a href="#">Ocean Foods</a></li>
                                <li><a href="#">Butter & Eggs</a></li>
                                <li><a href="#">Fastfood</a></li>
                                <li><a href="#">Fresh Onion</a></li>
                                <li><a href="#">Papayaya & Crisps</a></li>
                                <li><a href="#">Oatmeal</a></li> -->
                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Giá</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Màu sắc</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    Trắng
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Nâu đất
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Đỏ
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Đen
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Xanh dương
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Xanh lá
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Kích cỡ phổ biến</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Lớn
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Vừa
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Nhỏ
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Cực nhỏ
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Thú cưng mới</h4>
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
                                        <span style="font-size :15px ; font-weight:normal"><?php echo $row_thucungmoi['GIATHUCUNG']?>₫</span>
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
                                        <span style="font-size :15px ; font-weight:normal"><?php echo $row_thucungmoi1['GIATHUCUNG']?>₫</span>
                                    </div>
         </a>
                                    
   
<?php }  ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                        
            <?php
                                while($row_loaitc = mysqli_fetch_assoc($query_tcsale)) {?>
       
                  
                            <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                        data-setbg="/webdemo/image/thucung/<?php echo $row_loaitc['ANH_1']?>">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="./shoping-cart.php?id_thucung=<?php echo $row_loaitc['id_thucung']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span><?php echo $row_loaitc['TENLOAI']?></span>
                                            <h6><a href="./shop-details.php?id_thucung=<?php echo $row_loaitc['id_thucung']?>"><?php echo $row_loaitc['TENTHUCUNG']?></a></h6>
                                            <div class="product__item__price"><?php echo $row_loaitc['GIAMTHUCUNGGIAM']?> <span style="font-size :15px ; font-weight:normal"><?php echo $row_loaitc['GIATHUCUNG']?>₫</span></div>
                                        </div>
                                    </div>
                                </div> 
                    <?php }  ?>
                                
                                
                                
                                
                    <?php
                                while($row_loaitc1 = mysqli_fetch_assoc($query_tcsale1)) {?>
       
                  
                            <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                        data-setbg="/webdemo/image/thucung/<?php echo $row_loaitc1['ANH_1']?>">
                                            <div class="product__discount__percent">-30%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="./shoping-cart.php?id_thucung=<?php echo $row_loaitc1['id_thucung']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span><?php echo $row_loaitc1['TENLOAI']?></span>
                                            <h6><a href="./shop-details.php?id_thucung=<?php echo $row_loaitc1['id_thucung']?>"><?php echo $row_loaitc1['TENTHUCUNG']?></a></h6>
                                            <div class="product__item__price"><?php echo $row_loaitc1['GIAMTHUCUNGGIAM']?> <span style="font-size :15px ; font-weight:normal"><?php echo $row_loaitc1['GIATHUCUNG']?>₫</span></div>
                                        </div>
                                    </div>
                                </div> 
                    <?php }  ?>

                    <?php
                                while($row_loaitc2 = mysqli_fetch_assoc($query_tcsale2)) {?>
       
                  
                            <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                        data-setbg="/webdemo/image/thucung/<?php echo $row_loaitc2['ANH_1']?>">
                                            <div class="product__discount__percent">-50%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="./shoping-cart.php?id_thucung=<?php echo $row_loaitc2['id_thucung']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span><?php echo $row_loaitc2['TENLOAI']?></span>
                                            <h6><a href="./shop-details.php?id_thucung=<?php echo $row_loaitc2['id_thucung']?>"><?php echo $row_loaitc2['TENTHUCUNG']?></a></h6>
                                            <div class="product__item__price"><?php echo $row_loaitc2['GIAMTHUCUNGGIAM']?> <span style="font-size :15px ; font-weight:normal"><?php echo $row_loaitc2['GIATHUCUNG']?>₫</span></div>
                                        </div>
                                    </div>
                                </div> 
                    <?php }  ?>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sắp xếp theo</span>
                                    <select>
                                        <option value="0">Mặc định</option>
                                        <option value="0">Mặc định</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                <?php
                                $countThuCung=0;
                                while($row_countthucung = mysqli_fetch_assoc($query_countThuCung)) {
                                        $countThuCung++;
                                 } ?>
                                    <h6><span><?php echo $countThuCung?></span> Sản phẩm được tìm thấy</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                <?php
                        while($row_allThuCung = mysqli_fetch_assoc($query_allThuCung)) {?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="/webdemo/image/thucung/<?php echo $row_allThuCung['ANH_1']?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="./shoping-cart.php?id_thucung=<?php echo $row_allThuCung['id_thucung']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="./shop-details.php?id_thucung=<?php echo $row_allThuCung['id_thucung']?>"><?php echo $row_allThuCung['TENTHUCUNG']?></a></h6>
                                    <h5 style="font-size :15px ; font-weight:normal"><?php echo $row_allThuCung['GIATHUCUNG']?>₫</h5>
                                </div>
                            </div>
                        </div>
                 <?php }  ?>
                        
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

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
                            <li>Address: Số 298 ,Cầu Diễn,Minh Khai,Bắc Từ Liêm,Hà Nội</li>
                            <li>Phone: 0395489217</li>
                            <li>Email: MTP-SHOP@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Quan tâm</h6>
                        <ul>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Về cửa hàng</a></li>
                            <li><a href="#">Mua sắm bảo mật</a></li>
                            <li><a href="#">Thông tin vận chuyển</a></li>
                            <li><a href="#">Điều khoản</a></li>
                            <li><a href="#">Địa chỉ shop</a></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Trở thành thanh viên của shop</h6>
                        <p>Điền email để nhận ưu đãi và thông tin mới nhất của shop.</p>
                        <form action="#">
                            <input type="text" placeholder="Nhập email của bạn">
                            <button type="submit" class="site-btn">Đăng ký</button>
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
                                </script> All rights reserved | Bản quyền thuộc về<i class="fa fa-heart" aria-hidden="true"></i> <a href="https://www.facebook.com/fong.IT.haui" target="_blank">MTP team</a>
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