<?php
/**
 * PAI Shortcodes
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package understrap
 * @subpackage pai
 * @since 0.2.0
 */

/**
 * Shortcode to Display Sign-up Form
 *
 * @usage `[signup-form type="press" placeholder="Your Email" button="Join"]`
 * @default `placeholder` "Email"
 * @default `button` "Sign Up"
 *
 * @param  array $atts
 * @return string $output
 */
function pai_actionnetwork_form( $atts ) {

 	$atts = shortcode_atts(
 		array(
 			'type' 		=> '',
 			'placeholder'	=> __( 'Email', 'pai' ),
 			'button'	=> __( 'Sign Up', 'pai' )
 		),
 		$atts,
 		'signup-form'
 	);

  $output = sprintf( '<form id="pai-signup-form" action="%1$s" accept-charset="UTF-8" method="post">
      <input name="very_important_wink_wink" id="very_important_wink_wink" type="text" class="hidden">
      <div class="pai-signup-form-input-group">
        <label for="email">%2$s</label>
        <input name="email" id="pai-signup-form-email" placeholder="%2$s" required="required" type="email">
        <input id="pai-signup-submit-button" type="submit" value="%3$s">
      </div>
    </form>',
    ( 'press' === $atts['type'] ) ? esc_url( 'https://littlesis.org/home/pai_signup/press' ) : esc_url( 'https://littlesis.org/home/pai_signup' ),
    esc_attr( $atts['placeholder'] ),
    esc_attr( $atts['button'] )
  );

 	return $output;

 }
add_shortcode( 'signup-form', 'pai_actionnetwork_form' );

/**
 * Shortcode to Display Donation Form
 *
 * @usage `[embed-donation-form]`
 *
 * @param  array $atts
 * @return string $output
 */
function pai_actionnetwork_donation( $atts ) {

	$atts = shortcode_atts(
		array(
			'form' => 'support-the-public-accountability-initiative-and-littlesisorg',
		),
		$atts,
		'embed-donation-form'
	);

	$output = sprintf( '<script src="%1$s%2$s?format=js&source=widget"></script>
	  <div id="can-fundraising-area-%2$s" class="donate-form">
	</div><!--#can-fundraising-area-%2$s-->',
    esc_url( 'https://actionnetwork.org/widgets/v2/fundraising/' ),
    esc_attr( $atts['form'] )
  );

	return $output;

}
add_shortcode( 'embed-donation-form', 'pai_actionnetwork_donation' );
