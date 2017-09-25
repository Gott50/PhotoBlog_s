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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'photoblog_s' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="custom-header">
		    <?php the_custom_header_markup(); ?>
        </div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <div class="site-branding-wrapper">
                <div class="site-branding">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ):?>
                            <img class="custom-logo" src="<?php echo esc_url( $logo[0] ) ?>">
                        <?php else : ?>
                            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                        <?php
                        endif;

                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?>
                            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                            <?php
                        endif;

                        if ( has_nav_menu( 'social' ) ) : ?>
                            <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'photoblog_s' ); ?>">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'social',
                                    'menu_class'     => 'social-links-menu',
                                    'link_before'    => '<span class="screen-reader-text">',
                                    'link_after'     => '</span>' . photoblog_s_get_svg( array( 'icon' => 'chain' ) ),
                                ) );
                                ?>
                            </nav><!-- .social-navigation -->
                        <?php endif;?>
                </div><!-- .site-branding -->
            </div><!-- .site-branding-wrapper -->
        </a>

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'photoblog_s' ); ?></button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav><!-- #site-navigation -->
        <?php endif;?>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
