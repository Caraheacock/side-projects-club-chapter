<nav id="nav"<?php echo (is_front_page() ? ' class="home-nav"' : ''); ?>>
    <div class="row">
        <div class="column xs-span8 sm-span6 md-span4 lg-span3 nav-logo">
            <a class="vector-container small-logo-container" href="<?php echo get_site_url(); ?>">
                <?php include(TEMPLATEPATH . '/assets/images/logo-icon.svg'); ?>
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