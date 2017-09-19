<?php
/**
 * Template part for displaying posts with thumbnails
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoBlog_s
 */

?>

<article id="post-<?php the_ID(); ?> thumbnail" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ):
		$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	endif; ?>

    <header class="entry-header" style="background-image: url(<?php echo $urlImg; ?>);">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
    </header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
