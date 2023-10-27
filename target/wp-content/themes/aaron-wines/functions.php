<?php
add_action( 'after_setup_theme', 'aaronwines_setup' );
function aaronwines_setup()
{
load_theme_textdomain( 'aaronwines', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'aaronwines' ) )
);
}
add_action( 'wp_enqueue_scripts', 'aaronwines_load_scripts' );
function aaronwines_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'aaronwines_enqueue_comment_reply_script' );
function aaronwines_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'aaronwines_title' );
function aaronwines_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'aaronwines_filter_wp_title' );
function aaronwines_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'aaronwines_widgets_init' );
function aaronwines_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'aaronwines' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function aaronwines_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'aaronwines_comments_number' );
function aaronwines_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}




// Register Custom Post Type - Product
function custom_post_product() {

  $labels = array(
    'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Products', 'text_domain' ),
    'name_admin_bar'        => __( 'Products', 'text_domain' ),
    'archives'              => __( 'Product Archives', 'text_domain' ),
    'attributes'            => __( 'Product Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
    'all_items'             => __( 'All Products', 'text_domain' ),
    'add_new_item'          => __( 'Add New Product', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Product', 'text_domain' ),
    'edit_item'             => __( 'Edit Product', 'text_domain' ),
    'update_item'           => __( 'Update Product', 'text_domain' ),
    'view_item'             => __( 'View Product', 'text_domain' ),
    'view_items'            => __( 'View Products', 'text_domain' ),
    'search_items'          => __( 'Search Product', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Product', 'text_domain' ),
    'description'           => __( 'List of products', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
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
    'menu_icon'             => 'dashicons-cart',
    'taxonomies'            => array(),
    'rewrite' => array(
        'slug' => 'products',
        'hierarchical' => true
    )
  );
  register_post_type( 'product_post', $args );

}
add_action( 'init', 'custom_post_product', 0 );




// Register Custom Post Type - Trade & Media
function custom_post_trade() {

  $labels = array(
    'name'                  => _x( 'Trade & Media', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Trade & Media', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Trade & Media', 'text_domain' ),
    'name_admin_bar'        => __( 'Trade & Media', 'text_domain' ),
    'archives'              => __( 'Trade & Media Archives', 'text_domain' ),
    'attributes'            => __( 'Trade & Media Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Trade & Media:', 'text_domain' ),
    'all_items'             => __( 'All Trade & Media', 'text_domain' ),
    'add_new_item'          => __( 'Add New Trade & Media', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Trade & Media', 'text_domain' ),
    'edit_item'             => __( 'Edit Trade & Media', 'text_domain' ),
    'update_item'           => __( 'Update Trade & Media', 'text_domain' ),
    'view_item'             => __( 'View Trade & Media', 'text_domain' ),
    'view_items'            => __( 'View Trade & Media', 'text_domain' ),
    'search_items'          => __( 'Search Trade & Media', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Trade & Media', 'text_domain' ),
    'description'           => __( 'List of Trade & Media', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
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
    'menu_icon'             => 'dashicons-media-archive',
    'taxonomies'            => array(),
    'rewrite' => array(
        'slug' => 'trade',
        'hierarchical' => true
    )
  );
  register_post_type( 'trade_post', $args );

}
add_action( 'init', 'custom_post_trade', 0 );



// Custom Admin CSS
add_action('admin_head', 'custom_admin_css');

function custom_admin_css() {
  echo '<style>
    [data-name="vintage"] {
      display: none;
    }
  </style>';
}

