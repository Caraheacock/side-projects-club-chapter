<?php
$column_classes = 'xs-span12';

if ($puzzle_options_data['column_widths'] == '1-2_1-2') {
    $column_classes .= ' md-span6';
} elseif (($puzzle_options_data['column_widths'] == '1-3_2-3' && $c == 0) || ($puzzle_options_data['column_widths'] == '2-3_1-3' && $c == 1)) {
    $column_classes .= ' md-span4';
} elseif (($puzzle_options_data['column_widths'] == '1-3_2-3' && $c == 1) || ($puzzle_options_data['column_widths'] == '2-3_1-3' && $c == 0)) {
    $column_classes .= ' md-span8';
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