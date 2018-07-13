<?php
/*=============================== Load Offer To Update ===========================*/

add_filter( 'gform_field_value', 'populate_fields', 10, 3 );
function populate_fields( $value, $field, $name ) {
// If action is "update" retrieve field values for Offer and sync with form fields. 
if(isset($_GET['act'])){
    if($_GET['act'] == 'update') {
       $values = get_offer_by_id($_GET['offer_id']);
       return isset( $values[ $name ] ) ? $values[ $name ] : $value;
    } 
}
return;
}

// Retrieve Offer Data by ID
function get_offer_by_id($id) {

    global $wp_query;
    global $cfs;
    $args = array( 
        'post_type' => 'offer',
        'p' => $id
        );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        if( has_term( 'sales', 'offer_type', $id ) ) {

            $values = array(
                'year' => $cfs->get( 'year', $id),
                'make' => $cfs->get( 'make', $id),
                'model' => $cfs->get( 'model', $id),
                'trim' => $cfs->get( 'trim', $id),
                'msrp' => $cfs->get( 'msrp', $id),
                'stock' => $cfs->get( 'stock', $id),
                'vin' => $cfs->get( 'vin', $id),
                'sales_offer_type' => $cfs->get( 'sales_offer_type', $id),
                'sales_pre' => $cfs->get( 'sales_pre', $id),
                'sales_pre_custom' => $cfs->get( 'sales_pre_custom', $id),
                'lease_price' => $cfs->get( 'lease_price', $id),
                'lease_term' => $cfs->get( 'lease_term', $id),
                'finance_type' => $cfs->get( 'finance_type', $id),
                'finance_percentage' => $cfs->get( 'finance_percentage', $id),
                'finance_price' => $cfs->get( 'finance_price', $id),
                'finance_discount' => $cfs->get( 'finance_discount', $id),
                'finance_post' => $cfs->get( 'finance_post', $id),
                'finance_post_custom' => $cfs->get( 'finance_post_custom', $id),
                'sales_apr1'=> $cfs->get( 'sales_apr1', $id),
                'sales_apr1_to'=> $cfs->get( 'sales_apr1_to', $id),
                'sales_apr1_from'=> $cfs->get( 'sales_apr2_from', $id),
                'sales_apr2'=> $cfs->get( 'sales_apr2', $id),
                'sales_apr2_from'=> $cfs->get( 'sales_apr2_from', $id),
                'sales_apr2_to'=> $cfs->get( 'sales_apr2_to', $id),
                'sales_details'=> $cfs->get( 'sales_details', $id)
            );

        } 
        if(has_term( 'service', 'offer_type', $id ) ){
            $values = array(
                'service_type' => $cfs->get( 'service_type', $id),
                'service_title' => $cfs->get( 'service_title', $id),
                'service_pre' => $cfs->get( 'service_pre', $id),
                'service_pre_custom' => $cfs->get( 'service_pre_custom', $id),
                'service_offer_type' => $cfs->get( 'service_offer_type', $id),
                'service_post' => $cfs->get( 'service_post', $id),
                'service_post_custom' => $cfs->get( 'service_post_custom', $id),
                'service_details' => $cfs->get( 'service_details', $id),
                'service_percentage' => $cfs->get( 'service_percentage', $id),
                'service_price' => $cfs->get( 'service_price', $id),
                'service_discount' => $cfs->get( 'service_discount', $id)
            );
        }
        $values['offer_type'] = $cfs->get( 'offer_type', $id);
        $values['link_text'] = $cfs->get( 'link_text', $id);
        $values['link'] = $cfs->get( 'link', $id);
        $values['img_md'] = $cfs->get( 'img_md', $id);
        $values['img_lg'] = $cfs->get( 'img_lg', $id);
        $values['disclaimer'] = $cfs->get( 'disclaimer', $id);
        $values['exp'] = $cfs->get( 'exp', $id);
    endwhile;
        return $values;
}
?>