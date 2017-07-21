<?php
/**
 * Drop in Pricing Table layout for an ACF flexible content field
 *
 * @package     NickDavis\ACF\Predefined
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://memberup.co
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\ACF\Predefined;

function get_acf_pricing_table_layout() {
	$key = 'pricing-table';

	return array(
		'key'        => $key,
		'name'       => $key,
		'label'      => 'Pricing Table',
		'display'    => 'block',
		'sub_fields' => array(
			array(
				'key'               => 'field_5971ae8444962',
				'label'             => 'Title',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			),
//			array(
//				'key'               => 'field_5971ae9c44964',
//				'label'             => 'Text',
//				'name'              => 'text',
//				'type'              => 'text',
//				'instructions'      => '',
//				'required'          => 0,
//				'conditional_logic' => 0,
//				'wrapper'           => array(
//					'width' => '',
//					'class' => '',
//					'id'    => '',
//				),
//				'default_value'     => '',
//				'placeholder'       => '',
//				'prepend'           => '',
//				'append'            => '',
//				'maxlength'         => '',
//			),
			// array(
			// 	'key'               => 'field_595b768c30499',
			// 	'label'             => 'Background Image',
			// 	'name'              => 'background_image',
			// 	'type'              => 'image',
			// 	'instructions'      => '',
			// 	'required'          => 0,
			// 	'conditional_logic' => 0,
			// 	'wrapper'           => array(
			// 		'width' => '',
			// 		'class' => '',
			// 		'id'    => '',
			// 	),
			// 	'return_format'     => 'array',
			// 	'preview_size'      => 'thumbnail',
			// 	'library'           => 'all',
			// 	'min_width'         => '',
			// 	'min_height'        => '',
			// 	'min_size'          => '',
			// 	'max_width'         => '',
			// 	'max_height'        => '',
			// 	'max_size'          => '',
			// 	'mime_types'        => '',
			// ),
			array(
				'key'               => 'field_5971accbe4259',
				'label'             => '',
				'name'              => 'column',
				'type'              => 'repeater',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'collapsed'         => '',
				'min'               => 0,
				'max'               => 0,
				'layout'            => 'row',
				'button_label'      => 'Add Column',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5971ace2e425a',
						'label'             => 'Title',
						'name'              => 'title',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5971ace8e425b',
						'label'             => 'Best Value',
						'name'              => 'featured',
						'type'              => 'true_false',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'message'           => '',
						'default_value'     => 0,
						'ui'                => 0,
						'ui_on_text'        => '',
						'ui_off_text'       => '',
					),
					array(
						'key'               => 'field_5971ad10e425c',
						'label'             => 'Price',
						'name'              => 'price',
						'type'              => 'text',
						'instructions'      => 'Use span tag after price for smaller, descriptive text (e.g. / year)',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5971ad3fe425d',
						'label'             => 'Button Text',
						'name'              => 'button_text',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5971ad4ee425e',
						'label'             => 'Button URL',
						'name'              => 'button_url',
						'type'              => 'url',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_5971ad61e425f',
						'label'             => 'After Button Text',
						'name'              => 'after_button_text',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5971ad72e4260',
						'label'             => 'Benefits',
						'name'              => 'benefits',
						'type'              => 'repeater',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'collapsed'         => '',
						'min'               => 0,
						'max'               => 0,
						'layout'            => 'table',
						'button_label'      => 'Add Benefit',
						'sub_fields'        => array(
							array(
								'key'               => 'field_5971ad86e4261',
								'label'             => '',
								'name'              => 'benefit',
								'type'              => 'text',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'maxlength'         => '',
							),
						),
					),
				),
			),
		),
		'min'        => '',
		'max'        => '',
	);
}