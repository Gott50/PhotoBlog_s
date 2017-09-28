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
    <a href="<?php the_permalink(); ?>" rel="bookmark">
        <div class="thumbnail">
            <?php the_post_thumbnail(); ?>
        </div><!-- .thumbnail -->

        <header class="entry-header">
            <?php
                the_title( '<h1 class="entry-title">', '</h1>' );
            ?>
        </header><!-- .entry-header -->
    </a>
</article><!-- #post-<?php the_ID(); ?> -->
