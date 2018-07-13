<?php
/*
Plugin Name: Dealer User Meta
Plugin URI:
Description: Creates Unique Fields for Dealer Role
Version: 0.1
Author: Jared Bartlett
Author URI:
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );



function extra_user_profile_fields( $user ) { ?>
<?php 
if (in_array('dealer', $user->roles)): ?>
<h3><?php _e("Dealer profile information", "blank"); ?></h3>

<table class="form-table">
<tr>
<th><label for="dealer_name"><?php _e("Dealer Name"); ?></label></th>
<td>
<input type="text" name="dealer_name" id="dealer_name" value="<?php echo esc_attr( get_the_author_meta( 'dealer_name', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your dealer_name."); ?></span>
</td>
</tr>
<tr>
<th><label for="elead_id"><?php _e("Elead ID"); ?></label></th>
<td>
<input type="text" name="elead_id" id="elead_id" value="<?php echo esc_attr( get_the_author_meta( 'elead_id', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your Elead Dealer ID."); ?></span>
</td>
</tr>
<tr>
<th><label for="address_1"><?php _e("Dealer Address"); ?></label></th>
<td>
<input type="text" name="address_1" id="address_1" value="<?php echo esc_attr( get_the_author_meta( 'address_1', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Dealer Address."); ?></span>
</td>
</tr>
<tr>
<th><label for="address_2"><?php _e("Dealer Address 2"); ?></label></th>
<td>
<input type="text" name="address_2" id="address_2" value="<?php echo esc_attr( get_the_author_meta( 'address_2', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Address 2."); ?></span>
</td>
</tr>
<tr>
<th><label for="city"><?php _e("City"); ?></label></th>
<td>
<input type="text" name="city" id="city" value="<?php echo esc_attr( get_the_author_meta( 'city', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("City."); ?></span>
</td>
</tr>
<tr>
<th><label for="state"><?php _e("State"); ?></label></th>
<td>
<input type="text" name="state" id="state" value="<?php echo esc_attr( get_the_author_meta( 'state', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("State."); ?></span>
</td>
</tr>
<tr>
<th><label for="zip"><?php _e("Zip"); ?></label></th>
<td>
<input type="text" name="zip" id="zip" value="<?php echo esc_attr( get_the_author_meta( 'zip', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("State."); ?></span>
</td>
</tr>
<tr>
<th><label for="sales_track_phone"><?php _e("Sales Tracking Phone"); ?></label></th>
<td>
<input type="text" name="sales_track_phone" id="sales_track_phone" value="<?php echo esc_attr( get_the_author_meta( 'sales_track_phone', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your sales_track_phone."); ?></span>
</td>
</tr>
<tr>
<th><label for="service_track_phone"><?php _e("Service Tracking Phone"); ?></label></th>
<td>
<input type="text" name="service_track_phone" id="service_track_phone" value="<?php echo esc_attr( get_the_author_meta( 'service_track_phone', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your service_track_phone."); ?></span>
</td>
</tr>
<tr>
  <td align="left" valign="top">
    <h3><?php _e("Dealer Brand", "blank"); ?></h3>
  </td>
</tr>
<tr>
<th><label for="brand"><?php _e("Brand"); ?></label></th>
<td>
<input type="text" name="brand" id="brand" value="<?php echo esc_attr( get_the_author_meta( 'brand', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Dealer brand. If this is a multi-brand store create a seperate user for each brand."); ?></span>
</td>
</tr>
<tr>
<th><label for="dealer_logo"><?php _e("Dealer Logo"); ?></label></th>
<td>
<input type="text" name="dealer_logo" id="dealer_logo" value="<?php echo esc_attr( get_the_author_meta( 'dealer_logo', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Dealer Logo: Color."); ?></span>
</td>
</tr>
<tr>
<th><label for="brand_logo"><?php _e("Brand Logo"); ?></label></th>
<td>
<input type="text" name="brand_logo" id="brand_logo" value="<?php echo esc_attr( get_the_author_meta( 'brand_logo', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Brand Logo: Color."); ?></span>
</td>
</tr>
<tr>
<th><label for="brand_logo_rev"><?php _e("Brand Logo Reverse"); ?></label></th>
<td>
<input type="text" name="brand_logo_rev" id="brand_logo_rev" value="<?php echo esc_attr( get_the_author_meta( 'brand_logo_rev', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Brand Logo: White/ Reverse."); ?></span>
</td>
</tr>
<tr>
  <td align="left" valign="top">
    <h3><?php _e("Email Navigation", "blank"); ?></h3>
  </td>
</tr>
<!--============ Navigation ============-->
<tr>
<th><label for="nav_1"><?php _e("Nav Item 1"); ?></label></th>
<td>
<input type="text" name="nav_1" id="nav_1" value="<?php echo esc_attr( get_the_author_meta( 'nav_1', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Navigation Item 1. ie: HOME."); ?></span>
</td>
</tr>
<tr>
<th><label for="nav_1_link"><?php _e("Nav Item 1 Link"); ?></label></th>
<td>
<input type="text" name="nav_1_link" id="nav_1_link" value="<?php echo esc_attr( get_the_author_meta( 'nav_1_link', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Navigation Item 1 Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<tr>
<th><label for="nav_2"><?php _e("Nav Item 2"); ?></label></th>
<td>
<input type="text" name="nav_2" id="nav_2" value="<?php echo esc_attr( get_the_author_meta( 'nav_2', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Navigation Item 2. ie: NEW."); ?></span>
</td>
</tr>
<tr>
<th><label for="nav_2_link"><?php _e("Nav Item 2 Link"); ?></label></th>
<td>
<input type="text" name="nav_2_link" id="nav_2_link" value="<?php echo esc_attr( get_the_author_meta( 'nav_2_link', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Nav Item 2 Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<tr>
<th><label for="nav_3"><?php _e("Nav Item 3"); ?></label></th>
<td>
<input type="text" name="nav_3" id="nav_3" value="<?php echo esc_attr( get_the_author_meta( 'nav_3', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Navigation Item 3. ie: NEW."); ?></span>
</td>
</tr>
<tr>
<th><label for="nav_3_link"><?php _e("Nav Item 3 Link"); ?></label></th>
<td>
<input type="text" name="nav_3_link" id="nav_3_link" value="<?php echo esc_attr( get_the_author_meta( 'nav_3_link', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Nav Item 3 Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<tr>
<th><label for="nav_4"><?php _e("Nav Item 4"); ?></label></th>
<td>
<input type="text" name="nav_4" id="nav_4" value="<?php echo esc_attr( get_the_author_meta( 'nav_4', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Navigation Item 4. ie: NEW."); ?></span>
</td>
</tr>
<tr>
<th><label for="nav_4_link"><?php _e("Nav Item 4 Link"); ?></label></th>
<td>
<input type="text" name="nav_4_link" id="nav_4_link" value="<?php echo esc_attr( get_the_author_meta( 'nav_4_link', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Nav Item 4 Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<!-- ======================= additonal Links ==================-->
<tr>
  <td align="left" valign="top">
    <h3><?php _e("Default Links", "blank"); ?></h3>
  </td>
</tr>
<tr>
<th><label for="new_inventory"><?php _e("New Inventory Link"); ?></label></th>
<td>
<input type="text" name="new_inventory" id="new_inventory" value="<?php echo esc_attr( get_the_author_meta( 'new_inventory', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("New Inventory Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<tr>
<th><label for="schedule_service"><?php _e("Schedule Service Link"); ?></label></th>
<td>
<input type="text" name="schedule_service" id="schedule_service" value="<?php echo esc_attr( get_the_author_meta( 'schedule_service', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Schedule Service Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<tr>
<th><label for="service_specials"><?php _e("Service Specials Link"); ?></label></th>
<td>
<input type="text" name="service_specials" id="service_specials" value="<?php echo esc_attr( get_the_author_meta( 'service_specials', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Service Specials Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<tr>
<th><label for="new_specials"><?php _e("New Inventory Specials Link"); ?></label></th>
<td>
<input type="text" name="new_specials" id="new_specials" value="<?php echo esc_attr( get_the_author_meta( 'new_specials', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("New Inventory Specials Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<tr>
<th><label for="used_specials"><?php _e("Used Specials Link"); ?></label></th>
<td>
<input type="text" name="used_specials" id="used_specials" value="<?php echo esc_attr( get_the_author_meta( 'used_specials', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Used Specials Link. Include full path \"http://\""); ?></span>
</td>
</tr>
<tr>
<th><label for="location"><?php _e("Location Link"); ?></label></th>
<td>
<input type="text" name="location" id="location" value="<?php echo esc_attr( get_the_author_meta( 'location', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Location Link. Include full path \"http://\""); ?></span>
</td>
</tr>
</table>
<?php 
endif; 
 }
?>
<?php
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {

if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }

update_user_meta( $user_id, 'dealer_name', $_POST['dealer_name'] );
update_user_meta( $user_id, 'sales_track_phone', $_POST['sales_track_phone'] );
update_user_meta( $user_id, 'service_track_phone', $_POST['service_track_phone'] );
update_user_meta( $user_id, 'elead_id', $_POST['elead_id'] );
update_user_meta( $user_id, 'address_1', $_POST['address_1'] );
update_user_meta( $user_id, 'address_2', $_POST['address_2'] );
update_user_meta( $user_id, 'city', $_POST['city'] );
update_user_meta( $user_id, 'state', $_POST['state'] );
update_user_meta( $user_id, 'zip', $_POST['zip'] );
update_user_meta( $user_id, 'brand', $_POST['brand'] );
update_user_meta( $user_id, 'brand_logo', $_POST['brand_logo'] );
update_user_meta( $user_id, 'brand_logo_rev', $_POST['brand_logo_rev'] );
update_user_meta( $user_id, 'nav_1', $_POST['nav_1'] );
update_user_meta( $user_id, 'nav_1_link', $_POST['nav_1_link'] );
update_user_meta( $user_id, 'nav_2', $_POST['nav_2'] );
update_user_meta( $user_id, 'nav_2_link', $_POST['nav_2_link'] );
update_user_meta( $user_id, 'nav_3', $_POST['nav_3'] );
update_user_meta( $user_id, 'nav_3_link', $_POST['nav_3_link'] );
update_user_meta( $user_id, 'nav_4', $_POST['nav_4'] );
update_user_meta( $user_id, 'nav_4_link', $_POST['nav_4_link'] );
update_user_meta( $user_id, 'new_inventory', $_POST['new_inventory'] );
update_user_meta( $user_id, 'schedule_service', $_POST['schedule_service'] );
update_user_meta( $user_id, 'service_specials', $_POST['service_specials'] );
update_user_meta( $user_id, 'new_specials', $_POST['new_specials'] );
update_user_meta( $user_id, 'used_specials', $_POST['used_specials'] );
update_user_meta( $user_id, 'location', $_POST['location'] );

}
?>