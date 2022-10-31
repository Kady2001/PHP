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
                           
   
                            <a href="/webdemo/dangnhap/"><i class="fa fa-user"></i> Đăng nhập</a>
                            <a href="/webdemo/dangnhap/"><i class="fa fa-user"></i> Đăng xuất</a>
                                <label for=""><?php 
                                if(isset($_SESSION['tentk'])){
                                echo $_SESSION['tentk'];
                                }else {echo 'Bạn chưa đăng nhập!';}  ?>
                                </label>

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
                                <img style="width:40;height: 20px;" src="https://cdn.pixabay.com/photo/2012/04/10/23/04/vietnam-26834_640.png" alt="">
                                <div>Tiếng việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Tiếng việt</a></li>
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
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                   <li><a href="./shop-details.php">Chi tiết sản phẩm</a></li>
                                    <li><a href="./shoping-cart.php">Giỏ hàng</a></li>
                                    <li><a href="./checkout.php">Thanh toán</a></li>
                                    <li><a href="./blog-details.php">Thông tin Blogs</a></li>
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

    <!-- Blog Details Hero Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="https://traicholebinh.com/images/slideshow/banner.png">
        <div class="container"  style = "width:1535;height:160px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <!-- <h2>The Moment You Need To Remove Garlic From The Menu</h2>
                        <ul>
                            <li>By Michael Scofield</li>
                            <li>January 14, 2019</li>
                            <li>8 Comments</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Thể loại</h4>
                            <ul>
                            <li><a href="#">All</a></li>
                                <li><a href="#">Chó (3)</a></li>
                                <li><a href="#">Mèo (5)</a></li>
                                <li><a href="#">Chim (4)</a></li>
                                <li><a href="#">Chuột (1)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                        <h4>Tin tức mới</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img style = "width:70px;height:70px"  src="https://thucungblog.com/wp-content/uploads/2021/10/cho-akita-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Chó Akita<br /> Nguồn gốc, đặc điểm , tích cách</h6>
                                        <span>MAR 05, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img style = "width:70px;height:70px" src="https://thucungblog.com/wp-content/uploads/2022/04/tai-xuong.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Vẹt Cockatiel như thế nào?<br /> Loài vẹt nói tiếng người rất giỏi</h6>
                                        <span>MAR 05, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img style = "width:70px;height:70px" src="https://thucungblog.com/wp-content/uploads/2022/03/Chuc-nang-than-bi-can-tro-do-cac-co-quan-noi-tang-bi-lao-hoa.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Thức ăn nào tốt cho thận của chó mèo?</h6>
                                        <span>MAR 05, 2022</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img style="width:740px;height:620px" src="https://thucungblog.com/wp-content/uploads/2021/10/cho-akita-1.jpg" alt="">
                            <h4>Đôi nét khái quát về chó Akita</h4>
                        <p>
                            Chó Akita có tên gọi đầy đủ là Akita Inu là giống chó cổ, quý hiếm đến từ xứ sở hoa anh đào. Akita thuộc giống chó tuyết 
                            có thân hình vừa phải, khá săn chắc và cân đối với ngực nở bụng thon, cơ bắp nổi rõ. Akita sở hữu 2 lớp lông bông xù có 
                            thể mang các màu như màu vàng – trắng (red), màu trắng, vàng nâu, nâu và màu vện, trông rất xinh xắn và đàng yêu.
                            Về tính cách, các em Akita được liên tưởng tới những võ sĩ Samurai vậy, rất kiên trì, điểm tĩnh và không hệ sợ hãi trước 
                            hiểm nguy. Với chủ nhân thì các em ấy vô cùng hiền lành và ấm áp, đặc biệt trung thành hơn bất cứ giống chó nào. Phía dưới 
                            bài viết này, Blog Thú Cưng sẽ chia sẻ tới bạn câu chuyện cảm động về lòng trung thành của em hachiko đã lay động cảm xúc của hàng triệu 
                            triệu người trên thế giới để nhấn mạnh sự trung thành tuyệt đối của giống chó này.
                            Nguồn gốc xuất thân và sự ra đời của cái tên Akita
                            <h4>Nguồn gốc xuất thân và sự ra đời của cái tên Akita</h4>
                            Có thể nói, Chó Akita là một trong những giống chó cổ xưa và lâu đời nhất ở Nhật Bản và trên thế giới hiện nay, chúng xuất hiện cách đay từ hai thiên niên kỷ trước. Sở dĩ chúng được gọi là Akita vì chúng đến từ một hòn đảo nhỏ mang tên Sonshu thuộc vùng Akita, cách gọi này như là một cách thức để nhớ tới quê hương và nguồn gốc của chúng.
                            Từ xa xưa, Akita đã rất được trọng dụng, các hoàng gia và quý tộc Nhật luôn coi chúng như một người bạn, người vệ sĩ tài ba đồng hành bên cạnh để bảo vệ cũng như trở thành trợ thủ đắc lực trong các cuộc săn bắt, tham chiến. Mãi tới sau năm 1600, giống chó Akita Inu ngày càng phổ biến khắp các vùng Nhật Bản và được công nhận là bảo vật tự nhiên, “quốc khuyển” Nhật Bản vào năm 1931.
                            <h4>Câu chuyện về chó Akita và ngày hachiko ở Nhật</h4>
                            Câu chuyện về chú chó hachiko có lẽ là câu truyện cảm động nhất về sự gắn kết giữa con người và loài vật. Vào năm 1924, giáo sư Hidesaburo Ueno giảng viên của trường Đại học Tokyo đã mua một chú chó Akita đặt tên là hachiko. Mỗi sáng, chú chó đi theo ông tới nhà ga Shibuya để tiễn ông đi làm và buổi chiều lại ra ga đón ông trở về. Lâu dần trở thành thói quen sinh hoạt hàng ngày giữa hachiko và ông giáo. Vào một ngày định mệnh 5/1925, giáo sư đột ngột qua đời tại trường học.
                            Những ngày sau đó, chiều nào hachiko có mặt ở nhà ga để trông ngóng chủ nhân trở về. Và trong suốt 9 năm 9 tháng 15 ngày hachiko luôn làm việc đó một cách đều đặn cho tới khi chút hơi thở cuối cùng 3/1935. Câu chuyện cảm động đã lấy đi rất nhiều nước mắt của mọi người trên khắp thế giới.
                            Để bày tỏ sự ngưỡng mộ lòng trung thành của chú chó nhỏ, xác của hachiko được nhồi bông và bảo quản trong Bảo tàng Quốc gia Khoa học Nhật Bản. Tượng hachiko cũng được đặt ngay trước cửa nhà ga chính, các tuyến xe buyt hachiko đã từng đi, những câu truyện, bộ phim xây dựng lại hình tượng hachiko,… và cho tới tận ngày nay, chú chó nhỏ Akita ngày vẫn sống mãi trong trái tim của mọi người.
                            <h4>Phân loại các giống chó Akita</h4>
                            Chó Akita Inu được phân thành 2 loại chính, bao gồm:<br>
                            <h6>Giống thuần chủng Nhật Bản</h6>
                            Đây là giống thuần chủng chuẩn nhất, là cái nôi của các giống Akita trên thế giới. Chúng có màu trắng – vàng, màu vện hoặc màu trắng.
                            <h6>Chó Akita Mỹ</h6>
                            Sở dĩ có giống Akita Mỹ là vì người Mỹ đã mang theo Akita khi trở về sau đại chiến thế giới 2. Trải qua nhiều lần lai tạo, giống cho Akita Mỹ to lớn hơn. Tuy nhiên, chỉ có giống chó Akita thuần chủng Nhật mới sở hữu đầy đủ những tính cách đặc trưng và nổi bật của loài chó này.
                            <h4>Đặc điểm của giống chó Akita thuần chủng</h4>
                            Chó Akita Inu thuần chủng có những đặc điểm sau:<br>
                            - Thân hình cân đối, cao khoảng 64-70cm, nặng khoảng 23-40kg, con đực cao và to hơn con cái.<br>
                            - Chúng thuộc nhóm chó tuyết, sống ở các vùng núi giá rét ở Nhật, do đó khả năng chịu lạnh rất cao.<br>
                            - Bộ lông 2 lớp dày và mềm mại với khả năng giữ ấm tuyệt vời.<br>
                            - Màu lông khá đa dạng, gồm màu trắng, trắng – vàng, vằn vện hoặc màu sesame trông rất dễ thương.<br>
                            - Khuôn mặt hiền lành với đầu có kích thước vừa phải, hài hòa với cơ thể. Mặt tam giác, đôi mắt đen, trán phẳng, giữa chán có rãnh với màu lông đậm hơn, chia mặt thành hai nửa đối xứng. Mõm chó ngắn, nhỏ xinh với cơ hàm cực khỏe và răng sắc nhọn được di truyền từ tổ tiên. Môi chó màu đen, lưỡi hồng, tai vểnh kích thước vừa phải.<br>
                            - Đuôi dài, bông luôn cuộn tròn vểnh lên cao ngay phía cuối lưng.<br>
                            - Chân có đệm dày, đặc biệt có màng như chân của loài mèo nên chúng có khả năng bơi khá tốt.<br>
                            - Tuổi thọ trung bình của giống thuần chủng là từ 10-15 năm.<br>
                            - Ngoài ra, giống chó Akita thuần chủng còn có khả năng thích nghi cao với khí hậu nhiệt đới.<br>
                            <h4>Tập tính của loài chó hoàng gia Nhật Bản</h4>
                            Đặc tính nổi bật của giống chó hoàng gia Nhật Bản này chính là tính cách độc lập, rất mạnh mẽ có phần ương ngạnh. Tổ tiên của chúng là loài sống bầy đàn nên bản tính chiếm hữu và bảo vệ lãnh thổ cao, có phần hiếu chiến nếu như ai đó xâm phạm vào lãnh thổ của chúng. Tuy nhiên, với chủ nhân, chúng vô cùng trung thành, kính trọng và biết vâng lời.
                            <br>
                            Akita cũng nổi tiếng là thông minh, lanh lợi, chúng có trí nhớ tốt. Thậm trí chúng có thể sẽ không thực hiện theo yêu cầu nếu chúng biết điều đó là vô lý.
                            <br>
                            Akita Inu sống rất tình cảm, chúng luôn muốn được chủ nhân yêu thương và chăm sóc, vuốt ve. Đặc biệt, chúng là loài ưa vận động nên bạn có thể cho chúng đi dạo cùng vào những lúc dảnh rỗi nhé.
                            <br>
                            Để huấn luyện Akita và thuần hóa chúng thì tốt nhất, bạn nên nuôi chúng ngay từ khi chúng còn nhỏ khoảng 2-3 tháng tuổi. Điều đó cũng rất thuận tiện cho bạn trong việc nuôi nấng và dạy dỗ chúng cũng như sự gắn kết giữa chủ và chó về lâu dài.
                            <br>
                            Bạn nên nuôi Akita ngay từ khi chúng còn nhỏ khoảng 2-3 tháng tuổi chúng sẽ dễ dạy bảo hơn
                            <br>
                            Bạn nên nuôi Akita ngay từ khi chúng còn nhỏ khoảng 2-3 tháng tuổi chúng sẽ dễ dạy bảo hơn
                            <h5>Cách chăm sóc chó Akita tốt nhất</h5>
                            Chó Akita rất đỗi đáng yêu và trung thành, chính vì vậy bất cứ chủ nhân nào cũng muốn sở hữu một em để chăm sóc. Vậy, cách chăm sóc chó Akita inu như thế nào? Hãy cùng Blog Thú Cưng tìm hiểu ngay bây giờ.
                            <h5>Chăm sóc lông</h5>
                            Chó Akita sẽ rụng lông 2 lần/ năm và bắt đầu thay lông khoảng lúc 3 tháng tuổi. Chính vì vậy, bạn hãy thường xuyên chải lông cho chúng bằng lược chuyên dụng. Đồng thời tắm cho chó khoảng 2 lần/ tuần bằng sữa tắm dành cho thú cưng. Sau tắm cần sử dụng khăn khô để lau khô người và sử dụng máy sấy để sấy khô chân, kẽ chân, tai cho chúng.
                            <br>
                            Vào mùa hè, bạn có thể cắt tỉa bớt lông cho chúng hoặc đưa chúng tới spa để được cắt tỉa lông cho chó bớt nóng. Và đừng quên cho em ý đi dạo cùng những lúc cuối tuần hoặc khi dảnh rỗi nhé, em ấy rất thích được đi dạo đấy.
                            <h5>Chế độ dinh dưỡng cho chó</h5>
                            Mỗi giai đoạn phát triển khác nhau, nhu cầu dinh dưỡng của Akita cũng sẽ khác nhau. Hãy tham khảo những thông tin về chế độ dinh dưỡng cho thú cưng dưới đây để chăm sóc tốt cho chúng nhé.
                            <br>
                            Giai đoạn 2-3 tháng tuổi: Ở giai đoạn này, chúng cần được ăn 5-6 bữa/ ngày. Thức ăn chính là cháo xay cùng thịt giàu đạm. Đặc biệt, không cho chúng ăn cá ở giai đoạn này bởi chúng dễ bị lạnh bụng và gặp vấn đề về tiêu hóa.
                            <br>
                            Giai đoạn 3-6 tháng: Akita bắt đầu ăn được cơm với các loại thịt ninh mềm. Bạn cần cung cấp đủ các nhóm dinh dưỡng, đặc biệt là đạm, chất béo và vitamin để chúng phát triển khỏe mạnh. Số bữa ăn ở giai đoạn này là từ 3-4 bữa/ ngày.
                            <br>
                            Giai đoạn trên 6 tháng tuổi: Ở giai đoạn này, số bữa ăn có thể giảm xuống 2 bữa/ ngày. Tuy nhiên, lượng dinh dưỡng giàu đạm vẫn cần được duy trì. Ngoài ra, bạn cần bổ sung thêm canxi để chúng có khung xương chắc khỏe.
                            <h4>Các vấn đề về sức khỏe chó Akita</h4>
                            Nhìn chung Akita có thân hình to khỏe, vạm vỡ và sức đề kháng tốt, ít ốm bệnh. Ăn uống đa dạng đủ chất sẽ giúp chúng có nền tảng sức khỏe tốt. Tuy nhiên, bạn cũng cần lưu ý phòng bệnh về mắt cho cún cưng (chủ yếu là viêm tuyến lệ). Ngoài ra, chúng có thể gặp vấn đề loạn sản xương hông. Hãy chú ý phòng tránh cho thú cưng của bạn nhé.
                            <h4>Môi trường sống của chó Akita</h4>
                            Chó Akita chủ yếu sống ở vùng khí hậu lạnh giá, có tuyết, bộ lông của chúng có cấu tạo 2 lớp là vị vậy. Tuy nhiên, chúng cũng thích nghi rất tốt với khí hậu nhiệt đới tại Việt Nam. Khi nuôi tại gia đình, bạn nên tạo cho chúng một không gian đủ rộng để chúng được vận động và tránh béo phì.
                            <h4>Phong trào nuôi giống chó hoàng gia Akita ngày càng phổ biến</h4>
                            Sở hữu ngoại hình cân đối, khuôn mặt xinh xắn, bộ lông đáng yêu cùng đức tính trung thành đã khiến Akita trở thành một trong những chú chó hoàng gia đáng sở hữu nhất. Do đó, phong trào nuôi chó Akita ngày càng phổ biến. Thậm chí cộng đồng người nuôi Akita đã thường xuyên tổ chức những buổi offline ý nghĩa để giao lưu và học hỏi kinh nghiệm cũng như cho các em cún có dịp được làm quen với nhau. Trở thành một cộng động đông đảo trong nước và trên thế giới.
                            <h4>Mua chó Akita ở đâu uy tín?</h4>
                            Để mua được chó Akita thuần chủng, bạn nên tìm tới những trại chó lớn hoặc những trang bán chó cảnh, nhập khẩu chó cảnh uy tín tại những thành phố lớn. Rất nhiều người mua chó tin vào những trang giao bán như chợ tốt, én bạc, … đặt cọc mua những em chó Akita giá rẻ và bị lừa tiền hoặc nhận được con giống kém chất lượng khiến tiền mất tật mang. Chính vì vậy, tốt nhất là bạn hãy tìm hiểu thật kỹ để chọn đúng nhà cung cấp uy tín.
                            <br>
                            Blog Thú Cưng là một trong những địa chỉ bạn hoàn toàn tin tưởng và lựa chọn. Tại đây có cung cấp chó Akita thuần chủng bố mẹ nhập khẩu và con con sinh ra tại Việt Nam chuẩn có chứng nhận VKA. Ngoài ra nếu bạn muốn oder những em cún nhập khẩu từ Châu Âu hay Nhật Bản, đến Blog Thú Cưng bạn sẽ hoàn toàn an tâm, đầy đủ giấy tờ, tiêm chủng, gia phả quý tộc, phả hệ chuẩn chất lượng.
                            <h4>Giá chó Akita</h4>
                            Giá chó Akita Inu có lẽ là thông tin mà bạn đang rất quan tâm. Có rất nhiều yếu tố ảnh hưởng tới giá của chó Akita. Chẳng hạn như nguồn gốc, màu lông, chó cún, chó giống, độ thuần chủng, giới tính, … Dưới đây là một số bảng giá chó cún để bạn tham khảo:
                            <br>- Cún con có bố mẹ nhập khẩu giá khoảng 12-15 triệu/ em
                            <br>- Cún con có bố mẹ sinh sản trong nước khoảng 10-15 triệu/ em
                            <br>- Chó cún nhập khẩu Châu Âu khoảng 2500 USD/ em
                            <br>- Chó cún nhập khẩu Nhật Bản: Loại này giá cá cao vì nhập khẩu rất khó khăn do chính phủ Nhật kiểm soát chặt giống chó này. Do đó, giá có thể lên tới 8000 USD/ em.
                            <h4>Lý do nên nuôi chó Akita</h4>
                            Có rất nhiều lý do khiến bạn muốn nuôi một em Akita và dưới đây chỉ là một vài lý do phổ biến mà thôi:
                            <br>- Giúp bảo vệ chủ nhân, trông giữ nhà cửa, tài sản với một lòng trung thành tuyệt đối
                            <br>- Giúp có một người bạn tin cậy, giúp cuộc sống thêm vui vẻ hơn
                            <br>- Thỏa mãn niềm yêu thích động vật của bạn
                            <br>- Akita là một chú chó thông minh, nhanh nhẹn và vô cùng đáng yêu
                            <br>- Đây là một giống chó quý, rất đáng nuôi và nhân giống nếu bạn đang cân nhắc thì hãy mạnh dạn cưới một em về chăm sóc nhé.
                            <h4>Hướng dẫn phân biệt chó Akita Nhật với Shiba Inu và Akita Mỹ</h4>
                            Cả Akita và Shiba Inu đều là những giống chó nổi tiếng Nhật Bản được nhiều người yêu mến. Chính vì vậy, khi quan sát trên ảnh nhiều người sẽ rất dễ nhầm vì trông chúng có vẻ giống nhau. Do đó Blog Thú Cưng sẽ hướng dẫn bạn cách phân biệt như sau:

                            <br>- Shiba Inu là giống chó nhỏ hơn Akita thuần chủng. Shiba inu có cân nặng khoảng 11-12kg, đó đó chúng có thể nằm gọn trong lòng bạn.
                            <br>- Akita thuần chủng Nhật: Thân hình to vừa phải và cân đối, nặng khoảng 23- dưới 50kg.
                            <br>- Akita Mỹ: Là giống chó đã được lai tạo nên kích thước và cân nặng lớn hơn giống thuần chủng nhiều.</p>
                        <h3>Kết luận</h3>
                        <p>Trên đây là những thông tin tìm hiểu về giống chó akita Inu “quốc khuyển” của Nhật Bản. Hy vọng những thông tin trên phần nào giúp bạn tìm hiểu rõ nét về giống chó đặc biệt trung thành này và có thể tự tin sở hữu một em cún đáng yêu bên cạnh. Nếu cần hỗ trợ, tư vấn về Akita, hãy liên hệ với Blog Thú Cưng để được hỗ trợ kịp thời bạn nhé.</p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>Michael Scofield</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> Chó</li>
                                        <li><span>Tags:</span> All, Trending, Chó</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Các bài đăng khác</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                            <div class="blog__item__pic">
                                    <img style="width:360px;height:255px" src="https://thucungblog.com/wp-content/uploads/2022/04/tai-xuong.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Mar 5,2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Vẹt Cockatiel như thế nào? loài vẹt nói tiếng người rất giỏi</a></h5>
                                    <p>Chim Vẹt không còn xa lạ đối với những người chơi chim, ngoài vẻ đẹp thì chúng còn có thể nói được tiếng người.
                                         Tuy nhiên vẹt cockatiel là con gì thì có nhiều người.. </p>
                                    <a href="#" class="blog__btn">Xem thêm <span class="arrow_right"></span></a>
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
                                    <h5><a href="#">Mèo Aegean: Nguồn gốc, đặc điểm, tính cách</a></h5>
                                    <p>Aegean là một giống mèo tự nhiên rất phổ biến và lâu đời nhất tại Hy Lạp. Chúng được yêu thích bởi khả năng hòa nhập 
                                        nhanh, tính cách dễ thương, thông minh và lanh lợi..</p>
                                    <a href="#" class="blog__btn">Xem thêm <span class="arrow_right"></span></a>
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
                                    <h5><a href="#">Chó Đốm ăn gì? Cách cho chó Đốm ăn khoa học nhất</a></h5>
                                    <p>Chó Đốm còn được gọi là chó Dalmatian, là giống chó có màu lông đặc biệt và rất nổi tiếng trong bộ phim 101 chú chó Đốm. 
                                        Tuy nhiên, vì chúng chưa phổ biến ở Việt Nam nên.. </p>
                                    <a href="#" class="blog__btn">Xem thêm <span class="arrow_right"></span></a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

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



</body>

</html>