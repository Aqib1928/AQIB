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
        <?php include './partials/header.php' ?>
        <!-- end of header -->
        <!-- start wpo-page-title -->
        <?php
        $pageTitle = 'Portfolio Grid';
        $Title = 'Home';
        $Title2 = 'Portfolio';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->
        <!-- protfolio area start -->
        <div class="wpo-protfolio-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12 sortable-gallery">
                        <div class="gallery-filters">
                            <ul>
                                <li><a data-filter="*" href="#" class="current">All Product</a></li>                       
                                <li><a data-filter=".wordPress" href="#">Word Press</a></li>
                                <li><a data-filter=".IllustAtor" href="#">Illustator</a></li>
                                <li><a data-filter=".3d" href="#">3D</a></li>               
                                <li><a data-filter=".Marketing" href="#">Marketing</a></li> 
                            </ul>
                        </div>
                        <div class="gallery-container gallery-fancybox masonry-gallery row">
                            <div class="col-lg-4 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/A1DumsterRental.png" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>A1 Dumpster Rental</h3>
                                            <span>Wilmington, Delaware</span>
                                            <a href="portfolio-single.php">View Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/A1DumsterRental.png" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>A1 Dumpster Rental</h3>
                                            <span>Wilmington, Delaware</span>
                                            <a href="portfolio-single.php">View Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/A1DumsterRental.png" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>A1 Dumpster Rental</h3>
                                            <span>Wilmington, Delaware</span>
                                            <a href="portfolio-single.php">View Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div>

        <!-- start wpo-site-footer -->
        <?php include './partials/footer.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>
</body>

</html>