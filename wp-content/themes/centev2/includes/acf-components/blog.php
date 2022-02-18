<?php 
    acf_add_local_field_group(array(
        'key' => 'group_page_blog',
        'title' => 'Conteúdo',
        'fields' => array(
            array(
                'key' => 'field_blog1',
                'label' => "Blog",
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_title_blog1',
                'label' => 'Título',
                'name' => 'blog_title',
                'type' => 'text',
                'instructions' => 'Insira o título',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ), 
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-blog.php',
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
            1 => 'featured_image',
        ),
        'active' => true,
        'description' => '',
    ));

?>