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
<html ⚡ <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>">
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
        <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

        <style amp-custom>
            <?php require_once 'style-amp.css';?>
        </style>

        <title><?php bloginfo( 'name' ); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>

<!--        SEO-->
        <?php
        ob_start();
        wp_head();
        $head = ob_get_contents();
        ob_end_clean();
        $head = preg_replace( '/(<script)(.*?)(javascript)(.*?)(script>)/is', "", "<script type=\"text/javascript\"></script>" . $head );
        $head = preg_replace( '/<script>(.*?)(script>)/is', "", "<script></script>" . $head );
        $head = preg_replace( '/(<link rel=)(.*?)(stylesheet|canonical)(.*?)(>)/is', "", '<link rel="stylesheet">' . $head );
        $head = preg_replace( '/(<style)(.*?)(style>)/is', "", '<style></style>' . $head );
        echo $head;
        ?>
    </head>

<body <?php body_class(); ?>>

<amp-sidebar class="main-navigation toggled" id="sidebar1" layout="nodisplay" side="right">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
	) );
	?>
</amp-sidebar>

<div id="page" class="site">
    <header id="masthead" class="site-header">
		<?php if ( has_nav_menu( 'primary' ) ) : ?>

            <nav id="site-navigation" class="main-navigation">
                <button on='tap:sidebar1.toggle' class="menu-toggle" aria-controls="primary-menu"
                        aria-label="menu-toggle" aria-expanded="false">
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
                        <amp-img class="custom-logo" height="400" width="400" src="<?php echo esc_url( $logo[0] ) ?>"></amp-img>
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
            $query = new WP_Query("posts_per_page=-1");
			if ( $query->have_posts() ) :
				?>

                <div class="content-home">
					<?php
					/* Start the Loop */
					while ( $query->have_posts() ) : $query->the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
                            get_template_part( 'template-parts/content', 'amp' );

					endwhile;
					?>
                </div>

				<?php
				the_posts_navigation();

			else :

                get_template_part( 'template-parts/content', 'none' );

			endif;
            wp_reset_postdata();
			?>

        </main><!-- #main -->
    </div><!-- #primary -->

</div><!-- #content -->
    <footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<?php
			wp_nav_menu(array(
				'theme_location'=>'footer',
				'menu_id'        => 'footer-menu',));
			?>
		<?php endif;?>
    </footer><!-- #colophon -->
</div><!-- #page -->
<?php echo get_the_content(); ?>
</body>
</html>
