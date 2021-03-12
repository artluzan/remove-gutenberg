//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

add_filter('use_block_editor_for_post_type', '__return_false', 10); // Hide editor

add_action('init', function() {
remove_post_type_support( 'post', 'editor' );
remove_post_type_support( 'page', 'editor' );
}, 99);
