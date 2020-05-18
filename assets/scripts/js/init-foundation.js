
/**
 * Create retina 'named media queries' for use with Interchange.
 * Insert before the Foundation init.
 * https://foundation.zurb.com/sites/docs/interchange.html
 *
 * Update the variables to match your SASS breakpoints.
 * Leave any un-needed sizes empty.
 */

var ic_small    = '0';
var ic_medium   = '640px';
var ic_large    = '1024px';
var ic_xlarge   = '1200px';
var ic_xxlarge  = '1440px';
var ic_xxxlarge = '1920px';

if ( ic_small.length > 0 ) {
    Foundation.Interchange.SPECIAL_QUERIES['small_retina'] = 'only screen and (min-width: ' + ic_small + ') and (-webkit-min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_small + ') and (min--moz-device-pixel-ratio: 2),only screen and (min-width: ' + ic_small + ') and (-o-min-device-pixel-ratio: 2/1),only screen and (min-width: ' + ic_small + ') and (min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_small + ') and (min-resolution: 192dpi),only screen and (min-width: ' + ic_small + ') and (min-resolution: 2dppx)';
}

if ( ic_medium.length > 0 ) {
    Foundation.Interchange.SPECIAL_QUERIES['medium_retina'] = 'only screen and (min-width: ' + ic_medium + ') and (-webkit-min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_medium + ') and (min--moz-device-pixel-ratio: 2),only screen and (min-width: ' + ic_medium + ') and (-o-min-device-pixel-ratio: 2/1),only screen and (min-width: ' + ic_medium + ') and (min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_medium + ') and (min-resolution: 192dpi),only screen and (min-width: ' + ic_medium + ') and (min-resolution: 2dppx)';
}

if ( ic_large.length > 0 ) {
    Foundation.Interchange.SPECIAL_QUERIES['large_retina'] = 'only screen and (min-width: ' + ic_large + ') and (-webkit-min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_large + ') and (min--moz-device-pixel-ratio: 2),only screen and (min-width: ' + ic_large + ') and (-o-min-device-pixel-ratio: 2/1),only screen and (min-width: ' + ic_large + ') and (min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_large + ') and (min-resolution: 192dpi),only screen and (min-width: ' + ic_large + ') and (min-resolution: 2dppx)';
}

if ( ic_xlarge.length > 0 ) {
    Foundation.Interchange.SPECIAL_QUERIES['xlarge_retina'] = 'only screen and (min-width: ' + ic_xlarge + ') and (-webkit-min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xlarge + ') and (min--moz-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xlarge + ') and (-o-min-device-pixel-ratio: 2/1),only screen and (min-width: ' + ic_xlarge + ') and (min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xlarge + ') and (min-resolution: 192dpi),only screen and (min-width: ' + ic_xlarge + ') and (min-resolution: 2dppx)';
}

if ( ic_xxlarge.length > 0 ) {
    Foundation.Interchange.SPECIAL_QUERIES['xxlarge_retina'] = 'only screen and (min-width: ' + ic_xxlarge + ') and (-webkit-min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xxlarge + ') and (min--moz-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xxlarge + ') and (-o-min-device-pixel-ratio: 2/1),only screen and (min-width: ' + ic_xxlarge + ') and (min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xxlarge + ') and (min-resolution: 192dpi),only screen and (min-width: ' + ic_xxlarge + ') and (min-resolution: 2dppx)';
}

if ( ic_xxxlarge.length > 0 ) {
    Foundation.Interchange.SPECIAL_QUERIES['xxxlarge_retina'] = 'only screen and (min-width: ' + ic_xxxlarge + ') and (-webkit-min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xxxlarge + ') and (min--moz-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xxxlarge + ') and (-o-min-device-pixel-ratio: 2/1),only screen and (min-width: ' + ic_xxxlarge + ') and (min-device-pixel-ratio: 2),only screen and (min-width: ' + ic_xxxlarge + ') and (min-resolution: 192dpi),only screen and (min-width: ' + ic_xxxlarge + ') and (min-resolution: 2dppx)';
}

jQuery(document).foundation();
