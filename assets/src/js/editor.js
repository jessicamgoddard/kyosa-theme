
const { __ } = wp.i18n;
const { registerBlockStyle } = wp.blocks;

registerBlockStyle( 'core/heading', [
  {
    name: 'underline',
    label: __( 'Underline' ),
  },
  {
    name: 'multi-color-underline',
    label: __( 'Underline Multi' ),
  },
] );

registerBlockStyle( 'core/button', {
  name: 'underscore',
  label: 'Underscore',
} );

registerBlockStyle( 'core/spacer', {
  name: 'reduce-height',
  label: 'Reduce Height on Mobile',
  isDefault: true,
} );
