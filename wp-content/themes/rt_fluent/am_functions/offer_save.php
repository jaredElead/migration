<?php 
/*======================================= Save / Update Offer  ==================================*/
add_action( 'gform_pre_submission_'.$offer_form_id, 'pre_submission_offer' );
function pre_submission_offer( $form ) {
    $_POST['input_82'] = $_GET['dealer_id'];
    $_POST['input_83'] = $_GET['project_id'];
}
add_action( 'gform_after_submission_'.$offer_form_id, 'set_post_content', 10, 2 );
function set_post_content( $entry, $form ) {
     if(rgar($entry,'5') == '5'){
        $type ="sales";
    } elseif(rgar($entry,'5') == '6'){
        $type = "service";
    } 

if(isset($_GET['act'])){
    if($_GET['act'] == 'update') {
       // Update Offer List via Ajax
        $headline = "<h4>We've Updated Your Offer</h4>";

        echo '<h3>Updating Offer... </h3><a class="button button-red button-small" href="#">Build Another</a><script>jQuery(document).ready(function($) {
            $(".offer_list_'.$type.'").prepend("'.$headline.'");
            buildOffer();
        });
        </script>';
    } 
} 


$field_data = array( 
    "offer_type"=>rgar($entry,'5'),
    "year"=>rgar($entry,'78.1'),
    "make"=>rgar($entry,'78.2'),
    "model"=>rgar($entry,'78.3'),
    "trim"=>rgar($entry,'46'),  
    "stock"=>rgar($entry,'35'),
    "vin"=>rgar($entry,'79'),
    "msrp"=>rgar($entry,'38'),
    "sales_offer_type"=>rgar($entry,'28'),
    "sales_pre"=>rgar($entry,'67'),
    "sales_pre_custom"=>rgar($entry,'68'),
    "lease_price"=>rgar($entry,'31'),
    "lease_term"=>rgar($entry,'33'), 
    "sales_apr1"=>rgar($entry,'48'),
    "sales_apr1_from"=>rgar($entry,'60'),
    "sales_apr1_to"=>rgar($entry,'63'),
    "sales_apr2"=>rgar($entry,'61'),
    "sales_apr2_from"=>rgar($entry,'62'),
    "sales_apr2_to"=>rgar($entry,'59'),
    "sales_details"=>rgar($entry,'41'),  
    "finance_type"=>rgar($entry,'76'),
    "finance_percentage"=>rgar($entry,'77'),
    "finance_price"=>rgar($entry,'40'),
    "finance_discount"=>rgar($entry,'39'),    
    "finance_post"=>rgar($entry,'72'),
    "finance_post_custom"=>rgar($entry,'73'),
    "service_type"=>rgar($entry,'22'), 
    "service_title"=>rgar($entry,'7'),
    "service_pre"=>rgar($entry,'8'),
    "service_pre_custom"=>rgar($entry,'18'),
    "service_offer_type"=>rgar($entry,'9'),
    "service_percentage"=>rgar($entry,'12'),
    "service_price"=>rgar($entry,'14'),
    "service_discount"=>rgar($entry,'15'),
    "service_post"=>rgar($entry,'16'),
    "service_post_custom"=>rgar($entry,'17'),
    "service_details"=>rgar($entry,'50'), 
    "link_text"=>rgar($entry,'53'), 
    "link"=>rgar($entry,'55'), 
    "img_md"=>rgar($entry,'51'),
    "img_lg"=>rgar($entry,'84'),
    "exp"=>rgar($entry,'19'), 
    "disclaimer"=>rgar($entry,'24'),
    "dealer_id"=>rgar($entry,'82'),
    "project_id"=>rgar($entry,'83')
);
    if(isset($_GET['act'])){
        if($_GET['act'] == 'update') {
            $post_data = array('ID' => $_GET['offer_id']);
            wp_delete_post($entry['post_id'], true);
        } 
    } else {
        $post_data = array('ID' => rgar($entry,'post_id'));
    }
CFS()->save($field_data, $post_data);
}

?>