// See Documentation: https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/

wp.domReady( () => {

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'cta-light',
		label: 'CTA Light'
	} );

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'cta-light-outline',
		label: 'CTA Light Outline'
	} );

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'cta-medium',
		label: 'CTA Medium'
	} );

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'cta-medium-outline',
		label: 'CTA Medium Outline'
	} );

	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'cta-dark',
		label: 'CTA Dark'
	} );
	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'cta-dark-outline',
		label: 'CTA Dark Outline'
	} );

} );