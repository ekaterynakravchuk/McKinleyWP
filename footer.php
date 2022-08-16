
<footer class="footer" id="contact">
            <div class="footer__content">
                <div class="container">
                    <div class="footer__inner">
                        <div class="footer__address">
                            <a class="footer__logo" href="#">
                                <svg class="footer__logo-img">
                                    <use xlink:href="#logo"></use>
                                </svg>
                            </a>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    2972 Westheimer Road
                                </li>
                                <li class="footer__list-item">
                                    Denver, CO 80021
                                </li>
                                <li class="footer__list-item">
                                    <a class="footer__list-link" href="tel:7205550123">
                                        (720) 555-0123
                                    </a>
                                </li>
                                <li class="footer__list-item">
                                    <a class="footer__list-link email" href="mailto:info.denver@mckinley.com">
                                        info.denver@mckinley.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__mail-box">
                            <h5 class="footer__mail-title">
                                Get legal news, advice, and best practices delivered to your inbox.
                            </h5>
                            <form class="footer__form">
                                <input type="email" class="footer__form-email" placeholder="Email Address">
                                <button class="footer__form-btn" type="submit">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/btn-arrow.svg" alt="btn">
                                </button>
                            </form>
                        </div>
                        <div class="footer__social">
                            <ul class="footer__social-list">
                                <li class="footer__social-item">
                                    <a class="footer__social-link facebook" href="#">
                                        Facebook
                                    </a>
                                </li>
                                <li class="footer__social-item">
                                    <a class="footer__social-link linkedin" href="#">
                                        LinkedIn
                                    </a>
                                </li>
                                <li class="footer__social-item">
                                    <a class="footer__social-link twitter" href="#">
                                        Twitter
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <p class="footer__copyright-text">
                    © 2020 McKinley Legal Template • Powered by Webflow
                </p>
                <p class="footer__copyright-text">
                    Style Guide Licensing
                </p>
            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
    
</body>

</html>