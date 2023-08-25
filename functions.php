<?php 

include_once( get_template_directory() . '/inc/redux.php' );
include_once( get_template_directory() . '/inc/creative_custom_posts.php' );



function creative_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'google-font','//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap');
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'wowjs', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoints.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'counterjs', get_template_directory_uri() . '/assets/js/counterup.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), 1.1, true );

	
}
add_action( 'wp_enqueue_scripts', 'creative_assets' );



function creative_settings(){

            load_theme_textdomain('creative',get_template_directory_uri().'/languages');
			add_theme_support('post-thumbnails', array('sliders', 'post', 'creative_team'));

            register_nav_menus( array(
                'primary_menu' => __( 'Primary Menu', 'text_domain' ),
                'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
            ) );  

			

}
add_action('after_setup_theme', 'creative_settings');

function add_link_atts($atts){
	$atts['class'] = "nav-item nav-link";
	return $atts;
}
add_filter("nav_menu_link_attributes","add_link_atts");


function creative_my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    // return
    return $path;
    
}

add_filter('acf/settings/save_json', 'creative_my_acf_json_save_point');

function creative_numeric_posts_nav() {
  
    if( is_singular() )
        return;
  
    global $wp_query;
  
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
  
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
  
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
  
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
  
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
  
    echo '<div class="navigation"><ul>' . "\n";
  
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
  
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
  
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
  
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
  
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
  
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
  
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
  
    echo '</ul></div>' . "\n";
  
}

/**
 * Add a sidebar.
 */
function creative_sidebar() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s mb-5">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="mb-0">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'creative_sidebar' );

// Search widget
class creative_search_widget extends WP_Widget {
 
    // The construct part
    function __construct() {
        parent::__construct(
            'creative_search_widget', 
            __('Creative Search Widget', 'creative'),
            array('description' => __( 'Simple Search widget', 'creative' ), ) 
        );
     
    }
     
    // Creating widget front-end
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];
?>
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        
                            <form action="<?php echo home_url('/'); ?>" method="post">
                            <div class="input-group">
                            <input type="searh" name="s" class="form-control p-3" placeholder="Keyword" value="<?php echo get_search_query(); ?>">
                            <button type="submit" class="btn btn-primary px-4"><i class="fa fa-search"></i></button>
                            </div>    
                        </form>
                        
                    </div>
<?php 
        
        echo $args['after_widget'];
    }
     
    // Widget Backend
public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'wpb_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
    }
     
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    }

    function search_widget_load() {
        register_widget( 'creative_search_widget' );
    }
    add_action( 'widgets_init', 'search_widget_load' );