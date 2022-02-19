<?php

//------------------------------------------------------------------------
// This next section allows for custom styles to be created and selected from the Wysiwyg text editor.
// It's very useful for "holding the user's hand" so they don't break the design of the site.  They can
// select certain styles from a dropdown (like blue button, etc)
//------------------------------------------------------------------------
// add formatting option to the TinyMCE wysiwyg toolbar
// add custom styles to the WordPress editor

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}


// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

function my_mce_before_init_insert_formats( $init_array ) {

    $style_formats = array(
        // These are the custom styles
        array(
        'title' => 'Blue Button',
        'inline' => 'span',
        'classes' => 'btn btn--blue-white',
        'wrapper' => true
        ),
        array(
        'title' => 'White Button',
        'inline' => 'span',
        'classes' => 'btn btn--white-blue',
        'wrapper' => true
        ),
    );
    // Insert the array, JSON ENCODED, into �style_formats�
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

}
// Attach callback to �tiny_mce_before_init�
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );
  

// Move Yoast fields to bottom of page editor
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


// prevent wyisiwyg from removing span tags
add_filter('tiny_mce_before_init', 'override_mce_options');
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}


// make sure image URLs use the correct protocol
function ssl_post_thumbnail_urls($url, $post_id) {
	//Skip file attachments
	if(!wp_attachment_is_image($post_id)) {
	  return $url;
	}
  
	//Correct protocol for https connections
	list($protocol, $uri) = explode('://', $url, 2);
  
	if(is_ssl()) {
	  if('http' == $protocol) {
		$protocol = 'https';
	  }
	} else {
	  if('https' == $protocol) {
		$protocol = 'http';
	  }
	}
  
	return $protocol.'://'.$uri;
}
add_filter('wp_get_attachment_url', 'ssl_post_thumbnail_urls', 10, 2);




//-----------------------------------------------------------
// ACF custom uber styles
//-----------------------------------------------------------
function custom_acf_repeater_colors() {
	wp_enqueue_style( 'acf-uber-styles', get_template_directory_uri() . '/assets/css/acf-styles.css' );
}
add_action('admin_head', 'custom_acf_repeater_colors');