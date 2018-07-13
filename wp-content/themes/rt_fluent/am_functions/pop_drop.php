<?php
/*==================================*/
// Populate Service Dropdown.   
/*==================================*/

add_filter( 'gform_pre_validation_'.$offer_form_id, 'populate_services' );
add_filter( 'gform_pre_submission_filter_'.$offer_form_id, 'populate_services' );
add_filter( 'gform_admin_pre_render_'.$offer_form_id, 'populate_services' );
function populate_services($form){
    foreach ( $form['fields'] as &$field ) {
 
        if ( $field->type != 'select' ) {
            continue;
        }
         if(strpos( $field->cssClass, 'service_type' ) !== false){
            $services = array();
            $services[] = array('text' => 'Lube, Oil & Filter','value' => 'Lube, Oil & Filter');
            $services[] = array('text' => 'Rotate, Align & Balance','value' => 'Rotate, Align & Balance');
            $services[] = array('text' => 'Alignment','value' => 'Alignment');
            $services[] = array('text' => 'Tire Service','value' => 'Tire Service');
            $services[] = array('text' => 'Brake Service','value' => 'Brake Service');
            $services[] = array('text' => 'Service Your Way','value' => 'Service Your Way');
            $services[] = array('text' => 'Scheduled Maintenance','value' => 'Scheduled Maintenance');
            $services[] = array('text' => 'Wiper Blade Replacement','value' => 'Wiper Blade Replacement');
            $services[] = array('text' => 'Air Filter Replacement','value' => 'Air Filter Replacement');
            $services[] = array('text' => 'Engine Tune Up','value' => 'Engine Tune Up');
            $services[] = array('text' => 'A/C Inspection','value' => 'A/C Inspection');
            $services[] = array('text' => 'Battery Replacement','value' => 'Battery Replacement');
            $services[] = array('text' => 'Meet or Beat Pricing','value' => 'Meet or Beat Pricing');
            $services[] = array('text' => 'Custom','value' => 'Custom');
            $field->placeholder = 'Select A Service';
            $field->choices = $services;
         }
         if(strpos( $field->cssClass, 'service_offer_type' ) !== false){
            $selects = array();
            $selects[] = array('text' => 'None','value' => 'None');
            $selects[] = array('text' => 'Percentage','value' => 'Percentage');
            $selects[] = array('text' => 'Price','value' => 'Price');
            $selects[] = array('text' => 'Discount','value' => 'Discount');
            $selects[] = array('text' => 'FREE','value' => 'FREE');
            $field->placeholder = 'Select One';
            $field->choices = $selects;
         }
     }
return $form;

}
?>