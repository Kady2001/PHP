<?php
session_start();
require_once('../db/config.php');

$sql_ThuCung = "SELECT * FROM loaithucung";
$query_ThuCung = mysqli_query($connect, $sql_ThuCung);
$query_LoaiThuCung2 = mysqli_query($connect, $sql_ThuCung);
$query_LoaiThuCung3 = mysqli_query($connect, $sql_ThuCung);
$id_thucung=1;
if(isset($_GET['id_thucung'])){
    $id_thucung=$_GET['id_thucung'];
}
$sql_up ="SELECT * FROM loaithucung inner join thucung on loaithucung.id_loaithucung = thucung.id_loaithucung where id_thucung =$id_thucung group by thucung.id_loaithucung";
$query_up = mysqli_query($connect, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);

$loaithucung=$row_up['id_loaithucung'];
$sql_ThuCungLienQuan ="SELECT * FROM  thucung  where id_loaithucung=$loaithucung  limit 4" ;
$query_TClienQuan = mysqli_query($connect,$sql_ThuCungLienQuan);
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
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img style="width:40px;height:20px" src="https://cdn.pixabay.com/photo/2012/04/10/23/04/vietnam-26834_640.png" alt="">
                <div>Tiếng việt</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Tiếng việt</a></li>
                    <li><a href="#">Tiếng việt</a></li>
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
                                <li><i class="fa fa-envelope"></i> pet@mtp.com</li>
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
                        <div class="header__cart__price">item: <span>$150.00</span></div>
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
                        <!-- <h2>pho echo ten_sp</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <a href="./index.php">echo ten san pham</a>
                            <span>Vegetable’s Package</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="/webdemo/image/thucung/<?php echo $row_up['ANH_1']?>" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img stytle="width:125px;height:91px" data-imgbigurl="/webdemo/image/thucung/<?php echo $row_up['ANH_2']?>" src="/webdemo/image/thucung/<?php echo $row_up['ANH_2']?>" alt="">
                            <img stytle="width:125px;height:91px" data-imgbigurl="/webdemo/image/thucung/<?php echo $row_up['ANH_3']?>" src="/webdemo/image/thucung/<?php echo $row_up['ANH_3']?>" alt="">
                            <img stytle="width:125px;height:91px" data-imgbigurl="/webdemo/image/thucung/<?php echo $row_up['ANH_4']?>" src="/webdemo/image/thucung/<?php echo $row_up['ANH_4']?>" alt="">
                            <img stytle="width:125px;height:91px" data-imgbigurl="/webdemo/image/thucung/<?php echo $row_up['ANH_1']?>" src="/webdemo/image/thucung/<?php echo $row_up['ANH_1']?>" alt="">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $row_up['TENTHUCUNG']?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price"><?php echo $row_up['GIATHUCUNG']?>₫</div>
                        <p><?php echo $row_up['CHITIET_1']?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                            <form action="./shoping-cart.php" method="POST">
                                <div class="pro-qty">
                                    
                                    <input type="text" value="1" name="soluong_mua" id="soluong_mua">
                                   
                                    <input hidden type="text" value='<?php echo $row_up['id_thucung'] ?>' name="id_thucung" id="id_thucung">                                                       
                                </div>
                                <br>
                                <button name="btn-addCard" value="button" type="submit"  class="primary-btn">THÊM VÀO GIỎ HÀNG</button>
                                <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            </form>
                               
                            </div>
                        </div>
                      
                        
                        <ul>
                            <li><b>Số lượng</b> <span><?php echo $row_up['soluong']?></span></li>
                            <li><b>Nguồn gốc</b> <span><?php echo $row_up['CHITIET_1']?></span></li>
                            <li><b>Mô tả</b> <span><?php echo $row_up['CHITIET_2']?></span></li>
                            <li><b>Vận chuyển</b> <span>Giao hàng nhanh chóng <samp>Freeship toàn quốc</samp></span></li>
                            <li><b>Chia sẻ</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Thông tin chi tiết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Giấy chứng nhận nguồn gốc</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin thú cưng</h6>
                                    <p><?php echo $row_up['CHITIET_3'];?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Giấy chứng nhận nguồn gốc xuất xứ</h6>
                                    <img src="/webdemo/image/chungnhan/<?php echo $row_up['chungnhan']?>" alt="">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Có thể bạn quan tâm</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while($row_tclienquan = mysqli_fetch_assoc($query_TClienQuan)){?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/webdemo/image/thucung/<?php echo $row_tclienquan['ANH_1']?>">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="./shop-details.php?id_thucung=<?php echo $row_tclienquan['id_thucung']?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="./shop-details.php?id_thucung=<?php echo $row_tclienquan['id_thucung']?>"><?php echo $row_tclienquan['TENTHUCUNG']?></a></h6>
                            <h5><?php echo $row_tclienquan['GIATHUCUNG']?><span>₫</span></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img style="width:250px;height: 60px;" src="/webdemo/image/banner/logo.png" alt=""></a>
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
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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