<?php

function set_template_name() {
	global $template_name;
	$template_name = 'page';

	if( is_front_page() || is_home() ) { // Home
		$template_name = 'home';
	}
	
	elseif( is_singular('post') ) { // Article
		$template_name = 'article';
	}

	elseif( is_singular('servico') || is_singular('curso') ) { // Article
		$template_name = 'single';
	}
	elseif( is_singular('evento') ) { // Article
		$template_name = 'single';
	}

	elseif( is_category() ) { // Category
		$template_name = 'category';
	}
	
	elseif( is_tax('tag') ) { // Tags
		$template_name = 'tag';
	}

	elseif ( is_tax() ) {
		$template_name = 'category';
	}
	
	elseif( is_page() ) {
		$page_template_slug = get_page_template_slug();
		$template_name = str_replace("template-","", $page_template_slug);
		$template_name = str_replace(".php","", $template_name);
	}
	
	elseif( is_search() ) { // Search
		$template_name = 'search';
	}
	
	elseif( is_404() ) { // 404
		$template_name = '404';
	}
}
add_action( 'wp_enqueue_scripts', 'set_template_name' );

?>