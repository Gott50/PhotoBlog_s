<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoBlog_s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php photoblog_s_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <div class="row">
            <?php if (has_post_thumbnail()): ?>

                <div class="col-xs-12 col-sm-4">
                    <div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <?php the_excerpt(); ?>
                </div>

            <?php else: ?>

                <div class="col-xs-12">
                    <?php the_excerpt(); ?>
                </div>

            <?php endif; ?>
        </div>

        <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'photoblog_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
