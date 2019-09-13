<?php
/*
*Template Name: Get in Touch
*/
if (!defined('ABSPATH')) exit; // Exit if accessed directly
get_header();
$title = get_field('title');
$subtitle = get_field('subtitle');
$email = get_field('email');
$form_title = get_field('form_title');
$contact_form_shortcode = get_field('contact_form_shortcode');
?>

    <div class="custom-container text-center-sm">
        <div class="space-3 display-xs"></div>
        <div class="space-2"></div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-10 offset-1">
                <?php if($title): ?><h1 class="h1"><?php echo $title; ?></h1><?php endif; ?>
                <div class="space-4"></div>
                <?php if($subtitle || $email): ?><div class="simple-article"><p><?php echo $subtitle; ?> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p></div><?php endif; ?>
                <div class="space-3 display-sm"></div>
            </div>

            <div class="col-xl-6 offset-xl-2 col-lg-7 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                <div class="white-box">
                    <?php if($form_title): ?><h2 class="h3"><?php echo $form_title; ?></h2><?php endif; ?>
                    <div class="space-4"></div>
                    <?php echo $contact_form_shortcode ? do_shortcode($contact_form_shortcode) : ''; ?>
                </div>
            </div>
        </div>
        <div class="space-1"></div>
    </div>

<?php get_footer(); ?>