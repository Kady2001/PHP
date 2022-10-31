<?php
require_once('../db/config.php');

session_start();

if(isset($_SESSION['tentk'])){


if(isset($_POST['btn-addCard'])){
        $id=$_POST['id_thucung'];
        $sl=$_POST['soluong_mua'];    

        

    }else if(isset($_GET['id_thucung'])){
    $id=$_GET['id_thucung'];
    $sl=1;
                }
        else {
    $id=1;
    $sl=1;

    }
}else {
    echo "<script type='text/javascript'>confirm('Bạn cần đăng nhập để sử dụng chức năng này!');</script>";
		

    header("Refresh:0; url=/webdemo/dangnhap/");
}


$sql_ThuCung = "SELECT * FROM thucung where id_thucung=$id";
$query_ThuCung = mysqli_query($connect, $sql_ThuCung);
$row_up = mysqli_fetch_assoc($query_ThuCung);

if($sl>$row_up['soluong']){
    echo "<script type='text/javascript'>confirm('Số lượng mua vượt quá hiện có!');</script>";
		

    header("Refresh:0; url=shop-details.php");
}
$_SESSION['ten_thucung_thanhtoan']=$row_up['TENTHUCUNG'];
$_SESSION['id_thucung_ban']=$row_up['id_thucung'];
$_SESSION['soluong_thucungban']=$sl;
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
                        <!-- <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shopping Cart</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Thú cưng</th>
                                    <th>Giá bán</th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
            
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img style="width:150px; height: 100px" src="/webdemo/image/thucung/<?php echo $row_up['ANH_1']?>" alt="">
                                        <h5><?php echo $row_up['TENTHUCUNG']?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo $row_up['GIATHUCUNG']?>
                                    </td>
                                    <td class="shoping__cart__quantity" >
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                
                                                <input type="text" value="<?php echo $sl?>" id="soluong_change">
                                           </div>
                                        </div>
                                    </td>
                                    <?php $thanhtien= (int)$sl*(int)$row_up['GIATHUCUNG'];
                                    $_SESSION['thanhtien']=$thanhtien; ?>
                                    <td class="shoping__cart__total" id="thanhtien" name="thanhtien" >
                                    
                                    <?php echo  $thanhtien ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="/webdemo/font_end/index.php" class="primary-btn cart-btn">Tiếp tục mua sắm</a>
                        <button id="capnhat" onclick="capnhat()" href="#" class="primary-btn cart-btn cart-btn-right" ><span class="icon_loading"></span>
                            Cập nhật giỏ hàng</a> </button>
                    </div>
                </div> -->
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Mã giảm giá</h5>
                            <form action="#">
                                <input type="text" placeholder="Nhập mã giảm giá của bạn">
                                <button type="submit" class="site-btn">Áp dụng</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">

                        <h5>Tổng kết giỏ hàng</h5>
                       <form action="./checkout.php" method="post"> 
                        <ul>
                            <li>Thú cưng <span id="thanhtien_frist" name="thanhtien_frist"><?php echo $thanhtien ?> vnđ </span></li>
                            <li>Phí vận chuyển<span>0đ</span></li>
                            <li>Tổng cộng <span id="thanhtien_end" name="thanhtien_end"><?php echo $thanhtien ?> vnđ</span></li>
                        </ul>
                        
                        <button href="" type="submit" class="primary-btn">Thanh toán</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- Shoping Cart Section End -->

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
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Bản quyền thuộc về<i class="fa fa-heart" aria-hidden="true"></i> <a href="https://www.facebook.com/fong.IT.haui" target="_blank">MTP team</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
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

    <script language="javascript">
           function capnhat(){
            var sl = document.getElementById("soluong_change");
            
            document.getElementById('soluong_change').innerHTML=sl;

            var gia= document.getElementById("soluong_change");

            
        }
        </script>
</body>

</html>