<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ExamGeekhubWP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <header>
        <div class="container">
            <div class="header_position">
                <nav class="menu_nav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                </nav>
                <?php the_custom_logo($blog_id); ?>
                <div class="search">
                    <p>
                        SEARCH POSTS
                    </p>
                </div>
                <i class="fas fa-search"></i>
            </div>
        </div>
    </header>
</header>