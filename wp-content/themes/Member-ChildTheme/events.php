<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d332ce5e203e',
	'title' => 'Event Posts',
	'fields' => array(
		array(
			'key' => 'field_5d332ce5f1027',
			'label' => 'Featured Image',
			'name' => 'thumbnail_id',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'return_format' => 'id',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'acfe_thumbnail' => 1,
			'acfe_validate' => '',
			'acfe_update' => '',
		),
		array(
			'key' => 'field_5d332ce5f109a',
			'label' => 'Title',
			'name' => 'event_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'acfe_validate' => '',
			'acfe_update' => '',
		),
		array(
			'key' => 'field_5d332ce5f11bc',
			'label' => 'Event Location',
			'name' => 'event_location',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 2,
			'new_lines' => 'br',
			'acfe_validate' => '',
			'acfe_update' => '',
		),
		array(
			'key' => 'field_5d332ce5f122d',
			'label' => 'Event Date',
			'name' => 'event_date',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'display_format' => 'F j, Y',
			'return_format' => 'F j, Y',
			'first_day' => 0,
			'acfe_validate' => '',
			'acfe_update' => '',
		),
		array(
			'key' => 'field_5d332ce5f129d',
			'label' => 'Start Time',
			'name' => 'start_time',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '29',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'g:i a',
			'return_format' => 'g:i a',
		),
		array(
			'key' => 'field_5d332ce5f130e',
			'label' => 'End Time',
			'name' => 'end_time',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'g:i a',
			'return_format' => 'g:i a',
		),
		array(
			'key' => 'field_5d332ce5f137d',
			'label' => 'Details',
			'name' => 'event_details',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 0,
			'delay' => 0,
			'acfe_validate' => '',
			'acfe_update' => '',
		),
		array(
			'key' => 'field_5d332ce5f13ee',
			'label' => 'External Link',
			'name' => 'external_link',
			'type' => 'url',
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
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'events',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_permissions' => '',
	'acfe_note' => '',
	'acfe_meta' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d33a545bc8c0',
	'title' => 'Event Repeater',
	'fields' => array(
		array(
			'key' => 'field_5d33a545c7f37',
			'label' => 'Add Event',
			'name' => 'add_event',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Event',
			'sub_fields' => array(
				array(
					'key' => 'field_5d33a545cb5f2',
					'label' => 'Featured Image',
					'name' => 'thumbnail_id',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'return_format' => 'id',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'acfe_thumbnail' => 1,
					'acfe_validate' => '',
					'acfe_update' => '',
				),
				array(
					'key' => 'field_5d33a545cb666',
					'label' => 'Title',
					'name' => 'event_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'acfe_validate' => '',
					'acfe_update' => '',
				),
				array(
					'key' => 'field_5d33a545cb6d7',
					'label' => 'Event Location',
					'name' => 'event_location',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 2,
					'new_lines' => 'br',
					'acfe_validate' => '',
					'acfe_update' => '',
				),
				array(
					'key' => 'field_5d33a545cb746',
					'label' => 'Event Date',
					'name' => 'event_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'display_format' => 'F j, Y',
					'return_format' => 'F j, Y',
					'first_day' => 0,
					'acfe_validate' => '',
					'acfe_update' => '',
				),
				array(
					'key' => 'field_5d33a545cb961',
					'label' => 'Start Time',
					'name' => 'start_time',
					'type' => 'time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '29',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'g:i a',
					'return_format' => 'g:i a',
				),
				array(
					'key' => 'field_5d33a545cb9d5',
					'label' => 'End Time',
					'name' => 'end_time',
					'type' => 'time_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'g:i a',
					'return_format' => 'g:i a',
				),
				array(
					'key' => 'field_5d33a545cba48',
					'label' => 'Details',
					'name' => 'event_details',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'acfe_permissions' => '',
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 0,
					'delay' => 0,
					'acfe_validate' => '',
					'acfe_update' => '',
				),
				array(
					'key' => 'field_5d33a545cbabb',
					'label' => 'External Link',
					'name' => 'external_link',
					'type' => 'url',
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
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '8069',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => '',
	'acfe_permissions' => '',
	'acfe_note' => '',
	'acfe_meta' => '',
));

endif;
}