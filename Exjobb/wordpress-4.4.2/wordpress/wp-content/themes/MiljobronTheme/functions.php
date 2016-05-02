

<?php
/*********** initierar alla scripts och länkar ***************************************************/
/* 
 * wp_enqueue_style: enqueues the sources and also registers them if ' $src: url ' provided 
 */
function miljo_script_enqueue() {
  // links here
    
    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri().'/Resources/bower_components/bootstrap/dist/css/bootstrap.min.css', array(),'1.0.0','all');
    wp_enqueue_style('customresponsiv', 'http://www.w3schools.com/lib/w3.css', array(),'1.0.0','all'); /* bibliotek som gör sidan automatiskt responsiv och ändrar storlek beroende på skärm storlek */
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/Miljostyle.css', array(),'1.0.0','all');
    wp_enqueue_style('social_buttons_tyle', get_template_directory_uri().'/css/bootstrap-social.css', array(),'1.0.0','all');
    wp_enqueue_style('social_buttons_fonts', get_template_directory_uri().'/css/assets/css/font-awesome.css', array(),'1.0.0','all');
    wp_enqueue_style('footer_bootstrap', get_template_directory_uri().'/css/footer-distributed-with-address-and-phones.css', array(),'1.0.0','all');
  // scripts here!
   /*wp_enqueue_script('angular-js', get_template_directory_uri().'/Resources/bower_components/angular/angular.js', array(), '1.0.0',false); 
   wp_enqueue_script('angularjs-route',get_template_directory_uri().'/Resources/bower_components/angular-route/angular-route.js', array(), '1.0.0', false);
   /* wp_enqueue_script("angular-min-js", get_template_directory_uri().'/Resources/bower_components/angular-resource/angular-resource.min.js', array(), '1.0.0',false); 
    wp_enqueue_script(
		'miljo_script_enqueue',
		get_template_directory_uri(). '/js/scripts.js',
		array( 'angularjs', 'angularjs-route' )
	);
    wp_enqueue_script('app-js', get_template_directory_uri().'/js/app.js',array(),'1.0.0',false); 
    wp_localize_script(
		'miljo_script_enqueue',
		'myLocalized',
		array(
			'partials' => trailingslashit( get_template_directory_uri() ) . '/partials/'
			)
	); */
    
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/functions.js',array(),'1.0.0',false); // false means running in header, which is bad,run in footer!
    wp_enqueue_script('appjs', get_template_directory_uri().'/js/app.js',array(),'1.0.0',false);
    wp_enqueue_script('appjs', get_template_directory_uri().'/js/scripts.js',array(),'1.0.0',false);
    wp_enqueue_script('jquery.min', get_template_directory_uri().'/Resources/bower_components/jquery/dist/jquery.min.js',array(),'1.0.0',false);
    wp_enqueue_script('bootstrap.min', get_template_directory_uri().'/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js',array(),'1.0.0',false);
    
   /* wp_enqueue_script("angularjs", get_template_directory_uri().'/Resources/bower_components/angular/angular.js', array(), '1.0.0',false); */
   
   /* wp_enqueue_script('angularjs-route',get_template_directory_uri().'/Resources/bower_components/angular-route/angular-route.js', array(), '1.0.0', false); */

}
add_action('wp_enqueue_scripts', 'miljo_script_enqueue');

/***************************Lägger till bootstrap meny******************************************************/
require_once('wp-bootstrap-navwalker/wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'MiljobronTheme' ),
));

/****************************************************************************************************/

function my_add_link_target($html) {
	$html = preg_replace( '/(<a.*")>/', '$1 target="_blank">', $html );
	return $html;
}
add_filter( 'image_send_to_editor', 'my_add_link_target', 10 );




