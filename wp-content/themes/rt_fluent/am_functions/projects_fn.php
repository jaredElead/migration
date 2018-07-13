<?php 

/*======================================= list projects shortcode =================================*/
add_shortcode('list_projects', 'get_projects');
function get_projects(){
$projects = list_projects($_GET['dealer_id']);
 if(!empty($projects)){
    $tab_content = '';
            foreach ( $projects as $project ) {
                $tab_content .= "<p>".$project->post_title."</p>";
            }
        } 
    return $tab_content;
}

/*======================================= Save / Update Project  ==================================*/
add_action( 'gform_pre_submission_4', 'pre_submission_project' );
function pre_submission_project( $form ) {
    // set project ID and Dealer_id into entry.
    $_POST['input_12'] = $_POST['input_5']; // set dealer id [input_12] equal to the user id [input_5]
    // Detects if a project is new and creates a post for the purpose of obtaining an ID of the new project. Then it sets project_id == the new ID. In the after_submission hook we delete the post created by form insertion.  $_POST flag for 'new'
    if($_POST['input_11'] == (0 || null)){ // If project is "new project" create new Project
        // Create post object
        $my_post = array(
            'post_type' 	=> 'project',
            'post_title'    => wp_strip_all_tags( $_POST['input_13'] ),
            'post_status'   => 'publish',
            'post_author'   => $_POST['input_5']
        );
       // since we aren't using a Post field we have to create a post manually
        $result = wp_insert_post( $my_post ); 
       if ( $result && ! is_wp_error( $result ) ) {
           $_POST['input_14'] = $result;
           $_POST['input_15'] = 'new';
        } 
    } else { 
    	// if we are selecting and existing project set the projecct ID equal to existing selected project
        $_POST['input_14'] = $_POST['input_11'];
   }
    
}

//If this is a new project set and save dealer and project ID variables
add_action( 'gform_after_submission_4', 'set_project_content', 10, 2 );
function set_project_content( $entry, $form ) {
   $id = rgar($entry,'post_id');
   $new = rgar($entry,'15');
    if($new == 'new'){
         wp_delete_post($entry['post_id'], true);
         $id = rgar($entry,'14');
    
$field_data = array( 
    "dealer_id"		=>rgar($entry,'5'),
    "project_id"	=>$id
);   
$post_data = array('ID' => $id);
$args = array(
      'ID' 			=> $id,
      'post_author' => $field_data['dealer_id']
);
  wp_update_post( $args );
  CFS()->save($field_data, $post_data);
  }
}

function list_projects($id = null){
$args = array( 
    'post_type' => 'project',
    'author'        =>  $id,
    'orderby'       =>  'post_date',
    'order'         =>  'ASC',
    'nopaging' => true
);
$projects = get_posts( $args );

return $projects;

}
//lists dealers - used by populate dealer drop down function
function list_dealers(){
    $args = array(
        'role' => 'dealer',
        'orderby' => 'user_nicename',
        'order' => 'ASC'
    );
    $users = get_users($args);
    return $users;
}
// filter the field values - calls functions from utility_fn.php
add_filter( 'gform_field_value_dealer_id', 'populate_dealer_id' );
function populate_dealer_id( $value ) {
    return get_this_user_id();
}
add_filter( 'gform_field_value_dealer_name', 'populate_dealer_name' );
function populate_dealer_name( $value ) {
    return get_profile_meta();
}
/*==================================*/
// Populate Dealer Dropdown.   
/*==================================*/
add_filter( 'gform_pre_render_4', 'populate_drop_fields' );
add_filter( 'gform_pre_validation_4', 'populate_drop_fields' );
add_filter( 'gform_pre_submission_filter_4', 'populate_drop_fields' );
add_filter( 'gform_admin_pre_render_4', 'populate_drop_fields' );

function populate_drop_fields( $form ) {
    foreach ( $form['fields'] as &$field ) { // sort through fields
 
        if ( $field->type != 'select' ) { // if not a select skip this field
            continue;
        }
        // this is a select field
        $choices = array();
        // check if this is a dealer select
        if(strpos( $field->cssClass, 'dealer_pop' ) !== false){
            $dealers = list_dealers(); 
                foreach ( $dealers as $dealer ) {
                    $choices[] = array( 'text' => $dealer->dealer_name." (".$dealer->elead_id.")" , 'value' => $dealer->ID );
                }
            $field->placeholder = 'Select a Dealer';

        // check if this is a project select
        } elseif(strpos( $field->cssClass, 'project_pop' ) !== false){
            $id=rgpost('input_5');
            if($id){
                $projects = list_projects($id);
                $choices[] = array( 'text' => 'Create New Project' , 'value' => '0' );
                if(!empty($projects)){
                    foreach ( $projects as $project ) {
                        $choices[] = array( 'text' => $project->post_title , 'value' => $project->ID );
                    }
                } 
            }
           $field->placeholder = 'Select a Project';
        }
        $field->choices = $choices;
    }
    return $form;
}
?>