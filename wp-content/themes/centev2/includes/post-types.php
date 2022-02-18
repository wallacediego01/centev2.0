<?php 
    /*
        *Create taxonomy for posts types
    */
    function post_type_servico() {

        $labels = array(
            'label'  => esc_html__( 'Serviços', 'centev' ),
            'name_admin_bar'     => esc_html__( 'Serviço', 'centev' ),
            'add_new'            => esc_html__( 'Adicionar', 'centev' ),
            'add_new_item'       => esc_html__( 'Adicionar', 'centev' ),
            'new_item'           => esc_html__( 'Novo', 'centev' ),
            'edit_item'          => esc_html__( 'Editar', 'centev' ),
            'view_item'          => esc_html__( 'Ver', 'centev' ),
            'update_item'        => esc_html__( 'Atualizar', 'centev' ),
            'all_items'          => esc_html__( 'Todos', 'centev' ),
            'search_items'       => esc_html__( 'Encontrar', 'centev' ),
            'parent_item_colon'  => esc_html__( 'Parent', 'centev' ),
            'not_found'          => esc_html__( 'Nenhuma Serviço encontrada', 'centev' ),
            'not_found_in_trash' => esc_html__( 'Nenhuma Serviço encontrada na lixeira', 'centev' ),
            'name'               => esc_html__( 'Serviços', 'centev' ),
            'singular_name'      => esc_html__( 'Serviço', 'centev' ),
        );
        $args = array(
            'label'                 => __( 'Serviço', 'centev' ),
            'description'           => __( '', 'centev' ),
            'labels'                => $labels,
            'supports'              => array("title"),
            'taxonomies'            => array( ""),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'menu_icon'             => 'dashicons-awards',
            'capability_type'       => 'page',
        );
        register_post_type( 'servico', $args );
    
    }
    add_action( 'init', 'post_type_servico', 0 );

    function post_type_empresa() {

        $labels = array(
            'label'  => esc_html__( 'Empresas', 'centev' ),
            'name_admin_bar'     => esc_html__( 'Empresa', 'centev' ),
            'add_new'            => esc_html__( 'Adicionar', 'centev' ),
            'add_new_item'       => esc_html__( 'Adicionar', 'centev' ),
            'new_item'           => esc_html__( 'Novo', 'centev' ),
            'edit_item'          => esc_html__( 'Editar', 'centev' ),
            'view_item'          => esc_html__( 'Ver', 'centev' ),
            'update_item'        => esc_html__( 'Atualizar', 'centev' ),
            'all_items'          => esc_html__( 'Todos', 'centev' ),
            'search_items'       => esc_html__( 'Encontrar', 'centev' ),
            'parent_item_colon'  => esc_html__( 'Parent', 'centev' ),
            'not_found'          => esc_html__( 'Nenhuma Empresa encontrada', 'centev' ),
            'not_found_in_trash' => esc_html__( 'Nenhuma Empresa encontrada na lixeira', 'centev' ),
            'name'               => esc_html__( 'Empresas', 'centev' ),
            'singular_name'      => esc_html__( 'Empresa', 'centev' ),
        );
        $args = array(
            'label'                 => __( 'Empresa', 'centev' ),
            'description'           => __( '', 'centev' ),
            'labels'                => $labels,
            'supports'              => array("title"),
            'taxonomies'            => array( ""),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'menu_icon'             => 'dashicons-networking',
            'capability_type'       => 'page',
        );
        register_post_type( 'empresa', $args );
    
    }
    add_action( 'init', 'post_type_empresa', 0 );

    function create_tax_unidades(){
        register_taxonomy(
            'emp_unidades',
            'empresa',
            array(
                'label' => __('Unidade'),
                'rewrite' => array('slug' => 'unidade'),
                'hierarchical' => true
            )
        );
    }
    add_action('init', 'create_tax_unidades');

    function create_tax_setor(){
        register_taxonomy(
            'emp_setor',
            'empresa',
            array(
                'label' => __('Setor'),
                'rewrite' => array('slug' => 'setor'),
                'hierarchical' => true
            )
        );
    }
    add_action('init', 'create_tax_setor');

    function post_type_evento() {

        $labels = array(
            'label'  => esc_html__( 'Eventos', 'centev' ),
            'name_admin_bar'     => esc_html__( 'Evento', 'centev' ),
            'add_new'            => esc_html__( 'Adicionar', 'centev' ),
            'add_new_item'       => esc_html__( 'Adicionar', 'centev' ),
            'new_item'           => esc_html__( 'Novo', 'centev' ),
            'edit_item'          => esc_html__( 'Editar', 'centev' ),
            'view_item'          => esc_html__( 'Ver', 'centev' ),
            'update_item'        => esc_html__( 'Atualizar', 'centev' ),
            'all_items'          => esc_html__( 'Todos', 'centev' ),
            'search_items'       => esc_html__( 'Encontrar', 'centev' ),
            'parent_item_colon'  => esc_html__( 'Parent', 'centev' ),
            'not_found'          => esc_html__( 'Nenhuma Evento encontrada', 'centev' ),
            'not_found_in_trash' => esc_html__( 'Nenhuma Evento encontrada na lixeira', 'centev' ),
            'name'               => esc_html__( 'Eventos', 'centev' ),
            'singular_name'      => esc_html__( 'Evento', 'centev' ),
        );
        $args = array(
            'label'                 => __( 'Evento', 'centev' ),
            'description'           => __( '', 'centev' ),
            'labels'                => $labels,
            'supports'              => array("title"),
            'taxonomies'            => array( ""),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'menu_icon'             => 'dashicons-calendar-alt',
            'capability_type'       => 'page',
        );
        register_post_type( 'evento', $args );
    
    }
    add_action( 'init', 'post_type_evento', 0 );

    function post_type_cursos() {

        $labels = array(
            'label'  => esc_html__( 'Cursos', 'centev' ),
            'name_admin_bar'     => esc_html__( 'Curso', 'centev' ),
            'add_new'            => esc_html__( 'Adicionar', 'centev' ),
            'add_new_item'       => esc_html__( 'Adicionar', 'centev' ),
            'new_item'           => esc_html__( 'Novo', 'centev' ),
            'edit_item'          => esc_html__( 'Editar', 'centev' ),
            'view_item'          => esc_html__( 'Ver', 'centev' ),
            'update_item'        => esc_html__( 'Atualizar', 'centev' ),
            'all_items'          => esc_html__( 'Todos', 'centev' ),
            'search_items'       => esc_html__( 'Encontrar', 'centev' ),
            'parent_item_colon'  => esc_html__( 'Parent', 'centev' ),
            'not_found'          => esc_html__( 'Nenhuma Curso encontrada', 'centev' ),
            'not_found_in_trash' => esc_html__( 'Nenhuma Curso encontrada na lixeira', 'centev' ),
            'name'               => esc_html__( 'Cursos', 'centev' ),
            'singular_name'      => esc_html__( 'Curso', 'centev' ),
        );
        $args = array(
            'label'                 => __( 'Curso', 'centev' ),
            'description'           => __( '', 'centev' ),
            'labels'                => $labels,
            'supports'              => array("title"),
            'taxonomies'            => array( ""),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'menu_icon'             => 'dashicons-welcome-learn-more',
            'capability_type'       => 'page',
        );
        register_post_type( 'curso', $args );
    
    }
    add_action( 'init', 'post_type_cursos', 0 );

    function post_type_depoimentos() {

        $labels = array(
            'label'  => esc_html__( 'Depoimentos', 'centev' ),
            'name_admin_bar'     => esc_html__( 'Depoimento', 'centev' ),
            'add_new'            => esc_html__( 'Adicionar Depoimento', 'centev' ),
            'add_new_item'       => esc_html__( 'Adicionar Depoimento', 'centev' ),
            'new_item'           => esc_html__( 'Nova Depoimento', 'centev' ),
            'edit_item'          => esc_html__( 'Editar', 'centev' ),
            'view_item'          => esc_html__( 'Ver Depoimento', 'centev' ),
            'update_item'        => esc_html__( 'Atualizar', 'centev' ),
            'all_items'          => esc_html__( 'Todas Depoimentos', 'centev' ),
            'search_items'       => esc_html__( 'Encontrar Depoimento', 'centev' ),
            'parent_item_colon'  => esc_html__( 'Parent CTI', 'centev' ),
            'not_found'          => esc_html__( 'Nenhuma Depoimento encontrada', 'centev' ),
            'not_found_in_trash' => esc_html__( 'Nenhuma Depoimento encontrada na lixeira', 'centev' ),
            'name'               => esc_html__( 'Depoimentos', 'centev' ),
            'singular_name'      => esc_html__( 'Depoimento', 'centev' ),
        );
        $args = array(
            'label'                 => __( 'Depoimento', 'centev' ),
            'description'           => __( '', 'centev' ),
            'labels'                => $labels,
            'supports'              => array("title"),
            'taxonomies'            => array( ""),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'menu_icon'             => 'dashicons-format-status',
            'capability_type'       => 'page',
        );
        register_post_type( 'depoimento', $args );
    
    }
    add_action( 'init', 'post_type_depoimentos', 0 );

    function post_type_equipe() {

        $labels = array(
            'label'  => esc_html__( 'Equipe', 'centev' ),
            'name_admin_bar'     => esc_html__( 'Equipe', 'centev' ),
            'add_new'            => esc_html__( 'Adicionar Equipe', 'centev' ),
            'add_new_item'       => esc_html__( 'Adicionar Equipe', 'centev' ),
            'new_item'           => esc_html__( 'Nova Equipe', 'centev' ),
            'edit_item'          => esc_html__( 'Editar', 'centev' ),
            'view_item'          => esc_html__( 'Ver Equipe', 'centev' ),
            'update_item'        => esc_html__( 'Atualizar', 'centev' ),
            'all_items'          => esc_html__( 'Todas Equipe', 'centev' ),
            'search_items'       => esc_html__( 'Encontrar Equipe', 'centev' ),
            'parent_item_colon'  => esc_html__( 'Parent CTI', 'centev' ),
            'not_found'          => esc_html__( 'Nenhuma Equipe encontrada', 'centev' ),
            'not_found_in_trash' => esc_html__( 'Nenhuma Equipe encontrada na lixeira', 'centev' ),
            'name'               => esc_html__( 'Equipe', 'centev' ),
            'singular_name'      => esc_html__( 'Equipe', 'centev' ),
        );
        $args = array(
            'label'                 => __( 'Equipe', 'centev' ),
            'description'           => __( '', 'centev' ),
            'labels'                => $labels,
            'supports'              => array("title"),
            'taxonomies'            => array( ""),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'menu_icon'             => 'dashicons-groups',
            'capability_type'       => 'page',
        );
        register_post_type( 'equipes', $args );
    
    }
    add_action( 'init', 'post_type_equipe', 0 );

?>