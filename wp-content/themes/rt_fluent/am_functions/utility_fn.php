<?php
/*===================================== utility functions ==================================*/
// get current URI
function this_uri(){
    $current_url="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    return $current_url;
}


function redirect_private_content() {
    global $wp_query, $wpdb;
    if ( is_404() ) {
        $current_query = $wpdb->get_row($wp_query->request);
        if( 'private' == $current_query->post_status ) {
            wp_redirect( home_url('/') );
            exit;
        }
    }
}
add_action( 'template_redirect', 'redirect_private_content', 9 );

// disable notifications for the offer builder
add_filter( 'gform_disable_notification_4', 'disable_notification', 10, 4 );
add_filter( 'gform_disable_notification_'.$offer_form_id, 'disable_notification', 10, 4 );
function disable_notification( $is_disabled, $notification, $form, $entry ) {
    return true;
}

// get user id
function get_this_user_id() {
    if ( ! function_exists( 'wp_get_current_user' ) )
    return 0;
    $user = wp_get_current_user();
    return ( isset( $user->ID ) ? (int) $user->ID : 0 );
}
//get profile meta
function get_profile_meta($id = null){
    if ( ! function_exists( 'wp_get_current_user' ) )
    return 0;
    if(empty($id)){
        $id = get_this_user_id();
    }
    $user_info = get_userdata($id);

    return $user_info;
}

// turn off the admin bar in non-admin roles
add_filter('show_admin_bar', '__return_false');


// utility function to get project data used by apply_title()
function get_project ($id){
$this_project = get_post($id);
return $this_project;
}
// Set up 
function apply_title( $title, $id = null ) {
if(!in_the_loop())
    return $title;
    if ( is_page('2') ) {
        $id = $_GET["dealer_id"];
        $project_id = $_GET["project_id"];
        $project = get_project($project_id);
        $user = get_profile_meta($id);
        return "<h3>".$user->dealer_name." : <small>".$project->post_title."</small></h3>";
    } else {
        return $title;
    }
}
add_filter( 'the_title', 'apply_title', 10, 2 );

?>