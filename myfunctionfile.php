
<?php
	$media_query = new WP_Query(
	    array(
		'post_type' => 'attachment',
		'post_status' => 'inherit',
		'posts_per_page' => -1,
	    )
	);
	$list = array();
	foreach ($media_query->posts as $post) {
	    $category = get_post_meta($post->ID,'banner',true);
	    if($category == "banner") 
	    	$list[] = wp_get_attachment_url($post->ID);
	}

	$images_url = wp_json_encode($list);
	echo $images_url;

?>
