<?php

return array(
// menus
'RD Hover' => array(
	// shortcodes collection in this menu
	'elements' => array(

			// shortcode with attribute
			'acb1' => array(
			'title' => __('RD Hover Shortcode Settings', 'qualia_td'),
			'code' => '[hover]',
			'attributes' => array(
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),


					),
					
					// Select Style from generator
					array(
					'type' => 'select',
					'name' => 'style',
					'label' => __('Select Hover Style', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(	
						array(
							'value' => 'style1',
							'label' => 'Style 1',
						),	
						array(
							'value' => 'style2',
							'label' => 'Style 2',
						),		
						array(
							'value' => 'style3',
							'label' => 'Style 3',
						),		
						array(
							'value' => 'style4',
							'label' => 'Style 4',
						),		
						array(
							'value' => 'style5',
							'label' => 'Style 5',
						),			
	
				),	),			
					


				
				),
			),
		// ... more elements
		
		),
	),	
	
	
// ... more menus
);

?>