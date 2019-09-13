<?php
/**
 * Template Name: Page
 */
get_header();
?>

    <div class="custom-container">
        <div class="space-1"></div>
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                <h1 class="h3 text-center"><?php the_title(); ?></h1>
                <div class="space-4"></div>
                <div class="simple-article">
                    <?php
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
