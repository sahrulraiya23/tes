<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Asentus" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
================================== -->
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Desa bungin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME STYLES -->
    <link href="css/layout.min.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BODY -->

<body>

    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="index.html">
                            <img class="logo-img logo-img-main" src="img/aparat/logo copy.png" style="max-height: 50px; max-width: 200px; height:50px; width:140px;" alt=" Asentus Logo">
                            <img class="logo-img logo-img-active" src="img/aparat/logo1.png" style="max-height: 50px; max-width: 200px; height:50px; width:140px;" alt="Asentus Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="index.php">Home</a></li>
                            <?php
                            if ($_GET['id_uraian']) {
                                $id_uraian = $_GET['id_uraian'];
                                if ($id_uraian == 1) {
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover active" href="page.php?id_uraian=1">Geografis</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=2">Kependudukan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=3">Potensi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=4">Investasi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=5">Pemasaran</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=6">Pertumbuhan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=9">Kecamatan</a></li>';
                                } elseif ($id_uraian == 2) {
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=1">Geografis</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover active" href="page.php?id_uraian=2">Kependudukan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=3">Potensi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=4">Investasi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=5">Pemasaran</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=6">Pertumbuhan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=9">Kecamatan</a></li>';
                                } elseif ($id_uraian == 3) {
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=1">Geografis</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=2">Kependudukan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover active" href="page.php?id_uraian=3">Potensi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=4">Investasi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=5">Pemasaran</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=6">Pertumbuhan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=9">Kecamatan</a></li>';
                                } elseif ($id_uraian == 4) {
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=1">Geografis</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=2">Kependudukan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=3">Potensi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover active" href="page.php?id_uraian=4">Investasi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=5">Pemasaran</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=6">Pertumbuhan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=9">Kecamatan</a></li>';
                                } elseif ($id_uraian == 5) {
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=1">Geografis</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=2">Kependudukan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=3">Potensi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=4">Investasi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover active" href="page.php?id_uraian=5">Pemasaran</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=6">Pertumbuhan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=9">Kecamatan</a></li>';
                                } elseif ($id_uraian == 6) {
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=1">Geografis</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=2">Kependudukan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=3">Potensi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=4">Investasi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=5">Pemasaran</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover active" href="page.php?id_uraian=6">Pertumbuhan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=9">Kecamatan</a></li>';
                                } elseif ($id_uraian == 9) {
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=1">Geografis</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=2">Kependudukan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=3">Potensi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=4">Investasi</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=5">Pemasaran</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover" href="page.php?id_uraian=6">Pertumbuhan</a></li>';
                                    echo '<li class="nav-item"><a class="nav-item-child nav-item-hover active" href="page.php?id_uraian=9">Kecamatan</a></li>';
                                }
                            }
                            ?>
                            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.php">Contact</a></li>
                        </ul>
                    </div>

                </div>



            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->

    <!--========== SLIDER ==========-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="container">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
        </div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive" src="assets/img/slide/1.jpg" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="margin-b-40">
                            <h1 class="carousel-title">Desa Bungin</h1>
                            <p style="color: white;">Salah Satu Desa Wisata Bahari<br />yang Terletak Di Kabupaten Konawe Selatan, Provinsi Sulawesi Tenggara</p>
                        </div>
                        <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="assets/img/slide/2.jpg" alt="Slider Image">
                <div class="container">
                    <div class="carousel-centered">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Desa Bungin</h1>
                                <p style="color: white;">Salah Satu Desa Wisata Bahari<br />yang Terletak Di Kabupaten Konawe Selatan, Provinsi Sulawesi Tenggara</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Service -->
    <!-- End About -->
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'desa_bungi');
    ?>

    <!--/#gallery-->
    <?php
    $id_uraian = $_GET['id_uraian'];
    $con = mysqli_connect('localhost', 'root', '', 'desa_bungi');
    $sql = "SELECT * FROM uraian WHERE id_uraian=$id_uraian";
    $hasil = mysqli_query($con, $sql);
    $data = mysqli_fetch_row($hasil);
    ?>
    <div class="content-lg container">
        <div class="row margin-b-20">
            <div class="col-sm-6">
                <h2><?php echo $data[1] ?></h2>
            </div>
        </div>
        <!--// end row -->


        <div class="row">
            <div class="col-sm-7 sm-margin-b-50">
                <div class="margin-b-30">
                    <p></p>
                </div>
                <p><?php echo $data[3] ?></p>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <?php echo "<img class='img-responsive' src='assets/img/dummies/$data[4]'>" ?>
            </div>
        </div>
        <!--// end row -->
    </div>

    <!--========== FOOTER ==========-->
    <footer class="footer">
        <!-- Copyright -->
        <div class="content container">
            <div class="row">
                <div class="col-xs-6">
                    <img class="footer-logo" src="img/aparat/logo1.png" style="height:50px; width: 130px;margin-top:-10px" alt="Asentus Logo">
                </div>
                <div class="col-xs-6 text-right">
                    <p class="margin-b-0 color-white"><a class="color-white fweight-700" href="http://keenthemes.com/preview/asentus/">Desa Bungin </a> &copy by:
                        <a class="color-white fweight-700" href="http://www.keenthemes.com/">Muhammad Saharullah Raiya</a>
                    </p>
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Copyright -->
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->


    <script src="vendor/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="vendor/jquery.easing.js" type="text/javascript"></script>
    <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
    <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
    <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>
    <script src="js/components/swiper.min.js" type="text/javascript"></script>
    <script src="js/components/masonry.min.js" type="text/javascript"></script>

</body>
<!-- END BODY -->

</html>