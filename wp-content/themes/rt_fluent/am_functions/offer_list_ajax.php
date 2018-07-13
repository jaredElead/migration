<?php

/*=================== Set the new offer ID into the DOM  ====================*/
add_action('gform_after_create_post_'.$offer_form_id, 'set_new_offer_sidebar', 10,3);
function set_new_offer_sidebar($post_id, $entry, $form ){
echo '<span class="new-offer '.rgar($entry,'5').'" id="'.$post_id.'"></span>';
}
/*==================================*/
// Sidebar Ajax.   
/*==================================*/

add_action( 'wp_enqueue_scripts', 'my_enqueue' );
function my_enqueue($hook) {
        
    wp_enqueue_script( 'ajax-script', get_stylesheet_directory_uri(). '/x_js/my_query.js', array('jquery') );

    // in JavaScript, object properties are accessed as ajax_object.ajax_url, ajax_object.we_value
    wp_localize_script( 'ajax-script', 'ajax_object', array( 
        'ajax_url' => admin_url( 'admin-ajax.php' ), 
        'cmd' => 'new'
    ));
}
    add_action( 'wp_ajax_my_action', 'my_action' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action' );
// Same handler function...
function my_action(){
    global $wpdb;
    global $cfs;
    $offer_content ='';
    $cmd = $_POST['cmd'];
    $id = intval( $_POST['offerId'] );
    $type = $_POST['type'];
    //$offer_content .= $type;
    /*$atts = array(
        'type' => 'service',
        'single'=> true,
        'ID' => $id
        );
    $html .= get_offers($atts);
*/
 
    $args = array( 
    'p' => $id,
    'post_type' => 'offer'
    );

    $newOffer = new WP_Query( $args );
if ( $newOffer->have_posts() ) :
while ( $newOffer->have_posts() ) : $newOffer->the_post();
   
$offer_content .="<div id='offer_".$id."' class='offer-wrapper'>";
$offer_content.="<div class='offer-image'><img width='150'src='".($cfs->get( 'img_md', $id) ? $cfs->get( 'img_md', $id) : 'http://via.placeholder.com/150x100?text=Select Img')."'/></div>";
$offer_content.="<div class='offer-content'>";
$offer_content.="<div class='offer-nav'><input type='checkbox' name='offer_list[]' value='".$id."'>Include In Export</input> <span class='config_icon fa fa-cog'>&nbsp;</span></div>";

if( has_term( 'sales', 'offer_type', $id ) ) {
        //echo '<script type="text/javascript">console.log("is '.$cfs->get( 'sales_offer_type', $id).'");</script>';
    $year = $cfs->get( 'year', $id);
    $make = $cfs->get( 'make', $id);
    $model = $cfs->get( 'model', $id);
    $msrp = $cfs->get( 'msrp', $id);
    $sales_offer_type = $cfs->get( 'sales_offer_type', $id);
    $sales_pre = $cfs->get( 'sales_pre', $id);
    $sales_pre_custom = $cfs->get( 'sales_pre_custom', $id);
    $lease_price = $cfs->get( 'lease_price', $id);
    $lease_term = $cfs->get( 'lease_term', $id);
    $finance_type = $cfs->get( 'finance_type', $id);
    $finance_percentage = $cfs->get( 'finance_percentage', $id);
    $finance_price = $cfs->get( 'finance_price', $id);
    $finance_discount = $cfs->get( 'finance_discount', $id);
    $finance_post = $cfs->get( 'finance_post', $id);
    $finance_post_custom = $cfs->get( 'finance_post_custom', $id);
    $offer_content .="<h5>".$year." ".$make." ".$model."</h5>";
     if($sales_offer_type == "Lease"){
            $offer_content .="<p class='offer-text'><small>".($sales_pre_custom ? $sales_pre_custom : $sales_pre)."</small> $".$lease_price." <small>for ".$lease_term." months</small></p>";
        } elseif($sales_offer_type == "Finance")  {
            $offer_content .="<p class='offer-text'><small>".($sales_pre_custom ? $sales_pre_custom : $sales_pre)."</small> ";
            switch($finance_type){
                case 'Percentage':
                    $offer_content.=$finance_percentage."%";
                    break;
                case 'Discount':
                    $offer_content.= money_format('%.0n', $finance_discount);
                    break;
                case 'Price':
            
                    $offer_content.= money_format('%.0n', $finance_price);
                    break;
            }
            if($finance_post != 'None'){
                $offer_content.=" <small> ".($finance_post_custom ? $finance_post_custom : $finance_post)."</small></p>";
            } else {
                $offer_content.="</p>";
            }
        } else {
            
             $offer_content.="<p class='offer-text'><small>MSRP:</small>". money_format('%.0n',$msrp)."</p>";
        }
        


} elseif(has_term( 'service', 'offer_type', $id ) ){
//    echo '<script type="text/javascript">console.log("is service");</script>';
    $service_type = $cfs->get( 'service_type', $id);
    $service_title = $cfs->get( 'service_title', $id);
    $service_pre = $cfs->get( 'service_pre', $id);
    $service_pre_custom = $cfs->get( 'service_pre_custom', $id);
    $service_offer_type = $cfs->get( 'service_offer_type', $id);
    $service_post = $cfs->get( 'service_post', $id);
    $service_post_custom = $cfs->get( 'service_post_custom', $id);
    $service_details = $cfs->get( 'service_details', $id);
    $service_percentage = $cfs->get( 'service_percentage', $id);
    $service_price = $cfs->get( 'service_price', $id);
    $service_discount = $cfs->get( 'service_discount', $id);
    
    $offer_content .="<h5>".($service_title ? $service_title : $service_type)."</h5>";
     if($service_pre != 'None'){
        $offer_content .="<p class='offer-text'><small>".($service_pre_custom ? $service_pre_custom : $service_pre)."</small> ";
        } else {
                $offer_content.="<p class='offer-text'>";
            }
            switch($service_offer_type){
                case 'Percentage':
                    $offer_content.=$service_percentage."%";
                    break;
                case 'Discount':
                    $offer_content.= money_format('%.2n', $service_discount); 
                    break;
                case 'Price':
                    $offer_content.= money_format('%.2n', $service_price);
                    break;
                case 'Free':
                    $offer_content.='FREE';
                    break;
            }
            if($service_post != 'None'){
                $offer_content.=" <small> ".($service_post_custom ? $service_post_custom : $service_post)."</small></p>";
            } else {
                $offer_content.="</p>";
            }
    
}


$offer_content.="</div>";
    $offer_content.="<div class='config'><h5>Layout Options</h5>";
     $offer_content.="<label for='".$id."_layout'>Columns </label><select name='".$id."_layout' style='margin-bottom:5px;'><option value='c1'>1 </option><option value='c2'>2 </option><option value='c3'>3 </option></select><div class='primary_radio'><small>Primary </small><input type='radio' name='primary' value='".$id."'></input>";
     $offer_content .="</div>";
        $offer_content .="<div class='btn-wrapper'><a class='button button-grey button-xsmall' href='".esc_url( add_query_arg( array("act"=>"update", "offer_id"=> $id) ,this_uri()))."'>Edit</a>".wp_delete_post_link($id,'Del')."</div>";
     $offer_content.="</div></div>";






endwhile;
else :
    $offer_content .='No Offer Posted';
endif;

    $packet = array(
        'cmd' => $cmd,
        'offer' => $offer_content
            );
    echo json_encode($packet, JSON_FORCE_OBJECT);
    
    wp_die();
}

?>