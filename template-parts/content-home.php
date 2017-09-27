<?php
/**
 * Template part for displaying posts with thumbnails
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoBlog_s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="thumbnail">
		<?php the_post_thumbnail(); ?>
    </div><!-- .thumbnail -->

    <header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h2 class="entry-title">', '</h2> </a>' );
		endif; ?>
    </header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
