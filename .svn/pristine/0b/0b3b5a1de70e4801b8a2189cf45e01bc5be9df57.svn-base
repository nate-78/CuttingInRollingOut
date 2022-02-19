<?php

/**
 * This Function depends on Advanced Custom Fields, and it gives us an easy way 
 * to create custom Gutenberg blocks.  Refer to the below article for details.
 * 
 * Register Blocks
 * @link https://www.billerickson.net/building-gutenberg-block-acf/#register-block
 *
 */
function ccg_register_blocks() {
	
	if( ! function_exists( 'acf_register_block_type' ) )
		return;

	acf_register_block_type( array(
		'name'			=> 'page-heading',
		'title'			=> 'Page Heading',
		'render_template'	=> 'partials/blocks/block-page-heading.php', // location of template code
		'category'		=> 'layout', // The options provided by WP core are: common, formatting, layout, widgets, and embed.
		'icon'			=> 'schedule', // WP dashicons 
		'mode'			=> 'auto', // auto, preview, or edit
		'keywords'		=> array( 'page', 'heading', 'top' ),
		'align'			=> 'full' // left, center, right, wide, full
	));

}
add_action('acf/init', 'ccg_register_blocks' );


//******************************************************************
// THE BELOW CODE GENERATES THE NECESSARY ACF FIELDS FOR THIS BLOCK
// This code is kept here for demonstration purposes.  You can 
// delete it when you're ready to remove the example code 
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5ed00afaeda32',
		'title' => 'Page Heading',
		'fields' => array(
			array(
				'key' => 'field_5ed00b0e2f078',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '66',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ed00d152f07d',
				'label' => 'Heading Background Color',
				'name' => 'heading_background_color',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '34',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'cream' => 'Cream',
					'navy' => 'Navy Blue',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_5ed00cac2f079',
				'label' => 'NOTE:',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'The subtitle goes across two lines, and each has its own style.	That\'s why the subtitle is broken up across the two following fields.	You do not have to use both of them.',
				'new_lines' => 'wpautop',
				'esc_html' => 0,
			),
			array(
				'key' => 'field_5ed00cc82f07a',
				'label' => 'Subtitle Line 1',
				'name' => 'subtitle_line_1',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ed00cd52f07b',
				'label' => 'Subtitle Line 2',
				'name' => 'subtitle_line_2',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ed00cde2f07c',
				'label' => 'Page Heading Body Text',
				'name' => 'heading_text',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/page-heading',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;