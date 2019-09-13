<?php
/*
*Template Name: Real Talk
*/
if (!defined('ABSPATH')) exit; // Exit if accessed directly
get_header();
$real_talk_text = get_field('real_talk_text');
$categories = get_categories(array(
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => true
));
?>
<?php
// Protect against arbitrary paged values
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$posts_count = get_option('page_for_posts');
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => $posts_count,
    'paged' => $paged,
);

$the_query = new WP_Query($args);
?>
    <div class="custom-container">
        <div class="space-1"></div>
        <div class="row">
            <div class="text-center col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
                <h1 class="h1"><span><?php the_title(); ?></span></h1>
                <div class="space-4"></div>
                <?php if ($real_talk_text): ?>
                    <div class="simple-article"><?php echo $real_talk_text; ?></div><?php endif; ?>
                <div class="space-6"></div>
                <?php if($paged == 1): ?>
                <div class="blog-items-filter">
                    <span></span>
                    <ul class="simple-article">
                        <li class="active" data-filter="*">All</li>
                        <?php
                        foreach ($categories as $category) {
                            echo '<li data-filter=".' . $category->slug . '">' . $category->name . '</li>';
                        }
                        ?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="space-6"></div>
            </div>
        </div>
    </div>

<?php if ($the_query->have_posts()) : ?>
    <div class="custom-container">
        <div class="blog-items-wrap row">
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $post_id = get_the_ID(); // or use the post id if you already have it
                $category_object = get_the_category($post_id);
                $category_slug = $category_object[0]->slug;  ?>
                <div class="col-lg-4 col-sm-6 col-12 <?php echo $category_slug; ?>">
                    <div class="blog-item">
                        <div class="overflow-hidden">
                            <div class="lazy-load-bg bg" data-bg="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                        </div>
                        <div class="blog-item-info">
                            <span class="subtitle small"><?php the_category(); ?></span>
                            <h3 class="h6"><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>" class="read-more-button"><?php esc_html_e( 'Read More', 'redy' ); ?></a>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="full-size"></a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="pagination">
            <?php
            echo paginate_links( array(
                'format'  => 'page/%#%',
                'type'    => 'plain',
                'current' => $paged,
                'total'   => $the_query->max_num_pages,
                'show_all' => true,
                'end_size'  => 5,
                'mid_size' => 2,
                'next_text' => "Older articles",
                'prev_text' => "Newest articles"
            ) );
            ?>
            <!-- <a href="post.html" class="simple-article prev">Newest articles</a>
            <span class="simple-article">1</span>
            <a href="post.html" class="simple-article">2</a>
            <a href="post.html" class="simple-article">3</a>
            <span class="simple-article dots">...</span>
            <a href="post.html" class="simple-article">15</a>
            <a href="post.html" class="simple-article next">Older articles</a>-->
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>