<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redy
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class('overflow-hidden'); ?> >
<!-- PRELOADER -->
<div id="loader-wrapper" style="position: fixed; left: 0; top: -100px; right: 0; bottom: -100px; z-index: 100;"></div>

<!-- HEADER PATTERN -->
<div class="header-pattern">
    <svg xmlns="http://www.w3.org/2000/svg" width="900px" height="500px" viewBox="360 620 900 500"><path transform="translate(975.484268, 610.533614) rotate(-10.000000) translate(-975.484268, -610.533614)" d><animate repeatCount="indefinite" attributeName="d" dur="9s" values="M439.160407 344.526682c-23.641297 276.701675 151.151211 425.014165 242.67254 468.642664 281.602995 134.241012 123.419689 309.538164 375.973073 322.293384 63.26795 3.19536 170.42997-102.67785 185.5207-109.05296 24.95391-10.54315 10.88822-62.859793 44.12739-141.210504 33.23916-78.350712 42.60349-72.827411 106.70782-72.827411 0 0 61.72954-23.742855 61.72954-73.602615 0-49.86055 176.66753-505.722904-86.17224-555.583455-246.95297-46.846301-301.18-29.747513-645.423878-90.4482282-99.755861-17.5900072-261.493648-24.9125499-285.134945 251.7891252z;M432.100407 300.526682c-28.641297 282.701675 154.151211 411.014165 237.67254 461.642664 289.602995 143.241012 127.419689 319.538164 398.973073 312.293384 60.26795 2.19536 172.42997-122.67785 193.5207-109.05296 25.95391-10.54315 12.88822-62.859793 42.12739-141.210504 27.23916-78.350712 39.60349-72.827411 110.70782-72.827411 1 2 62.72954-27.742855 62.72954-77.602615 3-51.86055 187.65373-515.722904-80.17224-502.583455-253.95297-51.846301-333.110-32.747513-653.423878-100.4482282-90.755861-10.5900072-257.493648-32.9125499-292.134945 237.7891252z;M435.100407 313.526682c-28.641297 280.701675 154.151211 419.014165 237.67254 465.642664 284.602995 138.241012 130.419689 319.538164 389.973073 318.293384 65.26795 4.19536 174.42997-122.67785 190.5207-109.05296 26.95391-10.54315 11.88822-62.859793 43.12739-141.210504 27.23916-78.350712 39.60349-72.827411 108.70782-72.827411 2 3 63.72954-27.742855 64.72954-77.602615 2-50.86055 180.65368-510.722904-80.17224-532.583455-275.95297-48.846301-333.110-32.747513-653.423878-96.4482282-90.755861-10.5900072-257.493648-32.9125499-292.134945 242.7891252z;M439.160407 344.526682c-23.641297 276.701675 151.151211 425.014165 242.67254 468.642664 281.602995 134.241012 123.419689 309.538164 375.973073 322.293384 63.26795 3.19536 170.42997-102.67785 185.5207-109.05296 24.95391-10.54315 10.88822-62.859793 44.12739-141.210504 33.23916-78.350712 42.60349-72.827411 106.70782-72.827411 0 0 61.72954-23.742855 61.72954-73.602615 0-49.86055 176.66753-505.722904-86.17224-555.583455-246.95297-46.846301-301.18-29.747513-645.423878-90.4482282-99.755861-17.5900072-261.493648-24.9125499-285.134945 251.7891252z"/></path></svg>
</div>

<div class="header-pattern only-ie-pattern">
    <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/img/header-pattern.png">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
    </div>
</div>
<!-- HEADER PATTERN END -->

<?php if( is_page_template('page-gives-back.php') ): ?>
<div class="pattern">
    <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/gives-back-animated-pattern.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
    <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/gives-back-pattern.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
</div>
<?php endif; ?>

<?php if( is_page_template('page-about.php') || is_page_template('page-real-talk.php' ) || is_page_template('page.php') || is_single() ): ?>
<!-- MIDDLE PATTERN LIGHT -->
<div class="middle-pattern">
    <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/middle-pattern-animated-light.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
    <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/middle-pattern-light.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
</div>
<!-- MIDDLE PATTERN LIGHT END -->
<?php endif; ?>

<?php if( !is_page_template('page-contact.php') ): ?>
<!-- FOOTER PATTERN -->
<div class="footer-pattern">
    <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/footer-pattern-animated.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
    <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/footer-pattern.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
    <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/img/footer-bottom-pattern.png">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
</div>
<!-- FOOTER PATTERN END -->
<?php endif; ?>

<!-- HEADER -->
<header>
    <div class="header-scrolled-pattern"></div>
    <div class="custom-container">
        <?php $logo = get_field('logo', 'option'); if($logo): ?>
        <!-- LOGO -->
        <a href="/" id="logo">
            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
        </a>
        <!-- LOGO END -->
        <?php endif; ?>
        <div class="menu">
            <nav>
                <?php
                    wp_nav_menu( [
                        'theme_location'  => 'menu-1'
                    ] );
                ?>
            </nav>
            <div class="user open-popup" data-rel="clubhouse-popup">
                <span><?php esc_html_e( 'Clubhouse', 'redy' ); ?></span>
                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12c0-6.63226317-5.3670044-12-12-12C5.36773683 0 0 5.36700441 0 12c0 6.5734863 5.32214353 12 12 12 6.6503906 0 12-5.3963013 12-12zM12 1.40625c5.8414307 0 10.59375 4.75231931 10.59375 10.59375 0 2.1368408-.6355591 4.1907349-1.814209 5.9304199-4.7329101-5.0910644-12.81756589-5.1002197-17.55908202 0C2.04180909 16.1907349 1.40625 14.1368408 1.40625 12 1.40625 6.15856931 6.15856931 1.40625 12 1.40625zM4.09753416 19.0546875c4.2081299-4.7200928 11.59790044-4.7189941 15.80474854 0-4.222229 4.7237549-11.58068845 4.7252198-15.80474854 0z" fill-rule="nonzero"/><path d="M11.5 13c2.48125 0 4.5-1.922619 4.5-4.28571429V7.28571429C16 4.92261905 13.98125 3 11.5 3S7 4.92261905 7 7.28571429v1.42857142C7 11.077381 9.01875 13 11.5 13zm-3-5.71428571c0-1.57552086 1.3457031-2.85714286 3-2.85714286s3 1.281622 3 2.85714286v1.42857142c0 1.57552089-1.3457031 2.85714289-3 2.85714289s-3-1.281622-3-2.85714289V7.28571429z" fill-rule="nonzero"/><circle opacity="0" cx="12.5" cy="11.5" r="11.5"/></svg>
            </div>
            <br>
            <div class="cart">
                <span><?php esc_html_e( 'Cart', 'redy' ); ?></span>
                <svg width="22px" height="24px" viewBox="0 0 22 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.7617798 10.5758057c-.4502564-.5062867-1.0861816-.78515626-1.7905884-.78515626h-1.9328613V6.3515625C17.0383301 2.84930419 14.1890259 0 10.6867676 0 7.18450927 0 4.33520508 2.84930419 4.33520508 6.3515625v3.43908694H2.40252684c-.70440675 0-1.34033203.27886956-1.79058834.78515626-.45025636.5064697-.65295413 1.1705932-.57055669 1.8700561l1.06622316 9.0633545C1.26928711 22.8825073 2.52575681 24 3.90875245 24H17.4649658c1.3828125 0 2.6394653-1.1174927 2.8011475-2.4907837l1.0662231-9.0635376c.0822144-.6994629-.1203002-1.3635864-.5705566-1.869873zm-14.7214966.6210937h9.2931518L16.6743164 22.59375H4.69940184L6.0402832 11.1968994zm7.3324585-1.40624996H8.00079347V6.3515625c0-1.48095703 1.20501708-2.68597411 2.68597413-2.68597411 1.4811401 0 2.6859741 1.20501708 2.6859741 2.68597411v3.43908694zM5.74145508 6.3515625c0-2.72680664 2.21850586-4.9453125 4.94531252-4.9453125 2.7269897 0 4.9453125 2.21850586 4.9453125 4.9453125v3.43908694h-.8530884V6.3515625c0-2.2564087-1.8358154-4.09222411-4.0922241-4.09222411-2.25640873 0-4.09222413 1.83581541-4.09222413 4.09222411v3.43908694h-.85308839V6.3515625zm-3.2371216 14.9932251l-1.06640625-9.0633545c-.03460692-.295166.04504397-.5690918.22485352-.7710571.1796265-.2021484.44238281-.3134766.73974609-.3134766h2.22180178L3.30120848 22.4425049c-.41894531-.2136841-.74194336-.6306153-.796875-1.0977173zM19.935791 12.2814331l-1.0662231 9.0633545c-.0551148.467102-.3782959.8840332-.7972412 1.0977173l-1.3229371-11.2456055h2.2218018c.2971802 0 .5599365.1113282.7397461.3134766.1796265.2019653.2594604.4758911.2248535.7710571z"/></svg>
                <div>1</div>
            </div>
            <br>
            <a href="step_1.html" class="button light"><?php esc_html_e( 'Get REDY.', 'redy' ); ?></a>
        </div>
        <div class="burger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
<!-- HEADER END -->

<!-- SHOPPING CART -->
<div class="shopping-cart-close-layer"></div>

<div class="shopping-cart">
    <div class="button-close">
        <span></span>
        <span></span>
    </div>
    <div class="shopping-cart-row header-row">
        <h5 class="h5"><?php esc_html_e( 'Shopping Cart', 'redy' ); ?></h5>
        <span>1</span>
    </div>

    <div class="shopping-cart-row item-row">
        <div class="lazy-load-bg" data-bg="<?php echo get_template_directory_uri(); ?>/svg/shopping-cart-item.svg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div>
        <span class="simple-article small">12 tampons and 12 pads</span>
        <span class="simple-article">$15</span>
        <div class="button-close small">
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="shopping-cart-row simple-row">
        <span><?php esc_html_e( 'Additional product', 'redy' ); ?></span>
        <span>$5</span>
    </div>

    <div class="shopping-cart-row simple-row total-price">
        <span><?php esc_html_e( 'Subtotal', 'redy' ); ?></span>
        <span>$20</span>
    </div>

    <div class="shopping-cart-row">
        <span class="button grey"><?php esc_html_e( 'View Bag', 'redy' ); ?></span>
        <a href="checkout.html" class="button"><?php esc_html_e( 'Checkout', 'redy' ); ?></a>
    </div>
</div>
<!-- SHOPPING CART END -->
<?php if( is_page_template('page-contact.php') ): ?>
<!-- MIDDLE PATTERN LIGHT -->
<div class="middle-pattern">
    <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/middle-pattern-animated-light.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
    <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/middle-pattern-light.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
    </div>
</div>
<!-- MIDDLE PATTERN LIGHT END -->
<?php endif; ?>

<!-- CONTENT-BLOCK -->
<div id="content-block">
    <?php if(is_page_template('page-about.php')): ?>
        <!-- PATTERN -->
        <div class="pattern">
            <div class="lazy-load-img rellax" data-rellax-speed="1.75" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/step-pattern-animated_0.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
            </div>
            <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/step-pattern_0.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
            </div>
        </div>
        <!-- PATTERN END -->
    <?php endif; ?>
    <div class="space-4"></div>