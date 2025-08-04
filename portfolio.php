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
        $mainTitle = 'Portfolio';
        $Title = 'Home';
        $Title2 = 'Portfolio';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->
        <!-- start of wpo-project-area -->
        <div class="wpo-project-area section-padding pb-160">
            <div class="container">
                <div class="wpo-section-title-s2">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="title">
                                <h2>Recent Work.</h2>
                                <p>Must explain to you how all this mistaken idea pleasure
                                    born and give you a complete account.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-2">
                            <div class="sec-title-icon">
                                <i class="fi flaticon-self-growth"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-project-wrap wpo-project-slide owl-carousel">
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="assets/images/project/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.php">Arkio - Architecture & Interior WordPress Theme</a></h2>
                            <span>Architecture / Business</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="assets/images/project/img-2.jpg" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.php">Follio - Multipurpose Portfolio HTML5 Template</a></h2>
                            <span>Web Design</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="assets/images/project/img-3.jpg" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.php">Elito - Creative Portfolio HTML5 Template</a></h2>
                            <span>Website / Creative</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="assets/images/project/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.php">Arkio - Architecture & Interior WordPress Theme</a></h2>
                            <span>Architecture / Business</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="assets/images/project/img-2.jpg" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.php">Follio - Multipurpose Portfolio HTML5 Template</a></h2>
                            <span>Web Design</span>
                        </div>
                    </div>
                    <div class="wpo-project-item">
                        <div class="wpo-project-img">
                            <img src="assets/images/project/img-3.jpg" alt="">
                        </div>
                        <div class="wpo-project-text">
                            <h2><a href="portfolio-single.php">Elito - Creative Portfolio HTML5 Template</a></h2>
                            <span>Website / Creative</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-p">
                <svg width="1325" height="1687" viewBox="0 0 1325 1687" fill="none">
                    <g filter="url(#filter0_f_39_4166)">
                        <circle cx="481.5" cy="843.5" r="343.5" fill-opacity="0.27" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4166" x="-362" y="0" width="1687" height="1687"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4166" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="line-shape-1">
                <img src="assets/images/project/line-1.png" alt="">
            </div>
            <div class="line-shape-2">
                <img src="assets/images/project/line-2.png" alt="">
            </div>
        </div>
        <!-- end of wpo-project-area -->
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