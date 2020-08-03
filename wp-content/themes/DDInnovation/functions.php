<?php

/******Início: Configuração para o tema filho************/

add_action('wp_enqueue_scripts', 'wpi_js_css_child');
function wpi_js_css_child(){

//CSS e JS Swiper
	wp_enqueue_style('swiper-min-css','https://unpkg.com/swiper/css/swiper.min.css',[],null);
	wp_enqueue_script('swiper-min-js', 'https://unpkg.com/swiper/js/swiper.min.js',['jquery'],null , true);


//CSS filho herdado do Pai
	wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');

//CSS filho 
	wp_enqueue_style('dd-style-css', get_stylesheet_directory_uri() . '/css/dd_custom.css');

//JS Filho 
	wp_enqueue_script('dd-script-js', get_stylesheet_directory_uri() . '/js/dd_custom.js', ['swiper-min-js'], false, true);

}

/******Término: Configuração para o tema filho************/


/******Início: Confiruação de redirecionamento de login****/

add_filter( 'login_redirect', 'wpi_login' );
function wpi_login() {
    // Change this to the url to Updates page.
	return home_url( '/wp-admin' );
}

add_action('wp_logout','wpi_logout');
function wpi_logout(){
	wp_redirect( '/home' );
	exit();
}

add_action('wp_failed','wpi_failed');
function wpi_failed(){
	wp_redirect( '/home' );
	exit();
}
/******Término: Confiruação de redirecionamento de login****/

/******Início: Função para utilização no CopyRights mostra o ano atual****/
add_shortcode('ano', 'ano_atual');
function ano_atual(){
        //$ano = date('Y');
        return date('Y');
}
/******Término: Função para utilização no CopyRights mostra o ano atual****/


