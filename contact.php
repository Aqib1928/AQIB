<?php
$success = "";
$error = "";

// When form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $adress  = htmlspecialchars(trim($_POST['adress']));
    $service = htmlspecialchars(trim($_POST['service']));
    $note    = htmlspecialchars(trim($_POST['note']));

    // Change this email to your own
    $to = "your@email.com";  

    $subject = "New Contact Form Message from $name";

    // HTML email content
    $message = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background-color:#f9f9f9; padding:20px; }
            .container { background:#fff; padding:20px; border-radius:8px; box-shadow:0 0 10px #ddd; }
            h2 { color:#333; }
            p { margin:8px 0; }
            .footer { margin-top:20px; font-size:13px; color:#777; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>New Inquiry Received</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Address:</strong> $adress</p>
            <p><strong>Service:</strong> $service</p>
            <p><strong>Message:</strong><br>$note</p>
            <div class='footer'>
                <p>This message was sent from your website contact form.</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Headers for HTML email
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $name <$email>" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        $success = "✅ Thank you! We will respond to you shortly.";
    } else {
        $error = "❌ Error occurred while sending the message. Please try again later.";
    }
}
?>


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
        $mainTitle = 'Contact';
        $Title = 'Home';
        $Title2 = 'Contact';
        ?>
        <?php include './partials/page-header.php' ?>
        <!-- end page-title -->
        <!-- start wpo-contact-pg-section -->
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
                            <form method="post" class="contact-validation-active" id="contactForm" style="max-width:500px; margin:auto;">
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
                                    <select name="service" class="form-control" required>
                                        <option disabled selected>Services</option>
                                        <option>Photography</option>
                                        <option>The Rehearsal Dinner</option>
                                        <option>The Afterparty</option>
                                        <option>Videographers</option>
                                        <option>Perfect Cake</option>
                                        <option>All Of The Above</option>
                                    </select>
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="note" id="note" placeholder="Message..." required></textarea>
                                </div>
                                <div class="submit-area" style="margin-top:10px;">
                                    <button type="submit" class="theme-btn-s2" style="background:#333; color:#fff; padding:10px 20px; border:none; border-radius:4px;">Get in Touch</button>
                                </div>

                                <!-- SUCCESS / ERROR MESSAGES -->
                                <?php if (!empty($success)): ?>
                                    <div id="success" style="color:green; margin-top:15px; font-weight:600;"><?php echo $success; ?></div>
                                <?php endif; ?>

                                <?php if (!empty($error)): ?>
                                    <div id="error" style="color:red; margin-top:15px; font-weight:600;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>                
                </div>
            </div> <!-- end container -->
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
        <!-- end wpo-contact-pg-section -->

        <!--  start wpo-contact-map -->
        <section class="wpo-contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="wpo-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197061.45273038244!2d74.3343893!3d31.482940349999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore!5e1!3m2!1sen!2s!4v1759673477576!5m2!1sen!2s" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- end wpo-contact-map -->

        <!-- start wpo-site-footer -->
        <?php include './partials/footer-two.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>
</body>

</html>