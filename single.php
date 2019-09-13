<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package redy
 */

get_header();
$post_banner = get_field('post_banner');
?>


	
	<div class="custom-container post">
			<div class="space-1"></div>
			<div class="row">
			    <?php 
		            while ( have_posts() ) :
			        the_post();
			    ?>
				<div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
					<h1 class="h3 text-center"><? the_title(); ?></h1>
				</div>
				<div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 col-12">
				    <?php if($post_banner): ?>
					<div class="lazy-load-img" data-img-src="<?php echo $post_banner['url']; ?>">
						<div class="space-4"></div>
						<img src="<?php echo get_template_directory_uri(); ?>/svg/preloader.svg" alt="<?php echo $post_banner['alt']; ?>">
					</div>
					<?php endif; ?>
					<div class="author">
						<div class="space-4"></div>
						<span><?php esc_html_e( 'By', 'redy' ); ?></span>
						<span class="lazy-load-bg" data-bg="<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg/preloader.svg);"></span>
						<span><?php the_author(); ?> <?php esc_html_e( 'on', 'redy' ); ?> <?php the_date('F j, Y'); ?></span>
					</div>
					<div class="space-4"></div>
					<div class="simple-article">
						<?php the_content(); ?>
					</div>
					<div class="space-4"></div>
					<?php endwhile; ?>
					<div class="flex">
						<div class="prev-next">
						    <?php previous_post_link(); ?> 
						    <?php next_post_link(); ?>
						</div>
						<?php get_template_part('template-parts/share'); ?>
					</div>
				</div>
			</div>
			
			<div class="space-1"></div>
			<div class="row">
				<div class="col-12">
					<div class="blog-items-wrap row">
					    <?php
					        $currentID = get_the_ID();
                            $args = array(
                                'post_type' => 'post',
                                'post_status'=>'publish',
                                'posts_per_page' => 3,
                                'paged' => $paged,
                                'post__not_in' => array($currentID)
                            );
                            $the_query = new WP_Query($args);
                        ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-lg-4 col-sm-6 col-12">
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
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

<?php
get_footer();
