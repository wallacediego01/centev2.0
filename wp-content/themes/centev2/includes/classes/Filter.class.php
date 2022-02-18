<?php 
	class Filter{
        private $args = array(); 
        private $taxQuery = array();
        private $relation;

	 	public function __construct( ){
	 		if ( isset($_GET['post_type']) ) {
                $this->args = [
                    'post_type' => $_GET['post_type'],
                ];                
            }

           if ( isset($_GET['tax']) && $_GET['tax'] != "") {
                $meta_query = [];                
                $tax_query  = [];

                foreach ($_GET['tax'] as $key => $value) {
                    if( $value['index'] == "emp_unidades" ) {
                        $tax = array(
                            'taxonomy' => $value['index'],
                            'field'    => 'slug',
                            'terms'    => $value['value'],
                        );  
                        array_push($this->taxQuery, $tax );  
                        $tax_query = array(
                            'relation' => 'AND',
                            $this->taxQuery
                        ); 
                    } else if( $value['index'] == "emp_setor" ) {
                        $tax = array(
                            'taxonomy' => $value['index'],
                            'field'    => 'slug',
                            'terms'    => $value['value'],
                        );  
                        array_push($this->taxQuery, $tax );  
                        $tax_query = array(
                            'relation' => 'AND',
                            $this->taxQuery
                        ); 
                    }                          
                }                

                $this->args = [
                    'post_type'  => $_GET['post_type'],
                    'orderby'    => 'title',
                    'meta_query' => ( count($meta_query) > 0 ) ? $meta_query : array(),
                    'tax_query'  => ( count($tax_query) > 0 ) ? $tax_query : array(),
                ];                
           }
            
            // if( isset($_GET['search']) && $_GET['search'] != "false" ){
            //     $this->args = [
            //         'post_type' => $_GET['post_type'],
            //         's' => $_GET['search'],
            //         'orderby'    => 'title',
            //     ];
            // }
            

            if( isset($_GET['is_ajax']) && $_GET['is_ajax'] )
            $this->load_posts();			
     	}

		public function load_posts(){
            $query = new WP_Query( $this->args );
            $response = Utils::get_template( 'components/ajax-filter-empresas' , array( 'query' => $query ) );
			exit;
        }
    }
?>
