<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redy
 */
//Get ACF fields
$logo = get_field('logo', 'option');
$instagram = get_field('instagram', 'option');
$facebook = get_field('facebook', 'option');
$twitter = get_field('twitter', 'option');
$form_title = get_field('form_title', 'option');
$form_text = get_field('form_text', 'option');
$form_shortcode = get_field('form_shortcode', 'option');
$copyright = get_field('copyright', 'option');
$form_privacy = get_field('form_privacy', 'option');
?>
<!-- GIVES BACK SECTION END -->
<div class="space-1"></div>
</div>
<!-- CONTENT-BLOCK END -->

<!-- FOOTER -->
<footer>
    <div class="space-2 none-xs"></div>
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-2 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-menu">
                    <h6 class="h6"><?php esc_html_e( 'General stuff', 'redy' ); ?></h6>
                    <?php
                    wp_nav_menu( [
                        'theme_location'  => 'footer-menu-1'
                    ] );
                    ?>
                </div>
                <div class="space-4 display-xs"></div>
            </div>

            <div class="col-xl-2 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-menu">
                    <h6 class="h6"><?php esc_html_e( 'Legal stuff', 'redy' ); ?></h6>
                    <?php
                    wp_nav_menu( [
                        'theme_location'  => 'footer-menu-2'
                    ] );
                    ?>
                </div>
                <div class="space-4"></div>
                <?php if($instagram || $facebook || $twitter): ?>
                <div class="footer-menu">
                    <h6 class="h6"><?php esc_html_e( 'Follow Us', 'redy' ); ?></h6>
                    <div class="social">
                        <?php if($instagram): ?>
                        <a href="<?php echo $instagram; ?>" target="_blank">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                 style="enable-background:new 0 0 512 512;" xml:space="preserve"><path
                                        d="M352 0H160C71.648 0 0 71.648 0 160v192c0 88.352 71.648 160 160 160h192c88.352 0 160-71.648 160-160V160C512 71.648 440.352 0 352 0zm112 352c0 61.76-50.24 112-112 112H160c-61.76 0-112-50.24-112-112V160C48 98.24 98.24 48 160 48h192c61.76 0 112 50.24 112 112v192z"/>
                                <path d="M256 128c-70.688 0-128 57.312-128 128s57.312 128 128 128 128-57.312 128-128-57.312-128-128-128zm0 208c-44.096 0-80-35.904-80-80 0-44.128 35.904-80 80-80s80 35.872 80 80c0 44.096-35.904 80-80 80z"/>
                                <circle cx="393.6" cy="118.4" r="17.056"/></svg>
                        </a>
                        <?php endif; ?>
                        <?php if($facebook): ?>
                        <a href="<?php echo $facebook; ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="470.513px" height="470.513px"
                                 viewBox="0 0 470.513 470.513">
                                <path d="M271.521 154.17v-40.541c0-6.086.28-10.8.849-14.13.567-3.335 1.857-6.615 3.859-9.853 1.999-3.236 5.236-5.47 9.706-6.708 4.476-1.24 10.424-1.858 17.85-1.858h40.539V0h-64.809c-37.5 0-64.433 8.897-80.803 26.691-16.368 17.798-24.551 44.014-24.551 78.658v48.82h-48.542v81.086h48.539v235.256h97.362V235.256h64.805l8.566-81.086h-73.37z"/>
                            </svg>
                        </a>
                        <?php endif; ?>
                        <?php if($twitter): ?>
                        <a href="<?php echo $twitter; ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php if($form_title): ?>
            <div class="col-xl-5 offset-xl-3 col-md-6 col-xs-12">
                <div class="red-box">
                    <?php if($form_title): ?><h6 class="h6 light"><?php echo $form_title; ?></h6><?php endif; ?>
                    <div class="space-5"></div>
                    <?php if($form_text): ?>
                    <div class="simple-article small light">
                        <p><?php echo $form_text; ?></p>
                    </div>
                    <?php endif; ?>
                    <div class="space-5"></div>
                    <!-- <form action="/" class="form">
                        <input type="text" name="name" placeholder="First Name">
                        <input type="email" name="email" placeholder="Email Address">
                        <span class="button light open-popup" data-rel="thanks-popup">Sign up</span>
                    </form> -->
                    <form action="/" class="form gives-back-form">
                        <input type="text" name="first-name" placeholder="<?php esc_html_e( 'First Name', 'redy' ); ?>">
                        <input type="text" name="last-name" placeholder="<?php esc_html_e( 'Last Name', 'redy' ); ?>">
                        <input type="email" name="email" placeholder="<?php esc_html_e( 'Email Address', 'redy' ); ?>">
                        <span class="button light open-popup" data-rel="thanks-popup"><?php esc_html_e( 'Sign up', 'redy' ); ?></span>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="space-1 none-xs"></div>
        <hr class="hr">
        <div class="row">
            <div class="col">
                <?php if($logo): ?>
                <a href="/" class="lazy-load-img" data-img-src="<?php echo $logo['url']; ?>">
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                </a>
                <?php endif; ?>
                <?php if($copyright): ?><span>© <?php echo $copyright; ?> </span><?php endif; ?>
            </div>
        </div>
    </div>
    <div class="space-1 none-xs"></div>
</footer>
<!-- FOOTER END -->
<?php wp_footer(); ?>

<!-- POPUP CONTENT -->
<div class="popup-wrapper">
    <div class="bg-layer"></div>
    <!-- CLUBHOUSE POPUP -->
    <div class="popup-content" data-rel="clubhouse-popup">
        <div class="layer-close"></div>
        <div class="popup-container size-1">
            <div class="pattern lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/popup-pattern.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
            </div>
            <div class="popup-align">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <h5 class="title"><?php esc_html_e( 'Create a new account', 'redy' ); ?></h5>
                        <div class="space-5"></div>
                        <form action="/" class="form row">
                            <div class="col-12">
                                <input type="text" name="name" placeholder="<?php esc_html_e( 'First Name', 'redy' ); ?>">
                            </div>
                            <div class="col-12">
                                <input type="text" name="name" placeholder="<?php esc_html_e( 'Last Name', 'redy' ); ?>">
                            </div>
                            <div class="col-lg-8 col-xs-12">
                                <input type="email" name="email" placeholder="<?php esc_html_e( 'Email Address', 'redy' ); ?>">
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <select id="select-1" class="select js-example-placeholder-single" name="age"
                                        data-placeholder="Age">
                                    <option value="age-1">10 - 19</option>
                                    <option value="age-2">20 - 24</option>
                                    <option value="age-3">25 - 34</option>
                                    <option value="age-4">35 - 49</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <input type="password" name="password" placeholder="<?php esc_html_e( 'Password', 'redy' ); ?>">
                            </div>
                            <div class="col-12">
                                <input type="password" name="password" placeholder="<?php esc_html_e( 'Confirm Password', 'redy' ); ?>">
                            </div>
                            <div class="col-12">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span><?php esc_html_e( 'Remember Me', 'redy' ); ?></span>
                                </label>
                            </div>
                            <div class="col-12 text-center">
                                <span class="button open-popup" data-rel="thanks-popup"><?php esc_html_e( 'Register', 'redy' ); ?></span>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <h5 class="title"><?php esc_html_e( 'All the Ladies in the Club!', 'redy' ); ?></h5>
                        <div class="space-5"></div>
                        <div class="simple-article">
                            <p><?php esc_html_e( 'Need to change, pause or cancel your order? Put your hands up! Then knock three times and say the secret password. Just kidding! (Although we do need your password.)', 'redy' ); ?></p>
                        </div>
                        <div class="space-5"></div>
                        <form action="/" class="form row">
                            <div class="col-12">
                                <input type="email" name="email" placeholder="<?php esc_html_e( 'Email', 'redy' ); ?>">
                            </div>
                            <div class="col-12">
                                <input type="password" name="password" placeholder="<?php esc_html_e( 'Password', 'redy' ); ?>">
                            </div>
                            <div class="col-6">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span><?php esc_html_e( 'Remember Me', 'redy' ); ?></span>
                                </label>
                            </div>
                            <div class="col-6 text-right">
                                <span class="simple-article open-popup"><?php esc_html_e( 'Forgot Password', 'redy' ); ?></span>
                            </div>
                            <div class="col-12 text-center">
                                <a href="account-address.html" class="button"><?php esc_html_e( 'Login', 'redy' ); ?></a>
                            </div>
                        </form>
                    </div>
                    <?php if($form_privacy): ?>
                    <div class="col-12">
                        <div class="space-6"></div>
                        <div class="text-center">
                            <div class="simple-article">
                                <p><?php echo $form_privacy; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="button-close">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- CLUBHOUSE POPUP END -->

    <!-- THANKS POPUP -->
    <div class="popup-content" data-rel="thanks-popup">
        <div class="layer-close"></div>
        <div class="popup-container size-3">
            <div class="pattern lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/popup-pattern-small.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
            </div>
            <div class="popup-align text-center">
                <div class="space-4"></div>
                <h3><?php esc_html_e( 'Your subscription is completed!', 'redy' ); ?></h3>
                <div class="space-4"></div>
                <div class="simple-article">
                    <p><?php esc_html_e( 'text', 'redy' ); ?> <span>REDY</span>.</p>
                </div>
            </div>
            <div class="button-close">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- THANKS POPUP END -->
</div>
<!-- POPUP CONTENT END -->
</body>
</html>
