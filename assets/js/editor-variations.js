// See Documentation: https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/

wp.domReady( () => {

	wp.blocks.registerBlockVariation( 'core/spacer', {
		name: 'small',
		title: 'Spacer: Small',
		attributes: {
			height: '2rem'
		},
		scope: [ 'block', 'inserter', 'transform' ]
	} );

	wp.blocks.registerBlockVariation( 'core/spacer', {
		name: 'medium',
		title: 'Spacer: Medium',
		attributes: {
			height: 'clamp(2rem, calc(2rem + ((1vw - 0.4rem) * 8.3333)), 4rem)'
		},
		scope: [ 'block', 'inserter', 'transform' ]
	} );

	wp.blocks.registerBlockVariation( 'core/spacer', {
		name: 'large',
		title: 'Spacer: Large',
		attributes: {
			height: 'clamp(4rem, calc(4rem + ((1vw - 0.4rem) * 16.6667)), 8rem)'
		},
		scope: [ 'block', 'inserter', 'transform' ]
	} );

} );