<?php
/**
 * Theme About Page
 *
 * @package FSE Empire
 * @since 1.0
 */

function fse_empire_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_fse-empire-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'fse-empire-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'fse_empire_theme_page_admin_style' );

/**
 * Add theme page
 */
function fse_empire_menu() {
	add_theme_page( esc_html__( 'FSE Empire Theme Info', 'fse-empire' ), esc_html__( 'FSE Empire Theme Info', 'fse-empire' ), 'edit_theme_options', 'fse-empire-theme', 'fse_empire_theme_page_display' );
}
add_action( 'admin_menu', 'fse_empire_menu' );

/**
 * Display About page
 */
function fse_empire_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'fse-empire' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://risingthemes.net/','fse-empire'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/logo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with FSE Empire!', 'fse-empire' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! FSE Empire has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'fse-empire' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Empire Pro Theme', 'fse-empire' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Empire Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'fse-empire' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://risingthemes.net/shop/empire-wordpress-theme/"); ?>><?php esc_html_e( 'Buy Empire Pro', 'fse-empire' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'fse-empire' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://risingthemes.net/shop/empire-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'fse-empire' ); ?></a>
						<a target="_blank" href="http://risingdemo.net/empire/"><?php esc_html_e( 'View Demo', 'fse-empire' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://risingthemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'fse-empire' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'fse-empire' ); ?></h3>
						<p><?php esc_html_e( 'Loved FSE Empire? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'fse-empire' ); ?></p>
						<a href="https://wordpress.org/support/theme/fse-empire/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'fse-empire' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
