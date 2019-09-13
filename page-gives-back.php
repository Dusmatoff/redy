<?php
/*
*Template Name: Gives Back
*/
if (!defined('ABSPATH')) exit; // Exit if accessed directly
get_header();
$title = get_field('title');
$subtitle = get_field('subtitle');
$text = get_field('text');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
?>

<div class="custom-container gives-back">
    <!-- PATTERNS -->
    <div class="pattern">
        <div class="lazy-load-img rellax" data-rellax-speed="1.75" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/step-pattern-animated_0.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
        </div>
        <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/step-pattern_0.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
        </div>
    </div>
    <div class="pattern rellax" data-rellax-speed="-.75">
        <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/step-select-animated_1.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
        </div>
        <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/step-select_1.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
        </div>
    </div>
    <div class="pattern rellax" data-rellax-speed="1">
        <div class="lazy-load-img" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/step-select-animated_2.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
        </div>
        <div class="lazy-load-img only-ie-pattern" data-img-src="<?php echo get_template_directory_uri(); ?>/svg/step-select_2.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="img">
        </div>
    </div>
    <!-- PATTERNS END -->
    <div class="space-1"></div>
    <div class="row">
        <div class="text-center col-12">
            <?php if($title): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
            <div class="space-4"></div>
            <?php if($title): ?><span class="h6"><?php echo $subtitle; ?></span><?php endif; ?>
            <div class="space-4"></div>
            <?php if($text): ?><div class="simple-article"><?php echo $text; ?></div><?php endif; ?>
            <div class="space-1"></div>
            <div class="stamp">
                <div class="lazy-load-bg" data-bg="<?php echo get_template_directory_uri(); ?>/svg/path.svg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div>
                <div class="lazy-load-bg" data-bg="<?php echo get_template_directory_uri(); ?>/svg/stamp-animated.svg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div>
                <div class="lazy-load-bg only-ie-pattern" data-bg="<?php echo get_template_directory_uri(); ?>/svg/stamp.svg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></div>
            </div>
            <div class="space-4"></div>
            <?php if($button_text && $button_link): ?><a href="<?php echo $button_link; ?>" class="button"><?php echo $button_text; ?></a><?php endif; ?>
        </div>
    </div>
    <div class="space-1 none-sm"></div>
</div>
<?php get_footer(); ?>
