<?php 
/*=============================================*/
// Offer in-form Preview 
/*=============================================*/

add_filter( 'gform_pre_render_'.$offer_form_id, 'populate_web_special' );
function populate_web_special( $form ) {
    $current_page = GFFormDisplay::get_current_page( $form['id'] );
     $html_content = '';
    
if ( $current_page == 2 && rgpost('input_5') == 6) {

      // Do something if on Page 2 of offer builder

} elseif ( $current_page == 5 ) {
      
        /*---set offer vars ---*/
        $type=rgpost('input_5');  
        $year=rgpost('input_78_1');
        $make=rgpost('input_78_2');
        $model=rgpost('input_78_3');
        $trim=rgpost('input_46');  
        $stock=rgpost('input_35');
        $vin=rgpost('input_79');
        $msrp=rgpost('input_38');
        $sales_offer_type=rgpost('input_28');
        $sales_pre=rgpost('input_67');
        $sales_pre_custom=rgpost('input_68');
        $lease_price=rgpost('input_31');
        $lease_term=rgpost('input_33'); 
        $sales_apr1=rgpost('input_48');
        $sales_apr1_from=rgpost('input_60');
        $sales_apr1_to=rgpost('input_63');
        $sales_apr2=rgpost('input_61');
        $sales_apr2_from=rgpost('input_62');
        $sales_apr2_to=rgpost('input_59');
        $sales_details=rgpost('input_41');  
        $finance_type=rgpost('input_76');
        $finance_percentage=rgpost('input_77');
        $finance_price=rgpost('input_40');
        $finance_discount=rgpost('input_39');    
        $finance_post=rgpost('input_72');
        $finance_post_custom=rgpost('input_73');
        $service_type=rgpost('input_22'); 
        $service_title=rgpost('input_7');
        $service_pre=rgpost('input_8');
        $service_pre_custom=rgpost('input_18');
        $service_offer_type=rgpost('input_9');
        $service_percentage=rgpost('input_12');
        $service_price=rgpost('input_14');
        $service_discount=rgpost('input_15');
        $service_post=rgpost('input_16');
        $service_post_custom=rgpost('input_17');
        $service_details=rgpost('input_50'); 
        $link_text=rgpost('input_53'); 
        $link=rgpost('input_55'); 
        $img_md=rgpost('input_51');
        $img_lg=rgpost('input_84');
        $exp=rgpost('input_19'); 
        $disclaimer=rgpost('input_24'); 
        /*======= Set HTML Content=======*/
        //open offer wrapper
        $display_open = "<div style='width:598px;border:24px solid #efefef;margin-left:40px;'><div style='padding:20px;text-align:center;'><h3>Please Carefully Review.</h3><small style='font-size:10px;'>This preview is for review purposes only.<br/> Final offer may appear differently within email / websites respectively.</small></div>";
        $html_content = "<div style='width: 550px;padding:20px;'>
        <div><a href='".$link."'><img width='100%' style='max-width: 550px' src='".($img_md ? $img_md : 'http://via.placeholder.com/550x320?text=No Image Assigned')."' alt='Offer' /></a></div>";
switch($type) {
    case '5': {
        $html_content .="<div><h2><a style='color: #e6231e; text-decoration: none;' href='".$link."'>".$year." ".$make." ".$model." <small>".$trim."</small></a></h2>";
        if($sales_offer_type == "Lease"){
            $html_content .="<div style='padding:0 20px;'><h3>";
             if($sales_pre !== 'None'){
                $html_content .="<small>".($sales_pre_custom ? $sales_pre_custom : $sales_pre)."</small> ";
             }
             $html_content .=$lease_price." <small>for ".$lease_term." months</small></h3><p>".$sales_details."</p>";
            $html_content .=($stock ? "<p>Stock: #".$stock."</p>": null);
            $html_content .=($vin ? "<p>Vin: #".$vin."</p>": null);
        } elseif($sales_offer_type == "Finance")  {
             $html_content .="<h3>";
             if($sales_pre !== 'None'){
                $html_content .="<small>".($sales_pre_custom ? $sales_pre_custom : $sales_pre)."</small> ";
             }
            switch($finance_type){
                case 'Percentage':
                    $html_content.=$finance_percentage."%";
                    break;
                case 'Discount':
                    $html_content.=$finance_discount;
                    break;
                case 'Price':
                    $html_content.=$finance_price;
                    break;
            }
            if($finance_post !== 'None'){
                $html_content.=" <small> ".($finance_post_custom ? $finance_post_custom : $finance_post)."</small></h3>";
            } else {
                $html_content.="</h3></div>";
            }
            $html_content .="<p>".$sales_details."</p>";
            $html_content .=($stock ? "<p>Stock: #".$stock."</p>": null);
            $html_content .=($vin ? "<p>Vin: #".$vin."</p>": null);
            $html_content .=($msrp ? "<p>MSRP: ".$msrp."</p>": null);
    
        } else {
            $html_content .="<h5>".$sales_details."</h5>";
            $html_content .=($stock ? "<p>Stock: #".$stock."</p>": null);
            $html_content .=($vin ? "<p>Vin: #".$vin."</p>": null);
        }
        if($sales_apr1){
            $html_content.="<p style='width:50%;margin:10px 0 5px 0;border-bottom:1px solid #666666;'>Special APR Offer</p><h4 style='margin:5px;'><small>Get </small>".$sales_apr1."% APR <small>for ".$sales_apr1_from." - ".$sales_apr1_to." months</small></h4>";
        }
        if($sales_apr2){
            $html_content.="<h4 style='margin:5px;'><sup>Or</sup><small>Get </small>".$sales_apr2."% APR <small>for ".$sales_apr2_from." - ".$sales_apr2_to." months</small></h4>";
        }
        $html_content.= "</div>";
        break;
    }
case '6' : {
        $html_content.="<h2>".($service_title ? $service_title : $service_type)."</h2>";
        $html_content .="<div style='padding:0 20px;'>";
        $html_content.="<h3 style='margin:0;'>";
         if($service_pre !== 'None'){
        $html_content .="<small>".($service_pre_custom ? $service_pre_custom : $service_pre)." </small>";
    }
        switch($service_offer_type){
            case 'Percentage':
                $html_content.=$service_percentage."%";
                break;
            case 'Discount':
                $html_content.=$service_discount;
                break;
            case 'Price':
                $html_content.=$service_price;
            break;
             case 'Free':
                $html_content.="FREE";
            break;
        }
         if($service_post !== 'None'){
            $html_content.= "<small> ".($service_post_custom ? $service_post_custom : $service_post)."</small>";
        }
        $html_content.="</h3>";
        $html_content.="<p>".$service_details."</p>";
        break;
        }
    }
        $html_content.= "<div><p style='font-size:8px'>".$disclaimer." - ".$exp."</p><div>&nbsp;</div></div>";
        $html_content.="</div>"; // close offer-text wrapper
        $html_content.= "<div align='center' style='font-family:  Gotham, Helvetica Neue, Helvetica, Arial, sans-serif;color: #FFFFFF;text-align: center;background: #000000;font-size: 16px;letter-spacing: 1px;font-weight: 600;padding: 8px 14px;text-transform: uppercase;display: block;border-radius: 10px;'><a style='color: #ffffff;text-decoration: none;font-weight: bold;font-size: 14px;display: block;' href='".$link."'>".$link_text."</a></div>";
        $html_content.="</div>"; //close offer wrapper
        $display_close="</div>";
        foreach( $form['fields'] as &$field ) {
        if ( $field->id == 26 ) {
         $field->content = $display_open. $html_content. $display_close;
        }
    }
    //return $form;
}

return $form;
}
?>