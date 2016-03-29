<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(''); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('smooth-scroll-enabled'); ?>>
    <?php
    $header_styles = '';
    
    if (is_front_page()) {
        $chapter_name = get_theme_mod('chapter_name');
        $header_background_color = get_theme_mod('header_background_color');
        $header_logo_scheme = get_theme_mod('header_logo_scheme');
        $header_background_image = get_theme_mod('header_background_image');
        
        $header_styles = ' class="';
        $header_styles .= (!empty($header_background_color) ? $header_background_color : 'gray') . '-background';
        $header_styles .= (!empty($header_logo_scheme) ? ' ' . $header_logo_scheme . '-logo-scheme' : '');
        $header_styles .= (!empty($header_background_image) ? ' has-background-image' : '');
        $header_styles .= '"';
        
        if (!empty($header_background_image)) {
            $header_styles .= ' style="background-image: url(' . wp_get_attachment_url($header_background_image, 'full') . ');"';
        }
    }
    ?>
    <header id="header"<?php echo $header_styles; ?>>
        <?php if (is_front_page()) : ?>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="header-content-logo">
                    <?php insert_svg(get_stylesheet_directory() . '/assets/images/logo.svg'); ?>
                </div>
                <?php if (!empty($chapter_name)) : ?>
                <h3><?php echo $chapter_name; ?> Chapter</h3>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <nav id="nav"<?php echo (is_front_page() ? ' class="home-nav"' : ''); ?>>
            <div class="row">
                <div class="column xs-span8 sm-span6 md-span4 lg-span3 nav-logo">
                    <a class="vector-container small-logo-container" href="<?php echo get_site_url(); ?>">
                        <?php include('assets/images/logo-icon.svg'); ?>
                    </a>
                </div>
                <div class="column xs-span4 sm-span6 md-span8 lg-span9">
                    <?php
                    if (has_nav_menu('primary')) {
                        $args = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_id'    => 'nav-menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );
                        wp_nav_menu($args);
                    
                        $args = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_id'    => 'dl-menu',
                            'container_class' => 'dl-menuwrapper',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<button class="dl-trigger">Open Menu</button><ul class="dl-menu">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );
                        wp_nav_menu($args);
                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>