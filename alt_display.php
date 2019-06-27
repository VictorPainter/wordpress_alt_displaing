<?php
$thumb_id = get_post_thumbnail_id(get_the_ID());
$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
if( $alt ):
    echo $alt;
endif;
?>