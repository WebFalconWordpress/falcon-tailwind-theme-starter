// See Documentation: https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/

wp.domReady( () => {

	// This is example of how to add a block style from js
	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'ExampleButton',
		label: 'ExampleButton'
	} );

} );