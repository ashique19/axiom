<?php
class Fancy_Faq_Post_Type{
	
	
	public function __construct() {
		
		add_action( 'init', array( &$this, 'init' ) );
	}
	

public function init() {
	
	$labels = array(
	'name' 					=> 'Fancy FAQ',
	'singular_name' 		=> 'Question',
	'add_new' 				=> 'Add Question',
	'add_new_item' 			=> 'Add New Question',
	'edit_item' 			=> 'Edit Question',
	'new_item' 				=> 'Add New Question',
	'view_item'				=> 'View Item',
	'search_items' 			=> 'Search Faq',
	'not_found' 			=> 'No faq items found',
	'not_found_in_trash' 	=> 'No faq items found in trash',
	);

	$args = array(
	'labels' 				=> $labels,
	'public' 				=> true,
	'menu_icon'             => plugins_url('/wp-fancyfaq/images/faq.png'),
	'publicly_queryable'    => true,
	'show_ui'               => true,
	'query_var'             => true,
	'permalink_epmask'      => true,
	'supports' 				=> array( 'title','editor','page-attributes' ),
	'rewrite'               => array( 'slug' => 'fancyfaq', 'with_front' => false ),
	'menu_position' 		=> 5,
	'show_in_menu'          => true,
	'has_archive' 			=> true

	);
	
	register_post_type( 'fancyfaq', $args);
	
	$labels = array(
	'name'                          => 'Categories',
	'singular_name'                 => 'Category',
	'search_items'                  => 'Search Categories',
	'popular_items'                 => 'Popular Categories',
	'all_items'                     => 'All Categories',
	'parent_item'                   => 'Parent Category',
	'edit_item'                     => 'Edit Category',
	'update_item'                   => 'Update Category',
	'add_new_item'                  => 'Add New Category',
	'new_item_name'                 => 'New Category',
	'separate_items_with_commas'    => 'Separate Categories with commas',
	'add_or_remove_items'           => 'Add or remove Categories',
	'choose_from_most_used'         => 'Choose from most used Categories',
	);

	$args = array(
	'label'                         => 'Categories',
	'labels'                        => $labels,
	'public'                        => true,
	'hierarchical'                  => true,
	'show_ui'                       => true,
	'show_in_nav_menus'             => true,
	'args'                          => array( 'orderby' => 'term_order' ),
	'rewrite'                       => array( 'slug' => 'fancyfaq_cat', 'with_front' => false ),
	'query_var'                     => true
	);

	register_taxonomy( 'fancyfaq_cat', 'fancyfaq', $args );
	
	
}
	
}

$GLOBALS['fancy_faq_post_type'] = new Fancy_Faq_Post_Type();
