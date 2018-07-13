<?php 
/*=========================== Display Offers Sidebar List ==========================*/
add_shortcode('list_offers', 'get_offers');
function get_offers($atts){
global $wp_query;
global $cfs;
$single =false;
$offer_content = '';
$post_id = '';
$dealer_id = $_GET["dealer_id"];
if (isset($atts["type"]) && !empty($atts["type"])) {
  
        $type = $atts['type']; 
      
}
if (isset($atts["single"]) && !empty($atts["single"])) {
    $single = $atts['single'];   
}
if (isset($atts["ID"]) && !empty($atts["ID"])) {
    $post_id = $atts['ID'];   
}
if(!$single){
    $args = array( 
    'post_type' => 'offer',
    'nopaging' => true,
    'tax_query' => array(
        array (
            'taxonomy' => 'offer_type',
            'field' => 'slug',
            'terms' => $type,
        )
    ),
    'meta_key' => 'project_id',
    'orderby' => 'meta_value',
    'meta_value' => $_GET["project_id"]
); 
} else {
    //echo '<script type="text/javascript">console.log("'.$post_id.'");</script>';
        $args = array( 
            'post_type' => 'offer',
            'p' => $post_id
        );
}
if(!$single){
    $offer_content.="<form class='offer_list_".$type."' action = '/export_yml.php' method ='post'>";
}
$loop = new WP_Query( $args );

if ( $loop->have_posts() ) :
while ( $loop->have_posts() ) : $loop->the_post();
    $id = get_the_id();
  // echo '<script type="text/javascript">console.log("is '.$id.'");</script>';

 
    
        $offer_content .="<div id='offer_".$id."' class='offer-wrapper'>";
    if($single){
        //$offer_content.="<div class='new_tag'><span>New</span></div>";
    }
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

if($single){
    //echo '<script type="text/javascript">console.log("'.$offer_content.'");</script>';
    return $offer_content;

}
    
endwhile;
else :
 $offer_content.='<p class="msg">Sorry, no offers yet. Let\'s build some!</p>';
endif;

$offer_content .="<input type='hidden' name='dealer_id' value='".$dealer_id."'></input>";
$offer_content .="<div class='panel-btn-wrapper'><input class='button button-red button-xsmall' type='submit' name='submit' Value='Export for Email'/><input class='button button-red button-xsmall' type='submit' name='submit' Value='Export for Web'/></div>";
$offer_content.="</form>";
return $offer_content;

}

?>