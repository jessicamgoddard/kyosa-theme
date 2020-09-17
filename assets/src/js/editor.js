
wp.domReady( () => {

  const { __ } = wp.i18n;
  const { registerBlockStyle, unregisterBlockStyle } = wp.blocks;

  unregisterBlockStyle( 'core/button', 'outline' );

  registerBlockStyle( 'core/button', {
    name: 'underscore',
    label: 'Underscore',
  } );

  registerBlockStyle( 'core/spacer', {
    name: 'reduce-height',
    label: 'Reduce Height on Mobile',
    isDefault: true,
  } );

  registerBlockStyle( 'core/paragraph', [
    {
      name: 'sans-serif',
      label: 'Sans-Serif',
      isDefault: true,
    },
    {
      name: 'serif',
      label: 'Serif',
    },
  ] );

})
