<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

	<?php
	ob_start();
	wp_head();
	$head = ob_get_contents();
	ob_end_clean();
	$head = str_replace( "ga('send', 'pageview');",
		"ga('set', 'anonymizeIp', true); ga('send', 'pageview');", $head );
	echo $head;
	?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
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
