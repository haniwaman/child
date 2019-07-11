<?php
/**
 * My Customizer Slider
 *
 * @package WordPress
 */

if ( ! function_exists( 'my_customize_slider' ) ) {
	/**
	 * カスタマイザーの管理
	 *
	 * @param object $wp_customize カスタマイザーを管理するオブジェクト.
	 * @return void
	 */
	function my_customize_slider( $wp_customize ) {

		// スライダー.
		$wp_customize->add_section(
			'my_slider',
			array(
				'title'    => __( 'スライダー', 'raccoon' ),
				'priority' => 45,
			)
		);

		// スライダーの画像01.
		$wp_customize->add_setting( 'my_slider_image1' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'my_slider_image1',
				array(
					'label'    => __( '画像01', 'raccoon' ),
					'section'  => 'my_slider',
					'settings' => 'my_slider_image1',
					'priority' => 1,
				)
			)
		);

		// スライダーの画像02.
		$wp_customize->add_setting( 'my_slider_image2' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'my_slider_image2',
				array(
					'label'    => __( '画像02', 'raccoon' ),
					'section'  => 'my_slider',
					'settings' => 'my_slider_image2',
					'priority' => 2,
				)
			)
		);

		// スライダーの画像03.
		$wp_customize->add_setting( 'my_slider_image3' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'my_slider_image3',
				array(
					'label'    => __( '画像03', 'raccoon' ),
					'section'  => 'my_slider',
					'settings' => 'my_slider_image3',
					'priority' => 3,
				)
			)
		);

		// スライダーの画像04.
		$wp_customize->add_setting( 'my_slider_image4' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'my_slider_image4',
				array(
					'label'    => __( '画像04', 'raccoon' ),
					'section'  => 'my_slider',
					'settings' => 'my_slider_image4',
					'priority' => 4,
				)
			)
		);

		// スライダーの画像05.
		$wp_customize->add_setting( 'my_slider_image5' );
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'my_slider_image5',
				array(
					'label'    => __( '画像05', 'raccoon' ),
					'section'  => 'my_slider',
					'settings' => 'my_slider_image5',
					'priority' => 5,
				)
			)
		);

	}
}
add_action( 'customize_register', 'my_customize_slider' );
