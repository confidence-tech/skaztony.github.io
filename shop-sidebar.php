<?php
session_start();
require_once 'admin/param.php';
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tmart-Minimalist eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/logo1.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">

        <?php
        require_once 'header.php';
        ?>

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Спеціальне Тактичне Спорядження<br><strong style="color: #cd0a0a">КАТАЛОГ ПРОДУКЦІЇ</strong></h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Головна</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active">Каталог товарів</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->


        <!-- Start Our ShopSide Area -->
        <section class="htc__shop__sidebar bg__white ptb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                        <div class="htc__shop__left__sidebar">
                            <!-- Start Range -->
                            <div class="htc-grid-range">
                                <h4 class="section-title-4">FILTER BY PRICE</h4>
                                <div class="content-shopby">
                                    <div class="price_filter s-filter clear">
                                        <form action="#" method="GET">
                                            <div id="slider-range"></div>
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <span>Price :</span><input type="text" id="amount" readonly>
                                                    </div>
                                                    <div class="price--filter">
                                                        <a href="#">Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Range -->
                            <!-- Start Product Cat -->
                            <div class="htc__shop__cat">
                                <h4 class="section-title-4">КАТЕГОРИИ</h4>
                                <ul class="sidebar__list">
                                    <?php
                                    $queryType = "SELECT id, type, icon FROM typewear";
                                    $resType = mysqli_query($dbc, $queryType) or die('Query Error Wear');
                                    while ($nextWear=mysqli_fetch_array($resType)){
                                        echo "<li><a href='out.php?pod=".$nextWear['id']."'>{$nextWear['type']} </a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                            <!-- End Product Cat -->
                            <!-- Start Color Cat -->
                            <div class="htc__shop__cat">
                                <h4 class="section-title-4">CHOOSE COLOUR</h4>
                                <ul class="sidebar__list">
                                    <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black<span>3</span></a></li>
                                    <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue <span>4</span></a></li>
                                    <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown <span>3</span></a></li>
                                    <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red <span>6</span></a></li>
                                    <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange <span>10</span></a></li>
                                </ul>
                            </div>
                            <!-- End Color Cat -->
                            <!-- Start Size Cat -->
                            <div class="htc__shop__cat">
                                <h4 class="section-title-4">PRODUCT CATEGORIES</h4>
                                <ul class="sidebar__list">
                                    <li><a href="#">xl <span>3</span></a></li>
                                    <li><a href="#">l <span>4</span></a></li>
                                    <li><a href="#">lm <span>3</span></a></li>
                                    <li><a href="#">ml <span>6</span></a></li>
                                    <li><a href="#">m <span>10</span></a></li>
                                    <li><a href="#">ml <span>3</span></a></li>
                                </ul>
                            </div>
                            <!-- End Size Cat -->
                            <!-- Start Tag Area -->
                            <div class="htc__shop__cat">
                                <h4 class="section-title-4">Tags</h4>
                                <ul class="htc__tags">
                                    <li><a href="#">All</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Stationery</a></li>
                                    <li><a href="#">Homelife</a></li>
                                    <li><a href="#">Appliances</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Baby</a></li>
                                    <li><a href="#">Beauty</a></li>
                                </ul>
                            </div>
                            <!-- End Tag Area -->
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 smt-30">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="producy__view__container">
                                    <!-- Start Short Form -->
                                    <div class="product__list__option">
                                        <div class="order-single-btn">
                                            <select class="select-color selectpicker">
                                              <option>Sort by newness</option>
                                              <option>Match</option>
                                              <option>Updated</option>
                                              <option>Title</option>
                                              <option>Category</option>
                                              <option>Rating</option>
                                            </select>
                                        </div>
                                        <div class="shp__pro__show">
                                            <span>Showing 1 - 4 of 25 results</span>
                                        </div>
                                    </div>
                                    <!-- End Short Form -->
                                    <!-- Start List And Grid View -->
                                    <ul class="view__mode" role="tablist">
                                        <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                        <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                    </ul>
                                    <!-- End List And Grid View -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="shop__grid__view__wrap another-product-style">
                                <!-- Start Single View -->
                                <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">

                                    <?php
                                    $zapis = 16;
                                    $queryPagCount = "SELECT id FROM assort";
                                    $resPagCount = mysqli_query($dbc, $queryPagCount) or die('Query Pag Error');
                                    $rowsPag = mysqli_num_rows($resPagCount);
                                    $countPages = ceil($rowsPag/$zapis);

                                    if (isset($_GET['page'])){
                                        $aktivPage = $_GET['page'];
                                    }else{
                                        $aktivPage = 1;
                                    }
                                    $skipPageFormula = ($aktivPage-1)*$zapis;

                                    $query = "SELECT * FROM assort LIMIT {$skipPageFormula}, {$zapis}";

                                    $res = mysqli_query($dbc, $query) or die('Query Error');
                                    while ($next=mysqli_fetch_array($res)) {
                                        if (empty($next['photo'])) {
                                            $next['photo'] = 'nophoto.png';
                                        }
                                        $queryPhotoMain = "SELECT id, name_photo FROM photo WHERE id_tovar=" . $next['id'] . " AND main=1";
                                        $resPhotoMain = mysqli_query($dbc, $queryPhotoMain) or die('Query Photo Main');
                                        while ($photo = mysqli_fetch_array($resPhotoMain)) {
                                            echo "<div class='col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12'>
                                        <div class='product foo'>
                                            <div class='product__inner'>
                                                <div class='pro__thumb'>
                                                    <a href='product-details.php?id={$next['id']}'>
                                                        <img src='images/tovar/{$photo['name_photo']}' alt='product images'>
                                                    </a>
                                                </div>
                                                <div class='product__hover__info'>
                                                    <ul class='product__action'>
                                                        <li><a data-toggle='modal' data-target='#productModal' title='Quick View' class='quick-view modal-view detail-link' href='#'><span class='ti-plus'></span></a></li>
                                                        <li><a title='Add TO Cart' href='basket.php?id={$next['id']}&mode=add'><span class='ti-shopping-cart'></span></a></li>
                                                        <li><a title='Wishlist' href='wishlist.html'><span class='ti-heart'></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class='product__details'>
                                                <h2><a href='product-details.php?id={$next['id']}'>{$next['model']}</a></h2>
                                                <ul class='product__price'>      
                                                    <li class='old__price' style='text-decoration: none'> {$next['price']} </li >
                                                    <!-- 
                                                    <li class='old__price' > $16.00 </li >
//                                                   <li class='new__price' >{$next['price']}</li >
                                                    -->                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>";
                                        }
                                    }
                                    ?>

                                </div>
                                <!-- End Single View -->




                            </div>
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination">
                                <?php
                                if ($_GET['page'] == 1) {
                                    echo '<li class="page-item disabled">
                                            <a class="page-link" tabindex="-1">Previous</a>
                                          </li>';
                                }else{
                                    echo '<li class="page-item">
                                            <a class="page-link" href="shop-sidebar.php?page='.($aktivPage-1).'">Previous</a>
                                          </li>';
                                }

                                for ($i = 1; $i <= $countPages; $i++) {
                                    if ($aktivPage == $i) {
                                        echo '<li class="page-item disabled"><a class="page-link" href="shop-sidebar.php?page=' . $i . '">' . $i . '</a></li>';
                                    }else{
                                        echo '<li class="page-item"><a class="page-link" href="shop-sidebar.php?page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }

                                if ($_GET['page'] == $countPages) {
                                echo '<li class="page-item disabled">
                                        <a class="page-link" tabindex="-1">Previous</a>
                                      </li>';
                                }else{
                                echo '<li class="page-item">
                                        <a class="page-link" href="shop-sidebar.php?page='.($aktivPage+1).'">Previous</a>
                                      </li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Our ShopSide Area -->

        <!-- Start Footer Area -->
        <?=require_once 'footer.php'?>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="images/product/big-img/1.jpg">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Green" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>