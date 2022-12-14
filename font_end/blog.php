<?php
require_once('../db/config.php');
session_start();
$sql_LoaiThuCung = "SELECT * FROM loaithucung";
$query_LoaiThuCung = mysqli_query($connect, $sql_LoaiThuCung);
$query_LoaiThuCung2 = mysqli_query($connect, $sql_LoaiThuCung);
$query_LoaiThuCung3 = mysqli_query($connect, $sql_LoaiThuCung);

$sql_NCC = "SELECT * FROM nha_cung_cap";
$query_NCC = mysqli_query($connect, $sql_NCC);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MTP SHOP</title>

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
            <a href="#"><img src="img/logo.png" alt=""></a>
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
                <a href="#"><i class="fa fa-user"></i> ????ng nh???p</a>
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
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                   <li><a href="./shop-details.php">Chi ti???t s???n ph???m</a></li>
                                    <li><a href="./shoping-cart.php">Gi??? h??ng</a></li>
                                    <li><a href="./checkout.php">Thanh to??n</a></li>
                                    <li><a href="./blog-details.php">Th??ng tin Blogs</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="./blog.php">Blog</a></li>
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
                                    T???t c??? danh m???c
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">T??m ki???m</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0395489217</h5>
                                <span>H??? tr??? 24/7</span>
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
                        <!-- <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Blog</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Th??? lo???i</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Ch?? (3)</a></li>
                                <li><a href="#">M??o (5)</a></li>
                                <li><a href="#">Chim (4)</a></li>
                                <li><a href="#">Chu???t (1)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Tin t???c m???i</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img style = "width:70px;height:70px"  src="https://thucungblog.com/wp-content/uploads/2021/10/cho-akita-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Ch?? Akita<br /> Ngu???n g???c, ?????c ??i???m , t??ch c??ch</h6>
                                        <span>MAR 05, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img style = "width:70px;height:70px" src="https://thucungblog.com/wp-content/uploads/2022/04/tai-xuong.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>V???t Cockatiel nh?? th??? n??o?<br /> Lo??i v???t n??i ti???ng ng?????i r???t gi???i</h6>
                                        <span>MAR 05, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img style = "width:70px;height:70px" src="https://thucungblog.com/wp-content/uploads/2022/03/Chuc-nang-than-bi-can-tro-do-cac-co-quan-noi-tang-bi-lao-hoa.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Th???c ??n n??o t???t cho th???n c???a ch?? m??o?</h6>
                                        <span>MAR 05, 2022</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Ch??</a>
                                <a href="#">M??o</a>
                                <a href="#">Chim</a>
                                <a href="#">Chu???t</a>
                                <a href="#">Nh??m</a>
                                <a href="#">K??? ????</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img style="width:360px;height:255px" src="https://thucungblog.com/wp-content/uploads/2021/10/cho-akita-1.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Mar 5,2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Ch?? Akita: Ngu???n g???c, ?????c ??i???m, t??nh c??ch, gi?? b??n</a></h5>
                                    <p>Ch?? Akita ???????c m???nh danh l?? b???o v???t t??? nhi??n, l?? ???qu???c khuy???n??? c???a Nh???t B???n. Gi???ng ch?? qu?? t???c, ho??ng gia n???i ti???ng b???i l??ng trung th??nh tuy???t ?????i..  </p>
                                    <a href="./blog-details.php" class="blog__btn">Xem th??m <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img style="width:360px;height:255px" src="https://thucungblog.com/wp-content/uploads/2022/04/tai-xuong.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Mar 5,2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">V???t Cockatiel nh?? th??? n??o? lo??i v???t n??i ti???ng ng?????i r???t gi???i</a></h5>
                                    <p>Chim V???t kh??ng c??n xa l??? ?????i v???i nh???ng ng?????i ch??i chim, ngo??i v??? ?????p th?? ch??ng c??n c?? th??? n??i ???????c ti???ng ng?????i.
                                         Tuy nhi??n v???t cockatiel l?? con g?? th?? c?? nhi???u ng?????i.. </p>
                                    <a href="#" class="blog__btn">Xem th??m <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
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
                        <div class="col-lg-6 col-md-6 col-sm-6">
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
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img style="width:360px;height:255px" src="https://traichomeo.com/wp-content/uploads/2022/01/vet-nam-my-3.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Mar 4,2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">V???t Nam M??? th??? n??o? th?? c??ng ?????t ????? c???a gi???i nh?? gi??u</a></h5>
                                    <p>V???t Nam M??? l?? m???t trong nh???ng lo??i chim th??ng minh nh???t th??? gi???i. V???t Nam M??? kh??ng ch??? r???t gi???i trong vi???c b???t ch?????c 
                                        ti???ng ng?????i m?? c??n c?? ti???ng h??t l??u lo, vui tai. </p>
                                    <a href="#" class="blog__btn">Xem th??m <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img style="width:360px;height:255px" src="https://traichomeo.com/wp-content/uploads/2022/03/chim-chich-choe.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Mar 4,2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Chim ch??ch ch??e than nh?? th??? n??o? c??ch ch??m s??c ????? c?? d???ng h??t hay</a></h5>
                                    <p>Chim ch??ch ch??e than l?? lo???i chim r???ng v???i gi???ng ca r??o r???t, tr???m b???ng c??ng nh???ng giai ??i???u ??m tai, ch??ch ch??e than
                                         ng??y ???????c gi???i ch??i chim ??a chu???ng.  </p>
                                    <a href="#" class="blog__btn">Xem th??m <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
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
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
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
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | B???n quy???n thu???c v???<i class="fa fa-heart" aria-hidden="true"></i> <a href="https://www.facebook.com/fong.IT.haui" target="_blank">MTP team</a>
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



</body>

</html>