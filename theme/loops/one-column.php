<?php
$column_classes = 'xs-span12';

if ($puzzle_column['width'] == 'medium') {
    $column_classes .= ' md-span9 md-center';
} else if ($puzzle_column['width'] == 'narrow') {
    $column_classes .= ' md-span6 md-center';
}

if (!empty($puzzle_column['align_text'])) {
    $column_classes .= ' align-text-' . $puzzle_column['align_text'];
}
?>
<div class="column <?php echo $column_classes; ?>">
    <div class="column-inner">
        <?php echo apply_filters('the_content', $puzzle_column['content']); ?>
    </div>
</div>