<?php
//print_r($_POST['offer_list']);
if ( ! defined('ABSPATH') ) {
    /** Set up WordPress environment */
    require_once( dirname( __FILE__ ) . '/wp-load.php' );
}


if(!empty($_POST['offer_list'])) {
$primary = '';
$ids = array();
$cols_form_data = array();
$col1 = array();
$col2 = array();
$col3 = array();
$data_ary = array();
$dealer_id = $_POST['dealer_id'];
$i = 1;

foreach($_POST['offer_list'] as $selected) {
    array_push($ids, $selected);
    $cols_form_data[] = array(
        'c'=>$_POST[$selected."_layout"],
         'ID'=>$selected
     ); 
}

foreach($cols_form_data as $col){
   switch($col['c']){
                case 'c1':
                    array_push($col1, $col['ID']);
                    break;
                case 'c2':
                    array_push($col2, $col['ID']);
                    break;
                case 'c3':
                    array_push($col3, $col['ID']);
                    break;
            }
}

unset($cols_form_data);
$cols_form_data = array($col1, $col2, $col3);

foreach($cols_form_data as $key => $col){
    if(empty($col)){
        $cols_form_data[$key] = array(0);
    }
}
$args1 = array(
    'post_type' => 'offer',
    'post__in' => $cols_form_data[0]
    
);
$args2 = array(
    'post_type' => 'offer',
    'post__in' => $cols_form_data[1]
);
$args3 = array(
    'post_type' => 'offer',
    'post__in' => $cols_form_data[2]
    
);
$loops= array(
    "loop1" => new WP_Query($args1),
    "loop2" => new WP_Query($args2),
    "loop3" => new WP_Query($args3)
);

foreach($loops as $loop){
    if ( $loop->have_posts() ) :
       while ( $loop->have_posts() ) : $loop->the_post();
        $id = get_the_id();

      if(isset($_POST['primary']) && $_POST['primary'] == $id){
            $primary = true;
        } else {
            $primary = false;
        }
        $offer_pre = '';
        $offer = '';
        $offer_post = '';
        $type = ((get_post_meta($id, 'offer_type', true) == '6') ? 'service' : 'sales');
        $service_pre = '';
        $service_post = '';


if($type == 'service') :
/*=================================================================================*/
// Begin Service Data build
/*=================================================================================*/

         if(get_post_meta($id, 'service_pre', true) != 'None'){
                $service_pre = (get_post_meta($id, 'service_pre_custom', true) ? get_post_meta($id, 'service_pre_custom', true) : get_post_meta($id, 'service_pre', true));
            }
        if(get_post_meta($id, 'service_post', true) != 'None'){
                $service_post = (get_post_meta($id, 'service_post_custom', true) ? get_post_meta($id, 'service_post_custom', true) : get_post_meta($id, 'service_post', true));
            }
           switch(get_post_meta($id, 'service_offer_type', true)){
                        case 'Percentage':
                            $offer = get_post_meta($id, 'service_percentage', true)."%";
                            break;
                        case 'Discount':
                            $offer = "<sup><small class='text-secondary'>$</small></sup>".get_post_meta($id, 'service_discount', true);

                            break;
                        case 'Price':
                            $offer = "<sup><small class='text-secondary'>$</small></sup>".get_post_meta($id, 'service_price', true);
                            break;
                        case 'Free':
                            $offer = "FREE";    
                            break;
                    }

        if(get_post_meta($id, 'exp', true) !== ''){
        $disclaimer = get_post_meta($id, 'disclaimer', true). "Offer expires - " . get_post_meta($id, 'exp', true);
        } else {
        $disclaimer = get_post_meta($id, 'disclaimer', true);
        }
        if(get_post_meta($id, 'service_type', true) != "Custom"){
            $title = get_post_meta($id, 'service_type', true);
        } else {
            $title = get_post_meta($id, 'service_title', true);
        }
    $offer_data[] = array(
                'layout' => $type,
                'col' => "c".$i,
                'primary'=> $primary,
                'offer' => array(
                    'title' => $title,
                    'pre' => $service_pre,
                    'offer' => $offer,
                    'post' => $service_post,
                    'details' => get_post_meta($id, 'service_details', true),
                    'disclaimer' => $disclaimer,
                    'link-text' => get_post_meta($id, 'link_text', true),
                    'link' => get_post_meta($id, 'link', true),
                    'img-sq' => get_post_meta($id, 'img_sq', true),
                    'img-md' => get_post_meta($id, 'img_md', true),
                    'img-lg' => get_post_meta($id, 'img_lg', true)
                    )
    );


/*=================================================================================*/
// Begin Sales Data build
/*=================================================================================*/

elseif($type == "sales"):

if(get_post_meta($id, 'sales_pre', true) !== 'None'){
        $sales_pre = (get_post_meta($id, 'sales_pre_custom', true) ? get_post_meta($id, 'sales_pre_custom', true) : get_post_meta($id, 'sales_pre', true));
    }
    if(get_post_meta($id, 'sales_offer_type', true) == "Lease"){
            $offer = "$".get_post_meta($id, 'lease_price', true);
            $offer_post = "For ". get_post_meta($id, 'lease_term', true)." Months";
    } elseif(get_post_meta($id, 'sales_offer_type', true) == "Finance") {


            switch(get_post_meta($id, 'finance_type', true)){
                case 'Percentage':
                    $offer = get_post_meta($id, 'finance_percentage', true).'%';
                    break;
                case 'Discount':
                    $offer = '$'.get_post_meta($id, 'finance_discount', true);

                    break;
                case 'Price':
                    $offer = '$'.get_post_meta($id, 'finance_price', true);
                    break;
            }
            if(get_post_meta($id, 'finance_post', true) !== 'None'){
                $offer_post =(get_post_meta($id, 'finance_post_custom', true) ? get_post_meta($id, 'finance_post_custom', true) : get_post_meta($id, 'finance_post', true));
            } 

    } elseif(get_post_meta($id, 'sales_offer_type', true) == "MSRP") {
        $offer = get_post_meta($id, 'msrp', true);
    }
    $offer_data[] = array(
        'col' => "c".$i,
        'primary'=> $primary,
        'layout' => $type,
        'offer' => array(
            'type' => get_post_meta($id, 'sales_offer_type', true),
            'year' => get_post_meta($id, 'year', true),
            'make' => get_post_meta($id, 'make', true),
            'model' => get_post_meta($id, 'model', true),
            'trim' => get_post_meta($id, 'trim', true),
            'stock' => get_post_meta($id, 'stock', true),
            'vin' => get_post_meta($id, 'vin', true),
            'msrp' => get_post_meta($id, 'msrp', true),
            'pre' => $sales_pre,
            'offer' => $offer,
            'post' => $offer_post,
            'apr1'=>get_post_meta($id, 'sales_apr1', true),
            'apr1_from'=>get_post_meta($id, 'sales_apr1_from', true),
            'apr1_to'=>get_post_meta($id, 'sales_apr1_to', true),
            'apr2'=>get_post_meta($id, 'sales_apr2', true),
            'apr2_from'=>get_post_meta($id, 'sales_apr2_from', true),
            'apr2_to'=>get_post_meta($id, 'sales_apr2_to', true),
            'details' => get_post_meta($id, 'sales_details', true),
            'disclaimer' => get_post_meta($id, 'disclaimer', true)." Offer expires - " . get_post_meta($id, 'exp', true),
            'link-text' => get_post_meta($id, 'link_text', true),
            'link' => get_post_meta($id, 'link', true),
            'img-sq' => get_post_meta($id, 'img_sq', true),
            'img-md' => get_post_meta($id, 'img_md', true),
            'img-lg' => get_post_meta($id, 'img_lg', true)
        )

    );

endif;

     endwhile;  
    endif;
     if(!empty($offer_data)){
        $data_ary[] = $offer_data;
    }
     unset($offer_data);
     $i++;
}
  
$user_info = get_userdata($dealer_id);
if (in_array('dealer', $user_info->roles)){
    $dealer_data = array(

            'name' => esc_attr( get_the_author_meta( 'dealer_name', $dealer_id ) ),
            'address_1' => esc_attr( get_the_author_meta( 'address_1', $dealer_id ) ),
            'address_2' => esc_attr( get_the_author_meta( 'address_2', $dealer_id ) ),
            'city' => esc_attr( get_the_author_meta( 'city', $dealer_id ) ),
            'state' => esc_attr( get_the_author_meta( 'state', $dealer_id ) ),
            'zip' => esc_attr( get_the_author_meta( 'zip', $dealer_id ) ),
            'nav_1' => esc_attr( get_the_author_meta( 'nav_1', $dealer_id ) ),
            'nav_1_link' => esc_attr( get_the_author_meta( 'nav_1_link', $dealer_id ) ),
            'nav_2' => esc_attr( get_the_author_meta( 'nav_2', $dealer_id ) ),
            'nav_2_link' => esc_attr( get_the_author_meta( 'nav_2_link', $dealer_id ) ),
            'nav_3' => esc_attr( get_the_author_meta( 'nav_3', $dealer_id ) ),
            'nav_3_link' => esc_attr( get_the_author_meta( 'nav_3_link', $dealer_id ) ),
            'nav_4' => esc_attr( get_the_author_meta( 'nav_4', $dealer_id ) ),
            'nav_4_link' => esc_attr( get_the_author_meta( 'nav_4_link', $dealer_id ) ),
            'new_inventory' => esc_attr( get_the_author_meta( 'new_inventory', $dealer_id ) ),
            'schedule_service' => esc_attr( get_the_author_meta( 'schedule_service', $dealer_id ) ),
            'service_specials' => esc_attr( get_the_author_meta( 'service_specials', $dealer_id ) ),
            'new_specials' => esc_attr( get_the_author_meta( 'new_specials', $dealer_id ) ),
            'used_specials' => esc_attr( get_the_author_meta( 'used_specials', $dealer_id ) ),
            'location' => esc_attr( get_the_author_meta( 'location', $dealer_id ) ),
            'sales_track_phone' => esc_attr( get_the_author_meta( 'sales_track_phone', $dealer_id ) ),
            'service_track_phone' => esc_attr( get_the_author_meta( 'service_track_phone', $dealer_id ) ),
            'brand' => esc_attr( get_the_author_meta( 'brand', $dealer_id ) ),
            'brand_logo' => esc_attr( get_the_author_meta( 'brand_logo', $dealer_id ) ),
            'brand_logo_rev' => esc_attr( get_the_author_meta( 'brand_logo_rev', $dealer_id ) )




    );
}
$data_temp = $data_ary;
unset($data_ary);
$data_ary = array(  "list" => $data_temp,
                    "dealer" => $dealer_data,
                    "type" => $type
                );
header('Content-disposition: attachment; filename="data.json"');
header('Content-type: application/json');
//$fp = fopen('results.json', 'w');
//fwrite($fp, json_encode($data));
//fclose($fp);
echo json_encode($data_ary, JSON_FORCE_OBJECT|JSON_UNESCAPED_SLASHES);

}

?>