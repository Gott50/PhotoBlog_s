<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PhotoBlog_s
 */

get_header(); ?>

<div class="post-navigation">
    <?php echo photoblog_s_get_svg(array('icon' => 'angle-down')); ?>
    <?php previous_post_link(); ?>
    <?php echo photoblog_s_get_svg(array('icon' => 'angle-down')); ?>
    <?php next_post_link(); ?>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
