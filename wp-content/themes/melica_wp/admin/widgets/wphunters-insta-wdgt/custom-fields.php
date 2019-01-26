<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_55e7080671696',
		'title' => '[Widget] Instagram',
		'fields' => array (
			array (
				'key' => 'field_55e7081961e55',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Instagram',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				'key' => 'field_55e7082961e56',
				'label' => 'Instagram User ID',
				'name' => 'instagram_user_id',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				'key' => 'field_55e7089061e57',
				'label' => 'Instagram Access Token',
				'name' => 'instagram_access_token',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				'key' => 'field_55e7099a6484b',
				'label' => 'Photos limit',
				'name' => 'photos_limit',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 6,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 3,
				'max' => 12,
				'step' => 3,
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				'key' => 'field_55e70f037597e',
				'label' => 'Info!',
				'name' => '',
				'type' => 'message',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'You can find the Instagram User Id <a href="http://www.otzberg.net/iguserid/" target="_blank">here</a> and Access Token - <a href="http://instagram.pixelunion.net/" target="_blank">here</a>.',
				'esc_html' => 0,
				'new_lines' => 'wpautop',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'widget',
					'operator' => '==',
					'value' => 'wph_instagram',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

endif;