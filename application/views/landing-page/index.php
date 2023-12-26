<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/front-end/') ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front-end/') ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front-end/') ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front-end/') ?>css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front-end/') ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front-end/') ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front-end/') ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front-end/') ?>css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="<?= base_url('assets/front-end/') ?>img/logo.jpeg"" alt="" style=" width: 70px; margin-top: -20px; margin-bottom: -15px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Homepage</a></li>
                                <!-- <li><a href="#">Contacts</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="<?= base_url('assets/front-end/') ?>img/slider.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <!-- <div class="label">Adventure</div> -->
                                <h2>Joki Ryouta</h2>
                                <p>Deskripsi</p>
                                <a href="#start" id="mulai"><span>Mulai</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad" id="start">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach ($kategori as $k) { ?>
                        <div class="trending__product">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="section-title">
                                        <h4><?= $k->nama_kategori ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php foreach ($layanan as $l) {
                                    if ($l->kategori_id == $k->id) { ?>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/uploads/layanan/' . $l->foto) ?>">
                                                    <?php if ($k->id == 1) { ?>
                                                        <div class="comment"><?= "Rp " . number_format($l->harga, 0, ',', '.') ?> / <i class="fa fa-star"></i></div>
                                                    <?php } else { ?>
                                                        <div class="comment"><?= "Rp " . number_format($l->harga, 0, ',', '.') ?></div>
                                                    <?php } ?>

                                                </div>
                                                <div class="product__item__text text-center">
                                                    <h5 class="text-white"><?= $l->nama_layanan ?></h5>
                                                    <a href="<?= base_url('home/formulir/' . $l->id) ?>" class="btn btn-danger btn-sm mt-2"><span>Order</span> <i class="fa fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                <?php };
                                } ?>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="<?= base_url('assets/front-end/') ?>img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?= base_url('assets/front-end/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/front-end/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/front-end/') ?>js/player.js"></script>
    <script src="<?= base_url('assets/front-end/') ?>js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/front-end/') ?>js/mixitup.min.js"></script>
    <script src="<?= base_url('assets/front-end/') ?>js/jquery.slicknav.js"></script>
    <script src="<?= base_url('assets/front-end/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/front-end/') ?>js/main.js"></script>


</body>

</html>