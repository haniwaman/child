<?php
/**
 * Main Visual
 *
 * @package WordPress
 */

?>

<?php if ( get_theme_mod( 'my_slider_image1' ) ) : ?>
	<?php
	$slider_items = [];
	for ( $i = 1; $i <= 5; $i++ ) {
		if ( get_theme_mod( 'my_slider_image' . $i ) ) {
			$slider_items[] = get_theme_mod( 'my_slider_image' . $i );
		}
	}
	?>
<!-- mv -->
<div id="mv" class="mv-image">

<div class="swiper-container">
	<div class="swiper-wrapper">
		<?php for ( $i = 1; $i <= count( $slider_items ); $i++ ) : ?>
		<div class="swiper-slide"><img src="<?php echo esc_url( get_theme_mod( 'my_slider_image' . $i ) ); ?>" alt=""></div>
		<?php endfor; ?>
	</div>
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>

</div><!-- /mv -->
<?php endif ?>
