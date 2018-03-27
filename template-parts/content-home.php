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
    <a aria-label="<?php the_title(); ?>" href="<?php esc_url( the_permalink() ) ?>" rel="bookmark">
        <div class="thumbnail">
            <?php the_post_thumbnail([450]); ?>
        </div><!-- .thumbnail -->
    </a>

    <header class="entry-header">
        <?php
            the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h2 class="entry-title">', '</h2> </a>' );
        ?>
        <p class="postmetadata">
            <time class="updated" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datePublished"><?php the_time('F jS, Y'); ?></time>
            | <?php the_category( ', ' ); ?>
        </p>

        <a href="<?php esc_url( the_permalink() ) ?>" rel="bookmark">
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        </a>
    </header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
