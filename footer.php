
<footer class="footer-2 footer-wrap">
    <div class="footer-widgets-wrapper text-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 pe-xl-0 col-sm-6 col-12">
                    <div class="single-footer-wid site_info_widget">
                        <div class="wid-title">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="contact-us">
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <p>+673 853 605 985</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <p>info@example.com</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info">
                                    <p>cox address</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 offset-xl-1 col-xl-3 ps-xl-5 col-12">
                    <div class="single-footer-wid">
                        <div class="wid-title">
                            <h3>Quick Links</h3>
                        </div>
                        <?php
                            /*
                             * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                             * */
                            wp_nav_menu(array(
                                'theme_location'=>'quick-links',
                                'menu_class'=>''
                            ))
                        ?>
                    </div>
                </div> <!-- /.col-lg-3 - single-footer-wid -->

                <div class="col-sm-6 col-xl-4 offset-xl-1 col-12">
                    <div class="single-footer-wid newsletter_widget">
                        <div class="wid-title">
                            <h3>Resources</h3>
                        </div>
                        <?php
                            /*
                             * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                             * */
                            wp_nav_menu(array(
                                'theme_location'=>'resources',
                                'menu_class'=>''
                            ))
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12 text-center text-md-start">
                    <div class="copyright-info">
                        <p>&copy; 2022 Copyright By <a href="<?php echo bloginfo('url') ?>">CoxAlert</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="footer-menu mt-3 mt-md-0 text-center text-md-end">
                        <?php
                            /*
                             * https://developer.wordpress.org/reference/functions/wp_nav_menu/
                             * */
                            wp_nav_menu(array(
                                'theme_location'=>'copyright-menu',
                                'menu_class'=>''
                            ))
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>

