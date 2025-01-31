// See Documentation: https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/

wp.domReady( () => {

	wp.blocks.registerBlockVariation( 'core/spacer', {
		name: 'section/spacer',
		title: 'Section spacer',
		attributes: {
			// add css class
			className: 'section-spacer',
			height: 'var:preset|spacing|8',
		},
			scope: [ 'block', 'inserter', 'transform' ]
		} 
	);	

	wp.blocks.registerBlockVariation( 'core/spacer', {
		name: 'medium',
		title: 'Spacer: Medium',
		attributes: {
			height: 'clamp(1.875rem, calc(1.875rem + ((1vw - 0.4rem) * 8.3333)), 3rem)'
		},
		scope: [ 'block', 'inserter', 'transform' ]
	} );
} );