<footer class="wpo-site-footer">
    <div class="upper-contact-area">
        <div class="container">
            <div class="contact-grids">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <h2>Send me a message and make something together.</h2>
                    </div>
                    <div class="col col-lg-6">
                        <div class="send-message-btn">
                            <a class="theme-btn" href="contact.php">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="left-shape"></div>
            </div>
        </div>
    </div>
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="copyright-text">
                        <p class="copyright">Copyright &copy; 2025 AAQIB. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="widget about-widget">
                        <div class="social-icons">
                            <ul>
                                <li><a href="https://github.com/Aqib1928" target="_blank"><i class="ti-github"></i></a></li>
                                <li><a href="https://www.facebook.com/Aqi.28" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/a_aqi.28/" target="_blank"><i class="ti-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/muhammadaqib1928/" target="_blank"><i class="ti-linkedin"></i></a></li>
                                <li><a href="mailto:aqib21028@gmail.com" target="_blank"><i class="ti-email"></i></a></li>
                                <li><a href="tel:+923181464026" target="_blank"><i class="ti-mobile"></i></a></li>                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <?php
if (isset($_GET['section'])) {
    $section = $_GET['section'];
    echo "<script>
        window.addEventListener('DOMContentLoaded', function() {
            window.location.hash = '#{$section}';
        });
    </script>";
}
?>

</footer>