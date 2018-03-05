<?php
/**
 * The template for displaying your latest blog posts at the home directory
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoBlog_s
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo( 'name' ); ?><?php wp_title( '-' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
		<?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header">
		<?php if ( has_nav_menu( 'primary' ) ) : ?>

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false">
					<?php
					echo photoblog_s_get_svg(array('icon' => 'bars'));
					echo photoblog_s_get_svg(array('icon' => 'close'));
					?>
                </button>

                <a class="nav-site-title" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ):?>
                        <img class="custom-logo" src="<?php echo esc_url( $logo[0] ) ?>">
					<?php else : ?>
                        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					<?php
					endif; ?>
                </a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				) );
				?>

				<?php
				if ( has_nav_menu( 'social' ) ) : ?>
                    <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'photoblog_s' ); ?>">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class' => 'menu social-links-menu',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . photoblog_s_get_svg( array( 'icon' => 'chain' ) ),
						) );
						?>
                    </nav><!-- .social-navigation -->
				<?php endif;?>
            </nav><!-- #site-navigation -->
		<?php endif;?>

        <a href="#content" class="menu-scroll-down"><?php echo photoblog_s_get_svg(array('icon' => 'arrow-right')); ?>
            <span class="screen-reader-text"><?php _e('Scroll down to content', 'photoblog_s'); ?></span>
        </a>

    </header><!-- #masthead -->

    <div id="content" class="site-content">

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>

				<?php
				endif;
				?>

                <div class="content-home">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'home' );

					endwhile;
					?>
                </div>

				<?php
				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
