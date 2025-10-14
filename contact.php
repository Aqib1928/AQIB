<!DOCTYPE html>
<html lang="en">
<?php include './partials/head.php' ?>

<body>

    <div class="page-wrapper">

        <?php include './partials/header.php' ?>

        <?php
        $mainTitle = 'Contact';
        $Title = 'Home';
        $Title2 = 'Contact';
        ?>
        <?php include './partials/page-header.php' ?>

        <section class="wpo-contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="office-info">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-location"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Address</h2>
                                            <p>Lahore, Punjab, Pakistan</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-mail"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Email Us</h2>
                                            <a href="mailto:aqib21028@gmail.com">aqib21028@gmail.com</a>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-phone-call"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Call Now</h2>
                                            <a href="tel:+923181464026">+92 318 146 4026</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="wpo-contact-title">
                            <h2>Have Any Question?</h2>
                            <p>It is a long established fact that a reader will be distracted
                                content of a page when looking.</p>
                        </div>
                        <div class="wpo-contact-form-area">
                            <form method="post" class="contact-validation-active" id="contact-form-main">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*" required>
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*" required>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="adress" id="adress" placeholder="Address">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="service" id="service" placeholder="Service Required" required>
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="note" id="note" placeholder="Message..." required></textarea>
                                </div>
                                <div class="submit-area" style="margin-top:10px;">
                                    <button type="submit" class="theme-btn-s2" style="background:#333; color:#fff; padding:10px 20px; border:none; border-radius:4px;">Get in Touch</button>
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
            </div>
            <div class="shape-1">
                <svg width="1038" height="938" viewBox="0 0 1038 938" fill="none">
                    <g opacity="0.5" filter="url(#filter0_f_39_4392)">
                        <circle cx="290.5" cy="282.5" r="247.5"></circle>
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4392" x="-457" y="-465" width="1495" height="1495" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4392"></feGaussianBlur>
                        </filter>
                    </defs>
                </svg>
            </div>
        </section>

        <section class="wpo-contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="wpo-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197061.45273038244!2d74.3343893!3d31.482940349999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore!5e1!3m2!1sen!2s!4v1759673477576!5m2!1sen!2s" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <?php include './partials/footer-two.php' ?>

    </div>
    <?php include './partials/script.php' ?>
</body>
</html>