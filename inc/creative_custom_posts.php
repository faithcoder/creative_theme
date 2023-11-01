<?php 


function creative_custom_posts() {
    // Sliders
	$labels = array(
		'name'                  => _x( 'sliders', 'Post Type General Name', 'creative' ),
		'singular_name'         => _x( 'slider', 'Post Type Singular Name', 'creative' ),
		'menu_name'             => __( 'Slider', 'creative' ),
		'name_admin_bar'        => __( 'Sliders', 'creative' ),
		
		'all_items'             => __( 'All Items', 'creative' ),
		'add_new_item'          => __( 'Add New Item', 'creative' ),
		'add_new'               => __( 'Add New', 'creative' ),
		'new_item'              => __( 'New Item', 'creative' ),
		'edit_item'             => __( 'Edit Item', 'creative' ),
		'update_item'           => __( 'Update Item', 'creative' ),
		'view_item'             => __( 'View Item', 'creative' ),
		'view_items'            => __( 'View Items', 'creative' ),
		'search_items'          => __( 'Search Item', 'creative' ),
		'not_found'             => __( 'Not found', 'creative' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'creative' ),
		'featured_image'        => __( 'Featured Image', 'creative' ),
		'set_featured_image'    => __( 'Set featured image', 'creative' ),
		'remove_featured_image' => __( 'Remove featured image', 'creative' ),
		'use_featured_image'    => __( 'Use as featured image', 'creative' ),
		'insert_into_item'      => __( 'Insert into item', 'creative' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'creative' ),
		'items_list'            => __( 'Items list', 'creative' ),
		'items_list_navigation' => __( 'Items list navigation', 'creative' ),
		'filter_items_list'     => __( 'Filter items list', 'creative' ),
	);
	$args = array(
		'label'                 => __( 'slider', 'creative' ),
		'description'           => __( 'Add your sliders', 'creative' ),
		'labels'                => $labels,
		'supports'              => array( 'title','thumbnail', 'custom-fields' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
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
		'capability_type'       => 'page',
		'menu_icon'       		=> 'dashicons-slides',
	);
	register_post_type( 'sliders', $args );


    // Services
	$labels = array(
		'name'                  => _x( 'creative services', 'Post Type General Name', 'creative' ),
		'singular_name'         => _x( 'Creative Service', 'Post Type Singular Name', 'creative' ),
		'menu_name'             => __( 'Creative Service', 'creative' ),
		'name_admin_bar'        => __( 'Creative Service', 'creative' ),
		
		'all_items'             => __( 'All Items', 'creative' ),
		'add_new_item'          => __( 'Add New Service', 'creative' ),
		'add_new'               => __( 'Add New', 'creative' ),
		'new_item'              => __( 'New Item', 'creative' ),
		'edit_item'             => __( 'Edit Item', 'creative' ),
		'update_item'           => __( 'Update Item', 'creative' ),
		'view_item'             => __( 'View Item', 'creative' ),
		'view_items'            => __( 'View Items', 'creative' ),
		'search_items'          => __( 'Search Item', 'creative' ),
		'not_found'             => __( 'Not found', 'creative' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'creative' ),
		'featured_image'        => __( 'Featured Image', 'creative' ),
		'set_featured_image'    => __( 'Set featured image', 'creative' ),
		'remove_featured_image' => __( 'Remove featured image', 'creative' ),
		'use_featured_image'    => __( 'Use as featured image', 'creative' ),
		'insert_into_item'      => __( 'Insert into item', 'creative' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'creative' ),
		'items_list'            => __( 'Items list', 'creative' ),
		'items_list_navigation' => __( 'Items list navigation', 'creative' ),
		'filter_items_list'     => __( 'Filter items list', 'creative' ),
	);
	$args = array(
		'label'                 => __( 'Creative Service', 'creative' ),
		'description'           => __( 'Add your Servcies', 'creative' ),
		'labels'                => $labels,
		'supports'              => array( 'title','thumbnail', 'custom-fields', 'editor' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'       		=> 'dashicons-image-filter',
		//'menu_icon'       		=> get_bloginfo('template_directory').'/assets/img/customer-service.png',
	
	);
	register_post_type( 'creative_services', $args );


    // Prices
	$labels = array(
		'name'                  => _x( 'Price', 'Post Type General Name', 'creative' ),
		'singular_name'         => _x( 'Price', 'Post Type Singular Name', 'creative' ),
		'menu_name'             => __( 'Creative Price', 'creative' ),
		'name_admin_bar'        => __( 'Creative Prices', 'creative' ),
		
		'all_items'             => __( 'All Items', 'creative' ),
		'add_new_item'          => __( 'Add New Price', 'creative' ),
		'add_new'               => __( 'Add New', 'creative' ),
		'new_item'              => __( 'New Item', 'creative' ),
		'edit_item'             => __( 'Edit Item', 'creative' ),
		'update_item'           => __( 'Update Item', 'creative' ),
		'view_item'             => __( 'View Item', 'creative' ),
		'view_items'            => __( 'View Items', 'creative' ),
		'search_items'          => __( 'Search Item', 'creative' ),
		'not_found'             => __( 'Not found', 'creative' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'creative' ),
		'featured_image'        => __( 'Featured Image', 'creative' ),
		'set_featured_image'    => __( 'Set featured image', 'creative' ),
		'remove_featured_image' => __( 'Remove featured image', 'creative' ),
		'use_featured_image'    => __( 'Use as featured image', 'creative' ),
		'insert_into_item'      => __( 'Insert into item', 'creative' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'creative' ),
		'items_list'            => __( 'Items list', 'creative' ),
		'items_list_navigation' => __( 'Items list navigation', 'creative' ),
		'filter_items_list'     => __( 'Filter items list', 'creative' ),
	);
	$args = array(
		'label'                 => __( 'Creative Price', 'creative' ),
		'description'           => __( 'Add your Prices', 'creative' ),
		'labels'                => $labels,
		'supports'              => array( 'title','custom-fields',),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'       		=> 'dashicons-image-filter',
		'rewrite'       		=> array('slug' => 'prices'),
		
	
	);
	register_post_type( 'creative_prices', $args );

    // Testimonials
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'creative' ),
		'singular_name'         => _x( 'Testmonial', 'Post Type Singular Name', 'creative' ),
		'menu_name'             => __( 'Creative Testmonial', 'creative' ),
		'name_admin_bar'        => __( 'Creative Testmonials', 'creative' ),
		
		'all_items'             => __( 'All Items', 'creative' ),
		'add_new_item'          => __( 'Add New Testmonial', 'creative' ),
		'add_new'               => __( 'Add New', 'creative' ),
		'new_item'              => __( 'New Item', 'creative' ),
		'edit_item'             => __( 'Edit Item', 'creative' ),
		'update_item'           => __( 'Update Item', 'creative' ),
		'view_item'             => __( 'View Item', 'creative' ),
		'view_items'            => __( 'View Items', 'creative' ),
		'search_items'          => __( 'Search Item', 'creative' ),
		'not_found'             => __( 'Not found', 'creative' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'creative' ),
		'featured_image'        => __( 'Featured Image', 'creative' ),
		'set_featured_image'    => __( 'Set featured image', 'creative' ),
		'remove_featured_image' => __( 'Remove featured image', 'creative' ),
		'use_featured_image'    => __( 'Use as featured image', 'creative' ),
		'insert_into_item'      => __( 'Insert into item', 'creative' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'creative' ),
		'items_list'            => __( 'Items list', 'creative' ),
		'items_list_navigation' => __( 'Items list navigation', 'creative' ),
		'filter_items_list'     => __( 'Filter items list', 'creative' ),
	);
	$args = array(
		'label'                 => __( 'Creative Testmonial', 'creative' ),
		'description'           => __( 'Add your Testmonial', 'creative' ),
		'labels'                => $labels,
		'supports'              => array( 'title','custom-fields',),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'       		=> 'dashicons-image-filter',
		'rewrite'       		=> array('slug' => 'testmonial'),
		
	
	);
	register_post_type( 'creative_testmonial', $args );

    // Team
	$labels = array(
		'name'                  => _x( 'Teams', 'Post Type General Name', 'creative' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'creative' ),
		'menu_name'             => __( 'Creative Team', 'creative' ),
		'name_admin_bar'        => __( 'Creative Teams', 'creative' ),
		
		'all_items'             => __( 'All Items', 'creative' ),
		'add_new_item'          => __( 'Add New Team', 'creative' ),
		'add_new'               => __( 'Add New', 'creative' ),
		'new_item'              => __( 'New Item', 'creative' ),
		'edit_item'             => __( 'Edit Item', 'creative' ),
		'update_item'           => __( 'Update Item', 'creative' ),
		'view_item'             => __( 'View Item', 'creative' ),
		'view_items'            => __( 'View Items', 'creative' ),
		'search_items'          => __( 'Search Item', 'creative' ),
		'not_found'             => __( 'Not found', 'creative' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'creative' ),
		'featured_image'        => __( 'Featured Image', 'creative' ),
		'set_featured_image'    => __( 'Set featured image', 'creative' ),
		'remove_featured_image' => __( 'Remove featured image', 'creative' ),
		'use_featured_image'    => __( 'Use as featured image', 'creative' ),
		'insert_into_item'      => __( 'Insert into item', 'creative' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'creative' ),
		'items_list'            => __( 'Items list', 'creative' ),
		'items_list_navigation' => __( 'Items list navigation', 'creative' ),
		'filter_items_list'     => __( 'Filter items list', 'creative' ),
	);
	$args = array(
		'label'                 => __( 'Creative Team', 'creative' ),
		'description'           => __( 'Add your Team', 'creative' ),
		'labels'                => $labels,
		'supports'              => array( 'title','custom-fields','thumbnail'),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'       		=> 'dashicons-image-filter',
		'rewrite'       		=> array('slug' => 'team'),
		
	
	);
	register_post_type( 'creative_team', $args );

}
add_action( 'init', 'creative_custom_posts', 0 );