<?php
$page_sections = get_post_meta($post->ID, 'puzzle_page_sections', true);

if (!empty($page_sections)) :
    $s = 0;
    
    foreach ($page_sections as $page_section) :
        $puzzle_options_data = $page_section['options'];
        $puzzle_columns_data = (!empty($page_section['columns']) ? $page_section['columns'] : false);
        $puzzle_section_type = $page_section['type'];
        $main_content = (!empty($puzzle_options_data['main_content']) ? $puzzle_options_data['main_content'] : false);
        ?>
        <section id="<?php echo section_id($s, $page_section); ?>" class="<?php echo section_classes($page_section); ?>">
            <?php if (!empty($puzzle_options_data['headline'])) : ?>
            <div class="row puzzle-section-headline">
                <div class="column xs-span12">
                    <div class="column-inner">
                        <h2><?php echo $puzzle_options_data['headline']; ?></h2>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if (!empty($main_content)) : ?>
            <div class="row puzzle-main-content">
                <div class="column xs-span12 md-span9 md-center">
                    <div class="column-inner">
                        <?php echo apply_filters('the_content', $main_content); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="row<?php echo ($puzzle_section_type == 'accordions' ? ' puzzle-accordions-content' : ''); ?>">
                <?php
                $loop_file = 'theme/loops/' . $puzzle_section_type . '.php';
        
                foreach($puzzle_columns_data as $puzzle_column) {
                    include(locate_template($loop_file));
                }
                ?>
            </div>
        </section>
        <?php
        $s++;
    endforeach;
endif;

?>