<footer class="footer">

    <div class="footer__top">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-10">
                    <div class="footer__inner">
                        <div class="footer__logo">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }
                            ?>
                        </div>
                        <p class="footer__nav-title">
                            Body
                        </p>
                        <p class="footer__nav-title">
                            Travel
                        </p>
                        <p class="footer__nav-title">
                            Account
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__center">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-10">
                    <div class="footer__inner">
                        <div class="footer__description">
                            <p>We are location independent bloggers, digital influencers, small group tour organizers and world travelers with a serious passion for the sun, the sea and adventure.

                            </p>
                            <p> Eight years and 60-something countries later and we are still on the road.</p>
                        </div>

                        <div class="footer__nav">
                            <ul>
                                <li>Add: 221B John hope
                                    Street, Lekki, Lagos,
                                    Nigeria.</li>
                                <li><a href="">T: +234 706 507 8544</a></li>
                                <li><a href="">E: info@redexplorers.com</a></li>
                                <li><a href="">W: www. redexplorers.com</a></li>
                            </ul>
                        </div>

                        <div class="footer__nav">
                            <ul>
                                <li><a href="">My List</a></li>
                                <li><a href="">My Requests</a></li>
                                <li><a href="">My Requests</a></li>
                                <li><a href="">My Requests</a></li>
                                <li><a href="">My Requests</a></li>
                            </ul>
                        </div>

                        <div class="footer__nav">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'container'      => false,
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">

    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>