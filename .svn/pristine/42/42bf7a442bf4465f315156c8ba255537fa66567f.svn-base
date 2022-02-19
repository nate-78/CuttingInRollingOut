<?php

//=======================
// Custom logo support: https://developer.wordpress.org/themes/functionality/custom-logo/
add_theme_support('custom-logo');


// customize CSS through the WP Admin panel
// NOTE: to see how to do this, refer to the functions defined below,
// beginning with 'ccg_create_custom_admin_section'
add_action('customize_register', 'ccg_customize_register');
function ccg_customize_register($wp_customize) {
	// add section
	//ccg_create_custom_admin_section($wp_customize, 'sectionId', 'sectionTitle', 'sectionDesc');

	// add setting(s)
	//ccg_create_custom_admin_setting($wp_customize, 'settingId', 'settingDefaultVal');

	// add control(s) (which binds all 3 together)
	// [separate functions exist for Text, Textarea, Color Picker, and File Upload controls]
	//ccg_create_custom_admin_text_control($wp_customize, 'sectionId', 'settingId', 'controlId', 'controlLabel', 'controlDesc');

	//### PHYSICAL ADDRESS ###
	// add section
	ccg_create_custom_admin_section($wp_customize, 'physicalAddress', 'Physical Address', '');
	// add settings
	ccg_create_custom_admin_setting($wp_customize, 'address', '');
	// add controls
	ccg_create_custom_admin_textarea_control($wp_customize, 'physicalAddress', 'address', 'address_ctrl', 'Address', '');
	// NOTE: to use, echo get_theme_mod('address'); (name/slug of setting)


	//### LINK TO DEALER PORTAL ###
	// add section
	ccg_create_custom_admin_section($wp_customize, 'dealerPortal', 'Dealer Portal', '');
	// add settings
	ccg_create_custom_admin_setting($wp_customize, 'portalLink', '');
	// add controls
	ccg_create_custom_admin_text_control($wp_customize, 'dealerPortal', 'portalLink', 'portalLink_ctrl', 'Link to Dealer Portal', '');
	// NOTE: to use, echo get_theme_mod('portalLink'); (name/slug of setting)


	//### SOCIAL NETWORK LINKS ###
	// add section
	ccg_create_custom_admin_section($wp_customize, 'socialSettings', 'Social Network Links', '');
	// add settings
	ccg_create_custom_admin_setting($wp_customize, 'linkFB', '#');
	ccg_create_custom_admin_setting($wp_customize, 'linkInstagram', '#');
	ccg_create_custom_admin_setting($wp_customize, 'linkYelp', '#');
	// add controls
	ccg_create_custom_admin_text_control($wp_customize, 'socialSettings', 'linkFB', 'linkFB_ctrl', 'Facebook URL', '');
	ccg_create_custom_admin_text_control($wp_customize, 'socialSettings', 'linkInstagram', 'linkInstagram_ctrl', 'Instagram URL', '');
	ccg_create_custom_admin_text_control($wp_customize, 'socialSettings', 'linkYelp', 'linkYelp_ctrl', 'Yelp URL', '');


}


// print the customized CSS
add_action('wp_head', 'ccg_load_custom_css');
function ccg_load_custom_css() {
  // NOTE: use get_theme_mod('setting_id'); to get the needed custom setting
  ?>
    <style type="text/css">
      /* custom styles go here */
    </style>
  <?php
}


// ###########################################################################
// The following group of functions simplifies the process of creating custom
// settings in the WP admin.  The user must first create a "section," then
// one or many "settings" that will appear in that section. Finally, they
// must create controls that match the settings to the section.
// These functions must be called from another function that takes advantage
// of the 'customize_register' hook, which provides access to the property
// $wp_customize

// create an admin section
function ccg_create_custom_admin_section($wp_customize, $sectionId, $sectionTitle, $sectionDesc) {
	$wp_customize->add_section(
		  $sectionId, // id
		  array(
			  'title' => $sectionTitle,
			  'description' => $sectionDesc
		  )
	  );
  }
  
  // create an admin setting
  function ccg_create_custom_admin_setting($wp_customize, $settingId, $settingDefaultVal) {
	// add settings
	  $wp_customize->add_setting( $settingId , array(
		  'default'   => $settingDefaultVal,
		  'transport' => 'refresh'
	  ) );
  }
  
  // create control, add control and setting to section
  function ccg_create_custom_admin_text_control($wp_customize, $sectionId, $settingId, $controlId, $controlLabel, $controlDesc) {
	// add settings and controls to section
	  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $controlId, array(
		  'label'      => __( $controlLabel, 'adtrav2017' ),
		  'section'    => $sectionId,
		  'settings'   => $settingId,
		  'type' => 'text'
	  ) ) );
  }
  
  // create control, add control and setting to section
  function ccg_create_custom_admin_colorPicker_control($wp_customize, $sectionId, $settingId, $controlId, $controlLabel, $controlDesc) {
	// add settings and controls to section
	  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $controlId, array(
		  'label'      => __( $controlLabel, 'adtrav2017' ),
	  'description' => __($controlDesc, 'adtrav2017'),
		  'section'    => $sectionId,
		  'settings'   => $settingId
	  ) ) );
  }
  
  // create control, add control and setting to section
  function ccg_create_custom_admin_fileUpload_control($wp_customize, $sectionId, $settingId, $controlId, $controlLabel, $controlDesc) {
	// add settings and controls to section
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $controlId, array(
		  'label'      => __( $controlLabel, 'adtrav2017' ),
		  'description' => __($controlDesc, 'adtrav2017'),
		  'section'    => $sectionId,
		  'settings'   => $settingId,
	  ) ) );
  }
  
  // create control, add control and setting to section
  function ccg_create_custom_admin_textarea_control($wp_customize, $sectionId, $settingId, $controlId, $controlLabel, $controlDesc) {
	// add settings and controls to section
	  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $controlId, array(
		  'label'      => __( $controlLabel, 'adtrav2017' ),
	  'description' => __($controlDesc, 'adtrav2017'),
		  'section'    => $sectionId,
		  'settings'   => $settingId,
		  'type' => 'textarea'
	  ) ) );
  }
  //##########################################################################