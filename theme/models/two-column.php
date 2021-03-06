<?php
$two_column = new PuzzleSection;
$two_column->set_group_name('Two Column')
    ->set_group_name_slug('two-column')
    ->set_single_name('Column')
    ->set_fixed_column_num(2)
    ->set_admin_column_classes('xs-span12 sm-span6')
    ->set_order(20)
    ->set_markup_attr(array(
        'align_text'        => array(
            'name'          => 'Align Text',
            'input_type'    => 'select',
            'options'       => array(
                'Left'      => 'left',
                'Center'    => 'center',
                'Right'     => 'right'
            )
        ),
        'content'           => array(
            'name'          => 'Content',
            'input_type'    => 'textarea',
            'rows'          => 10,
            'save_as'       => 'content'
        )
    ))
    ->set_options(array(
        'headline'          => array(
            'name'          => 'Headline',
            'width'         => 'xs-span12 sm-span6',
            'input_type'    => 'text',
            'save_as'       => 'h2'
        ),
        'id'                => array(
            'name'          => 'Section ID',
            'width'         => 'xs-span12 sm-span6',
            'tip'           => '<strong>Use this for linking directly to a section. Lowercase letters, numbers, dashes, and underscores only.</strong> If left blank, the Section ID will be the headline lowercase with words separated by dashes (symbols will be deleted). If both the Section ID and headline are blank, the Section ID will be "section-n" where "n" is the place that the section is in on the page (e.g. the 4th section on the page will be "section-4").',
            'input_type'    => 'text'
        ),
        'column_widths'     => array(
            'name'          => 'Column Widths',
            'width'         => 'xs-span12 sm-span6',
            'input_type'    => 'select',
            'options'       => array(
                '1/2 1/2'   => '1-2_1-2',
                '1/3 2/3'   => '1-3_2-3',
                '2/3 1/3'   => '2-3_1-3'
            )
        ),
        'align_items' => array(
            'name'          => 'Vertically Align Columns',
            'width'         => 'xs-span12 sm-span6',
            'input_type'    => 'select',
            'options'       => array(
                'Top'       => 'top',
                'Center'    => 'center'
            )
        ),
        'background_color'        => array(
            'name'          => 'Background Color',
            'width'         => 'xs-span12 sm-span4',
            'input_type'    => 'select',
            'options'       => array(
                'White'             => 'white-background',
                'Light blue'        => 'light-blue-background',
                'Blue'              => 'blue-background',
                'Orange'            => 'orange-background'
            )
        ),
        'padding_top'       => array(
            'name'          => 'Top Padding',
            'width'         => 'xs span12 sm-span4',
            'input_type'    => 'select',
            'options'       => array(
                'Large'     => 'large',
                'Normal'    => 'normal',
                'None'      => 'no'
            ),
            'selected'      => 'normal'
        ),
        'padding_bottom'    => array(
            'name'          => 'Bottom Padding',
            'width'         => 'xs span12 sm-span4',
            'input_type'    => 'select',
            'options'       => array(
                'Large'     => 'large',
                'Normal'    => 'normal',
                'None'      => 'no'
            ),
            'selected'      => 'normal'
        )
    ));

$puzzle_pieces = new PuzzlePieces;
$puzzle_pieces->add_section($two_column);
?>