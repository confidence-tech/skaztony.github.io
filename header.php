<!----------------------------------
--------------------------HEADER START
----------------------------------->
<!-- Start Header Style -->
<header id="header" class="htc-header header--3 bg__white">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo/logo1.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                    <nav class="mainmenu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            <li class="drop"><a href="index.php">Головна</a></li>
                            <li class="drop"><a href="portfolio-gutter-box-3.html">portfolio</a>
                                <ul class="dropdown">
                                    <li><a href="portfolio-gutter-box-3.html">Boxed Gutter 3 Col</a></li>
                                    <li><a href="portfolio-gutter-full-wide-4.html">Wide Gutter 4 Col </a></li>
                                    <li><a href="portfolio-card-box-3.html">Card Gutter 3 Col </a></li>
                                    <li><a href="portfolio-masonry-3.html">Masonry Box 3 Col </a></li>
                                    <li><a href="portfolio-gutter-masonry-fullwide-4.html">Masonry Wide 4 Col </a></li>
                                    <li><a href="portfolio-gutter-box-3-carousel.html">carousel Gutter 3 Col </a></li>
                                    <li><a href="portfolio-justified-box-3.html">justified box 3 Col</a></li>
                                    <li><a href="single-portfolio-gallery.html">Portfolio Details </a></li>
                                </ul>
                            </li>
                            <li class="drop"><a href="blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">blog 3 column</a></li>
                                    <li><a href="blog-2-col-rightsidebar.html">2 col right siderbar</a></li>
                                    <li><a href="blog-details-left-sidebar.html"> blog details</a></li>
                                </ul>
                            </li>
                            <li class="drop"><a href="shop-sidebar.php">Каталог</a>
                                <ul class="dropdown mega_dropdown">
                                    <!-- Start Single Mega MEnu -->
                                    <li><a class="mega__title" href="shop-sidebar.php">категорії продукції</a>
                                        <ul class="mega__item">
                                            <?php
                                            $querySelectCategory = "SELECT id, type FROM typewear";
                                            $resSelectCategory = mysqli_query($dbc, $querySelectCategory) or die('Query Cat Error');

                                            while ($nextCategory=mysqli_fetch_array($resSelectCategory)) {
                                                echo "<li><a href='shop-sidebar.php?id_category={$nextCategory['id']}'>{$nextCategory['type']}</a></li>";
                                            }
                                            ?>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul class="mega__item">
                                            <li>
                                                <div class="mega-item-img">
                                                    <a href="shop.php">
                                                        <img width="200px" src="images/feature-img/3.png" alt="">
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Single Mega MEnu -->
                                </ul>
                            </li>
                            <li class="drop"><a href="#">pages</a>
                                <ul class="dropdown">
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="shop.php">shop</a></li>
                                    <li><a href="shop-sidebar.php">shop sidebar</a></li>
                                    <li><a href="product-details.php">product details</a></li>
                                    <li><a href="cart.php">cart</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="login-register.html">login & register</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-menu clearfix visible-xs visible-sm">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="index.php">Home</a>
                                    <ul>
                                        <li><a href="index.php">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">portfolio</a>
                                    <ul class="dropdown">
                                        <li><a href="portfolio-gutter-box-3.html">Boxed Gutter 3 Col</a></li>
                                        <li><a href="portfolio-gutter-full-wide-4.html">Wide Gutter 4 Col </a></li>
                                        <li><a href="portfolio-card-box-3.html">Card Gutter 3 Col </a></li>
                                        <li><a href="portfolio-masonry-3.html">Masonry Box 3 Col </a></li>
                                        <li><a href="portfolio-gutter-masonry-fullwide-4.html">Masonry Wide 4 Col </a></li>
                                        <li><a href="portfolio-gutter-box-3-carousel.html">carousel Gutter 3 Col </a></li>
                                        <li><a href="portfolio-justified-box-3.html">justified box 3 Col</a></li>
                                        <li><a href="single-portfolio-gallery.html">Portfolio Details </a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">blog</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 column</a></li>
                                        <li><a href="blog-2-col-rightsidebar.html">2 col right siderbar</a></li>
                                        <li><a href="blog-details-left-sidebar.html"> blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="shop.php">shop</a></li>
                                        <li><a href="shop-sidebar.php">shop sidebar</a></li>
                                        <li><a href="product-details.php">product details</a></li>
                                        <li><a href="cart.php">cart</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="login-register.html">login & register</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End MAinmenu Ares -->
                <div class="col-md-2 col-sm-4 col-xs-3">
                    <ul class="menu-extra">
                        <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                        <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                        <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                        <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- End Header Style -->
<div class="body__overlay"></div>
<!-- Start Offset Wrapper -->
<div class="offset__wrapper">
    <!-- Start Search Popap -->
    <div class="search__area">
        <div class="container" >
            <div class="row" >
                <div class="col-md-12" >
                    <div class="search__inner">
                        <form action="shop-sidebar.php" method="get">
                            <input name="search" placeholder="Search here... " type="text">
                            <button type="submit"></button>
                        </form>
                        <div class="search__close__btn">
                            <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Popap -->


    <!-- Start Offset MEnu -->
    <div class="offsetmenu">
        <div class="offsetmenu__inner">
            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>
            <div class="off__contact">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <ul class="sidebar__thumd">
                <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
            </ul>
            <div class="offset__widget">
                <div class="offset__single">
                    <h4 class="offset__title">Language</h4>
                    <ul>
                        <li><a href="#"> Engish </a></li>
                        <li><a href="#"> French </a></li>
                        <li><a href="#"> German </a></li>
                    </ul>
                </div>
                <div class="offset__single">
                    <h4 class="offset__title">Currencies</h4>
                    <ul>
                        <li><a href="#"> USD : Dollar </a></li>
                        <li><a href="#"> EUR : Euro </a></li>
                        <li><a href="#"> POU : Pound </a></li>
                    </ul>
                </div>
            </div>
            <div class="offset__sosial__share">
                <h4 class="offset__title">Follow Us On Social</h4>
                <ul class="off__soaial__link">
                    <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>

                    <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                    <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                    <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                    <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Offset MEnu -->


    <!-- Start Cart Panel -->
    <div class="shopping__cart">
        <div class="shopping__cart__inner">
            <?php
            if (count($_SESSION['basket']) > 0){
            ?>
            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>
            <div class="shp__cart__wrap">
                <?php
                $totalSum = 0;

                foreach ($_SESSION['basket'] as $tmp) {
                    $sum = $tmp['price']*$tmp['count'];
                    echo "<div class='shp__single__product'>
                                            <div class='shp__pro__thumb'>
                                                <a href='product-details.php?id={$tmp['id']}'>
                                                    <img src='images/tovar/{$tmp['photo']}' alt='product images'>
                                                </a>
                                            </div>
                                            <div class='shp__pro__details'>
                                                <h2><a href='product-details.php?id={$tmp['id']}'>{$tmp['model']}</a></h2>
                                                <span class='quantity'>Кількість: {$tmp['count']}</span>
                                                <span class='shp__price'>₴{$tmp['price']}</span>
                                            </div>
                                            <div class='remove__btn'>
                                                <a href='basket.php?id={$tmp['id']}&mode=del' title='Видалити'><i class='zmdi zmdi-close'></i></a>
                                            </div>
                                        </div>";
                    $totalSum+=$sum;
                }
                ?>
            </div>
            <ul class="shoping__total">
                <li class="subtotal">Сумма:</li>
                <li class="total__price">₴<?=$totalSum?></li>
            </ul>
            <ul class="shopping__btn">
                <li><a href="cart.php">Переглянути кошик</a></li>
                <li class="shp__checkout"><a href="checkout.html">Оформити замовлення</a></li>
            </ul>
            <?php
            }else{
                echo '<div class="shp__single__product">
                        <h2>Кошик товарів порожній</h2>
                      </div>
                      <img src="images/others/pistol.png">';
            }
            ?>
        </div>
    </div>
    <!-- End Cart Panel -->

</div>
<!-- End Offset Wrapper -->
<!----------------------------------
--------------------------HEADER END
----------------------------------->