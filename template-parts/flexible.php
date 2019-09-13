<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
// Check if Flexible Content have blocks
if (have_rows('flexible_content')):
    while (have_rows('flexible_content')) : the_row();
        if (get_row_layout() == 'banner'):
            $banner_title = get_sub_field('banner_title');
            $banner_text = get_sub_field('banner_text');
            $banner_button_text = get_sub_field('banner_button_text');
            $banner_button_link = get_sub_field('banner_button_link');
            $banner_price = get_sub_field('banner_price');
            $banner_img = get_sub_field('banner_img');
            ?>
            <!-- BANNER -->
            <section class="home-banner">
                <div class="custom-container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="vertical-align">
                                <div>
                                    <?php if ($banner_title): ?><h1
                                            class="h1 zoom-in-left"><?php echo $banner_title; ?></h1><?php endif; ?>
                                    <div class="space-5"></div>
                                    <?php if ($banner_text): ?>
                                        <div class="simple-article"><p><?php echo $banner_text; ?></p>
                                        </div><?php endif; ?>
                                    <div class="space-4"></div>
                                    <?php if ($banner_button_text && $banner_button_link): ?><a
                                        href="<?php echo $banner_button_link; ?>"
                                        class="button"><?php echo $banner_button_text; ?></a><?php endif; ?>
                                    <br>
                                    <div class="space-4 display-sm"></div>
                                    <?php if ($banner_price): ?><span
                                            class="subtitle"><?php echo $banner_price; ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 offset-lg-2 col-md-6 col-xs-12">
                            <?php if ($banner_img): ?>
                                <div class="lazy-load-img zoom-in-right zoom-in-xs"
                                     data-img-src="<?php echo $banner_img['url']; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg"
                                         alt="<?php echo $banner_img['alt']; ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- BANNER END -->
            <div class="space-1"></div>
        <?php elseif (get_row_layout() == 'vision'):
            $vision_left_img = get_sub_field('vision_left_img');
            $vision_subtitle = get_sub_field('vision_subtitle');
            $vision_title = get_sub_field('vision_title');
            $vision_text = get_sub_field('vision_text');
            $vision_bottom_subtitle = get_sub_field('vision_bottom_subtitle');
            $vision_right_img = get_sub_field('vision_right_img');
            ?>
            <!-- VISION SECTION -->
            <section id="vision-section">
                <!-- MIDDLE PATTERN -->
                <div class="middle-pattern">
                    <div class="lazy-load-img"
                         data-img-src="<?php echo get_template_directory_uri(); ?>/svg/middle-pattern-animated.svg">
                        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
                    </div>
                    <div class="lazy-load-img only-ie-pattern"
                         data-img-src="<?php echo get_template_directory_uri(); ?>/svg/middle-pattern.svg">
                        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
                    </div>
                </div>
                <!-- MIDDLE PATTERN END -->

                <!-- PATTERNS -->
                <?php if ($vision_left_img): ?>
                    <div class="pattern lazy-load-img rellax" data-rellax-speed="-.75"
                         data-img-src="<?php echo $vision_left_img['url']; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg"
                             alt="<?php echo $vision_left_img['alt']; ?>">
                    </div>
                <?php endif; ?>
                <?php if ($vision_right_img): ?>
                    <div class="pattern lazy-load-img rellax" data-rellax-speed="-2"
                         data-img-src="<?php echo $vision_right_img['url']; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg"
                             alt="<?php echo $vision_right_img['alt']; ?>">
                    </div>
                <?php endif; ?>
                <!-- PATTERNS END -->
                <div class="custom-container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col">
                            <div class="text-center">
                                <?php if ($vision_subtitle): ?><span
                                        class="subtitle quote"><?php echo $vision_subtitle; ?></span><?php endif; ?>
                                <?php if ($vision_title): ?><h2
                                        class="h3"><?php echo $vision_title; ?></h2><?php endif; ?>
                                <div class="space-4"></div>
                                <?php if ($vision_text): ?>
                                    <div class="simple-article"> <p><?php echo $vision_text; ?></p>
                                    </div><?php endif; ?>
                                <?php if ($vision_bottom_subtitle): ?><span
                                        class="subtitle"><?php echo $vision_bottom_subtitle; ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="space-1"></div>
                    <hr>
                </div>
            </section>
            <!-- VISION SECTION END -->
            <div class="space-1"></div>
        <?php elseif (get_row_layout() == 'benefits'):
            $benefits_title = get_sub_field('benefits_title');
            ?>
            <!-- BENEFITS SECTION -->
            <section>
                <div class="custom-container">
                    <?php if ($benefits_title): ?><h2 class="title"><?php echo $benefits_title; ?></h2><?php endif; ?>
                    <div class="space-4"></div>
                    <?php if (have_rows('benefits_items')): ?>
                        <div class="row">
                            <?php while (have_rows('benefits_items')): the_row();
                                $benefit_item_animated_img = get_sub_field('benefit_item_animated_img');
                                $benefit_item_img = get_sub_field('benefit_item_img');
                                $benefit_item_subtitle = get_sub_field('benefit_item_subtitle');
                                $benefit_item_title = get_sub_field('benefit_item_title');
                                $benefit_item_text = get_sub_field('benefit_item_text');
                                ?>
                                <div class="col-md-6 col-xs-12">
                                    <div class="benefit-item">
                                        <?php if ($benefit_item_animated_img): ?>
                                        <div class="lazy-load-bg"
                                             data-bg="<?php echo $benefit_item_animated_img['url']; ?>"
                                             style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div><?php endif; ?>
                                        <?php if ($benefit_item_img): ?>
                                        <div class="lazy-load-bg only-ie-pattern"
                                             data-bg="<?php echo $benefit_img['url']; ?>"
                                             style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div><?php endif; ?>
                                        <?php if ($benefit_item_subtitle): ?><span
                                                class="subtitle small"><?php echo $benefit_item_subtitle; ?></span><?php endif; ?>
                                        <?php if ($benefit_item_title): ?><h3
                                                class="h4"><?php echo $benefit_item_title; ?></h3><?php endif; ?>
                                        <div class="space-5"></div>
                                        <?php if ($benefit_item_text): ?>
                                            <div class="simple-article">
                                                <p><?php echo $benefit_item_text; ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="space-1"></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
            <!-- BENEFITS SECTION END -->
            <div class="space-1"></div>
        <?php elseif (get_row_layout() == 'steps'):
            $steps_title = get_sub_field('steps_title');
            $steps_text = get_sub_field('steps_text');
            ?>
            <!-- STEPS CAROUSEL -->
            <section>
                <div class="container-fluid no-padding">
                    <div class="row">
                        <div class="col-md-10 col-xs-12">
                            <div class="steps-carousel swiper-entry">
                                <div class="bg lazy-load-bg"
                                     data-bg="<?php echo get_template_directory_uri(); ?>/svg/steps-carousel-pattern-animated.svg"
                                     style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div>
                                <div class="steps-carousel-heading">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12">
                                            <div class="space-2"></div>
                                            <?php if ($steps_title): ?><h2
                                                    class="title"><?php echo $steps_title; ?></h2><?php endif; ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="space-1"></div>
                                            <?php if ($steps_text): ?>
                                                <div class="simple-article large light text-center">
                                                <p><?php echo $steps_text; ?></p></div><?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-1"></div>
                                <?php if (have_rows('steps_carousel_items')): ?>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-container"
                                         data-options='{"loop": 1, "speed": 1000, "effect": "fade", "autoplay": {"delay": 4000}}'>
                                        <div class="swiper-wrapper">
                                            <?php while (have_rows('steps_carousel_items')): the_row();
                                                $step_carousel_img = get_sub_field('step_carousel_img');
                                                $step_carousel_subtitle = get_sub_field('step_carousel_subtitle');
                                                $step_carousel_title = get_sub_field('step_carousel_title');
                                                $step_carousel_button_text = get_sub_field('step_carousel_button_text');
                                                $step_carousel_button_link = get_sub_field('step_carousel_button_link');
                                                ?>
                                                <div class="swiper-slide">
                                                    <div class="row">
                                                        <div class="col-md-4 offset-md-1 col">
                                                            <?php if ($step_carousel_img): ?>
                                                                <div class="lazy-load-img"
                                                                     data-img-src="<?php echo $step_carousel_img['url']; ?>">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg"
                                                                         alt="<?php echo $step_carousel_img['alt']; ?>">
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="col-md-6 col">
                                                            <div class="text-center">
                                                                <div class="space-4"></div>
                                                                <?php if ($step_carousel_subtitle): ?><span
                                                                        class="subtitle"><?php echo $step_carousel_subtitle; ?></span><?php endif; ?>
                                                                <div class="space-4"></div>
                                                                <?php if ($step_carousel_title): ?><h3
                                                                        class="h3 light"><?php echo $step_carousel_title; ?></h3><?php endif; ?>
                                                                <div class="space-4"></div>
                                                                <?php if ($step_carousel_button_text && $step_carousel_button_link): ?>
                                                                    <a href="<?php echo $step_carousel_button_link; ?>"
                                                                       class="button light"><?php echo $step_carousel_button_text; ?></a><?php endif; ?>
                                                            </div>
                                                            <div class="space-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- STEPS CAROUSEL END -->
            <div class="space-1"></div>
            <div class="space-1 none-xs"></div>
        <?php elseif (get_row_layout() == 'gives_back'):
            $gives_back_subtitle = get_sub_field('gives_back_subtitle');
            $gives_back_title = get_sub_field('gives_back_title');
            $gives_back_button_text = get_sub_field('gives_back_button_text');
            $gives_back_button_link = get_sub_field('gives_back_button_link');
            ?>
            <!-- GIVES BACK SECTION -->
            <section id="gives-back-section">
                <!-- PATTERNS -->
                <div class="pattern lazy-load-img rellax" data-rellax-speed=".75"
                     data-img-src="<?php echo get_template_directory_uri(); ?>/svg/underpants.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="pattern">
                </div>
                <div class="pattern lazy-load-img rellax" data-rellax-speed="-1.5"
                     data-img-src="<?php echo get_template_directory_uri(); ?>/svg/gasket.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
                </div>
                <div class="pattern circle"></div>
                <!-- PATTERNS END -->
                <div class="custom-container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col">
                            <div class="white-box text-center">
                                <?php if ($gives_back_subtitle): ?>
                                    <div class="simple-article large"><p><?php echo $gives_back_subtitle; ?></p>
                                    </div><?php endif; ?>
                                <div class="space-5"></div>
                                <?php if ($gives_back_title): ?><h2
                                        class="h3"><?php echo $gives_back_title; ?></h2><?php endif; ?>
                                <div class="space-5"></div>
                                <div class="stamp">
                                    <div class="lazy-load-bg"
                                         data-bg="<?php echo get_template_directory_uri(); ?>/svg/path.svg"
                                         style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div>
                                    <div class="lazy-load-bg"
                                         data-bg="<?php echo get_template_directory_uri(); ?>/svg/stamp-animated.svg"
                                         style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div>
                                    <div class="lazy-load-bg only-ie-pattern"
                                         data-bg="<?php echo get_template_directory_uri(); ?>/svg/stamp.svg"
                                         style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div>
                                </div>
                                <div class="space-5"></div>
                                <?php if ($gives_back_button_text && $gives_back_button_link): ?><a
                                    href="<?php echo $gives_back_button_link; ?>"
                                    class="button"><?php echo $gives_back_button_text ?></a><?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == 'about_redy'):
            $about_title = get_sub_field('about_title');
            $about_text = get_sub_field('about_text');
            ?>
            <div class="custom-container">
                <div class="space-1"></div>
                <div class="row">
                    <div class="text-center col-md-10 offset-md-1 col-12">
                        <?php if($about_title): ?><h1 class="h1"><?php echo $about_title; ?><span class="dot"></span></h1><?php endif;?>
                        <div class="space-4"></div>
                        <?php if($about_text): ?><div class="simple-article"><?php echo $about_text; ?></div><?php endif; ?>
                    </div>
                </div>
            </div>
        <?php elseif (get_row_layout() == 'team'):

            ?>
            <div class="custom-container">
                <div class="space-1"></div>
                <div class="thumbs-wrap row">
                    <?php if (have_rows('team_items')): $count = -1; ?>
                        <?php while (have_rows('team_items')): the_row();
                            $team_img = get_sub_field('team_img');
                            $team_img_hover = get_sub_field('team_img_hover');
                            $team_name = get_sub_field('team_name');
                            $team_short_text = get_sub_field('team_short_text');
                            $team_long_text = get_sub_field('team_long_text');
                            $count++;
                        ?>
                    <div class="col-md-4 col-12">
                        <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/thumb-pattern-animated.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
                        </div>
                        <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/thumb-pattern.svg">
                            <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
                        </div>
                        <div class="thumb">
                            <div class="thumb-img">
                                <?php if($team_img): ?><div class="lazy-load-bg" data-bg="<?php echo $team_img['url']; ?>" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div><?php endif; ?>
                                <?php if($team_img_hover): ?><div class="lazy-load-bg" data-bg="<?php echo $team_img_hover['url']; ?>" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div><?php endif; ?>
                            </div>
                            <div class="space-4"></div>
                            <?php if($team_name): ?><h2 class="h4"><?php echo $team_name; ?></h2><?php endif; ?>
                            <?php if($team_short_text): ?><div class="simple-article"><?php echo $team_short_text; ?></div><?php endif; ?>
                            <?php if($team_long_text): ?>
                            <div class="thumb-dropdown-mobile" data-index="<?php echo $count; ?>">
                                <div class="simple-article"><?php echo $team_long_text; ?></div>
                                <span class="read-more-button"><?php esc_html_e( 'Collapse', 'redy' ); ?></span>
                            </div>
                            <?php endif; ?>
                            <span class="read-more-button"><?php esc_html_e( 'Read more', 'redy' ); ?></span>
                        </div>
                    </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (have_rows('team_items')): $index = -1; ?>
                    <div class="thumb-dropdowns-wrap col-12">
                        <div class="space-6"></div>
                        <?php while (have_rows('team_items')): the_row();
                            $team_long_text = get_sub_field('team_long_text');
                            $index++;
                            ?>
                        <div class="thumb-dropdown" data-index="<?php echo $index; ?>">
                            <div class="simple-article"><?php echo $team_long_text; ?></div>
                            <span class="read-more-button"><?php esc_html_e( 'Collapse', 'redy' ); ?></span>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>



        <?php
        endif;
    endwhile;
else :
    // Not found block
endif;
?>