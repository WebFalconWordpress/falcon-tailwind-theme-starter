// See Documentation: https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/

wp.domReady( () => {


	// Alternative Button Styles
	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'alternative',
		label: 'Alternative'
	} );

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'alternative-outline',
		label: 'Alternative Outline'
	} );

	// CTA Button Styles
	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'cta',
		label: 'CTA'
	} );

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'cta-outline',
		label: 'CTA Outline'
	} );

	// Button as link
	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'link',
		label: 'Link'
	} );
	

} );