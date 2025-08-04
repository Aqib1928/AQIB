<!DOCTYPE html>
<html lang="en">
<?php include './partials/head.php' ?>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <?php include './partials/preloader.php' ?>
        <!-- end preloader -->
        <!-- Start header -->
        <?php include './partials/header-two.php' ?>
        <!-- end of header -->
        <!-- start wpo-page-title -->
        <?php
        $mainTitle = 'Portfolio Masonary';
        $Title = 'Home';
        $Title2 = 'Portfolio';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->
        <!-- protfolio area start -->
        <div class="wpo-protfolio-area-3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All Product</a></li>                       
                                <li><a data-filter=".BranDing" href="#">Branding </a></li>
                                <li><a data-filter=".IllustAtor" href="#">Illustator</a></li>
                                <li><a data-filter=".3d" href="#">3D</a></li>               
                                <li><a data-filter=".Marketing" href="#">Marketing</a></li> 
                            </ul>
                        </div>
                        <div class="gallery-container gallery-fancybox masonry-gallery row">
                            <div class="col-lg-6 col-md-6 col-12 custom-grid IllustAtor 3d Marketing wow zoomIn" data-wow-duration="2000ms">
                                <div class="protfolio-l">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/protfolio/img-9.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h2><a href="project-single.php">Minimalism</a></h2>
                                            <span>Illustration . Art Direction</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 custom-grid IllustAtor Marketing wow zoomIn" data-wow-duration="2000ms">
                                <div class="protfolio-l ">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/protfolio/img-11.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h2><a href="project-single.php">Abstract Art</a></h2>
                                            <span>Illustration . Art Direction</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 custom-grid BranDing IllustAtor 3d wow zoomIn" data-wow-duration="2000ms">
                                <div>
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/protfolio/img-10.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h2><a href="project-single.php">Modern BG</a></h2>
                                            <span>Illustration . Art Direction</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 custom-grid custom-grid BranDing 3d wow zoomIn" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/protfolio/img-12.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h2><a href="project-single.php">3D Project</a></h2>
                                            <span>Illustration . Art Direction</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div>
        <!-- protfolio area end -->
        <!-- wpo-partners-area-start -->
        <section class="partners-section">
            <h2 class="hidden">partner</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel clearfix">
                            <div class="grid">
                                <img src="assets/images/partners/1.png" alt="">
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/2.png" alt="">
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/3.png" alt="">
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end contianer -->
        </section>
        <!-- partners-area-end -->

        <!-- start wpo-site-footer -->
        <?php include './partials/footer-two.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>
</body>

</html>