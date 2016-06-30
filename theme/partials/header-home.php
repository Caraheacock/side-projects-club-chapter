<?php
$chapter_name = get_theme_mod('chapter_name');
$header_background_color = get_theme_mod('header_background_color');
$header_logo_scheme = get_theme_mod('header_logo_scheme');
$header_background_image = get_theme_mod('header_background_image');

$header_classes  = (!empty($header_background_color) ? $header_background_color : 'gray') . '-background';
$header_classes .= (!empty($header_logo_scheme) ? ' ' . $header_logo_scheme . '-logo-scheme' : '');
$header_classes .= (!empty($header_background_image) ? ' has-background-image' : '');

$header_styles = '';
if (!empty($header_background_image)) {
    $header_styles .= ' style="background-image: url(' . wp_get_attachment_url($header_background_image, 'full') . ');"';
}
?>
<header id="header" class="<?php echo $header_classes; ?>"<?php echo $header_styles; ?>>
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
    <?php get_template_part('theme/partials/nav'); ?>
</header>