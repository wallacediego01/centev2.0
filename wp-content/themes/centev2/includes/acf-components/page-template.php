<?php 
    acf_add_local_field_group(array(
        'key' => 'group_60c2143484f1b',
        'title' => 'Conteúdo',
        'fields' => array(
            
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-cits.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'comments',
            2 => 'featured_image',
            3 => 'categories',
            4 => 'tags',
        ),
        'active' => true,
        'description' => '',
    ));
?>