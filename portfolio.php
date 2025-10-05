<!DOCTYPE html>
<html lang="en">
<?php include './partials/head.php' ?>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
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
                                <li><a data-filter="*" href="#" class="current">All Projects</a></li>                       
                                <li><a data-filter=".wordPress" href="#">Word Press</a></li>
                            </ul>
                        </div>
                        <div class="gallery-container gallery-fancybox masonry-gallery row">
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/1. Musab Sultan.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>Musab Sultan Alliance</h3>
                                            <span>Karachi, Sindh</span>
                                            <a href="https://musabsultanalliance.com/" target="_blank">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/2. Tailored Tech.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>Tailored Tech LLC</h3>
                                            <span></span>
                                            <a href="https://tailoredtechllc.com/ target="_blank"">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/3. Syed Limo.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>Syed Limo</h3>
                                            <span>Annapolis, Maryland</span>
                                            <a href="https://syedlimo.com/" target="_blank">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/4. The Party Bus Charter.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>The Party Bus Charter</h3>
                                            <span>Newburgh, New York</span>
                                            <a href="https://thepartybuscharter.com/" target="_blank">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/5. Link Town Car Services.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>Link Town Car Services</h3>
                                            <span>Portland, Oregon</span>
                                            <a href="https://linktowncarservices.com/" target="_blank">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/6. A1 Limo.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>A1 Limo</h3>
                                            <span>Springfeild, Virginia</span>
                                            <a href="https://a1imo.com/" target="_blank">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/7. Curry Nation Atx.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>Curry Nation Atx</h3>
                                            <span>Austin, Texas</span>
                                            <a href="https://currynationatx.com/" target="_blank">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/8. Sv Dharm Ashala.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>Sv Dharm Ashala</h3>
                                            <span>Carpentersville, Illinois</span>
                                            <a href="https://svdharmashala.org/" target="_blank">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/9. Be Lux Nash.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>Be Lux Nash</h3>
                                            <span>Nashville, Tennessee </span>
                                            <a href="https://beluxnash.com/" target="_blank">View Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 custom-grid wordPress" data-wow-duration="2000ms">
                                <div class="">
                                    <div class="wpo-protfolio-single">
                                        <div class="wpo-protfolio-img">
                                            <img src="assets/images/project/10. Bwi Airport Limo.jpg" alt="">
                                        </div>
                                        <div class="wpo-protfolio-text">
                                            <h3>Bwi Airport Limo</h3>
                                            <span>Baltimore, Maryland </span>
                                            <a href="https://bwiairportlimos.com/" target="_blank">View Website</a>
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