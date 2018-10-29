<?php
function goal_nav() {
    register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'goal_nav' );

function remove_menus(){
  
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  
}
add_action( 'admin_menu', 'remove_menus' );

register_sidebar( array(
    'id' => 'main-sidebar',
    'name' => __( 'Main Sidebar', $text_domain ),
    'description' => __( 'This the main sidebar.', $text_domain ),
) );

add_theme_support( 'post-thumbnails' ); 

add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<div class="button"><a class="more-link" href="' . get_permalink() . '">Lees meer</a></div>';
}

/* HIDE ADMIN BAR WHEN DESIGNING SITE */
show_admin_bar( false ); 

/* CUSTOM DASHBOARD WIDGET */

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Website Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '<p>Welkom op de Goal Events VZW website! Hulp nodig? <a href="/wp-content/themes/goal/assets/guide.pdf">Klik hier</a> voor de handleiding van de website.</p>';
}

?>
