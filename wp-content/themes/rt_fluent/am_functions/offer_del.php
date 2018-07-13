<?php

/*====================== Delete Offer Functionality ==============================*/
function wp_delete_post_link($id = '', $name = '', $before = '', $after = '')

{

if ( !current_user_can( 'edit_page', $id ) ) {
return;
} elseif ( !current_user_can( 'edit_post', $id ) ) {

return;

}


$link = "<a class='button button-grey button-xsmall' href='" . wp_nonce_url( get_bloginfo('url') . "/wp-admin/post.php?action=delete&amp;post=" . $id, 'delete-post_' . $id) . "'>".$name."</a>";

return $before . $link . $after;

}


?>