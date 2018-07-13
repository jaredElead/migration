<?php
//print_r($_POST['offer_list']);
if ( ! defined('ABSPATH') ) {
    /** Set up WordPress environment */
    require_once( dirname( __FILE__ ) . '/wp-load.php' );
}


if(!empty($_POST['offer_list'])) {

$ids = array();
foreach($_POST['offer_list'] as $selected) {
	array_push($ids, $selected);
	
}
$args = array(
	'post_type' => 'offer',
	'post__in' => $ids
	
);
$loop = new WP_Query($args);

$data = array();
while ( $loop->have_posts() ) : $loop->the_post();
	$id = get_the_id();
	$offer_pre = '';
	$offer = '';
	$offer_post = '';
    $type = ((get_post_meta($id, 'offer_type', true) == '6') ? 'service' : 'sales');
if( has_term( 'sales', 'offer_type', $id ) ) {
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
	$data[] = array(
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
            'details' => get_post_meta($id, 'sales_details', true),
            'disclaimer' => get_post_meta($id, 'disclaimer', true)." Offer expires - " . get_post_meta($id, 'exp', true),
            'link-text' => get_post_meta($id, 'link_text', true),
            'link' => get_post_meta($id, 'link', true),
            'img-sq' => get_post_meta($id, 'img_sq', true),
            'img-md' => get_post_meta($id, 'img_md', true),
            'img-lg' => get_post_meta($id, 'img_lg', true)
		)

	);
} elseif(has_term( 'service', 'offer_type', $id ) ){
    $service_pre = '';
    $service_post = '';
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
            }
if(get_post_meta($id, 'exp', true) !== ''){
$disclaimer = get_post_meta($id, 'disclaimer', true). "Offer expires - " . get_post_meta($id, 'exp', true);
} else {
$disclaimer = get_post_meta($id, 'disclaimer', true);
}
$data[] = array(
			'offer' => array(
			'title' => get_post_meta($id, 'service_title', true),
            'pre' => $service_pre,
            'offer' => $offer,
            'post' => $service_post,
            'details' => get_post_meta($id, 'service_details', true),
            'disclaimer' => $disclaimer,
            'link-text' => get_post_meta($id, 'link_text', true),
            'link' => get_post_meta($id, 'link', true),
            'img-sq' => get_post_meta($id, 'img_sq', true),
            'img-md' => get_post_meta($id, 'img_md', true),
            'img-lg' => get_post_meta($id, 'img_lg', true),
            'col' => "2"
		)
	);
}
	

endwhile;
header('Content-disposition: attachment; filename='.$type.'_offers.json');
header('Content-type: application/json');
//$fp = fopen('results.json', 'w');
//fwrite($fp, json_encode($data));
//fclose($fp);
echo json_encode($data, JSON_FORCE_OBJECT|JSON_UNESCAPED_SLASHES);

}

?>