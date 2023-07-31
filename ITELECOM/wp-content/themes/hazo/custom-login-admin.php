<?php

/**

 * Neostore custom Login admin Page

 *

 * @package Neostore

 */



// add custom stylesheet

function neostore_enqueue_style() {

     wp_enqueue_style( 'neostore-custom-login', get_template_directory_uri() . '/lib/admin-login/admin-login.css', false ); 

}



function neostore_enqueue_script() {

     wp_enqueue_script( 'admin-login', get_template_directory_uri() . '/lib/admin-login/admin-login.js', null, null, true );

}



add_action( 'login_enqueue_scripts', 'neostore_enqueue_style', 10 );

add_action( 'login_enqueue_scripts', 'neostore_enqueue_script', 1 );



add_filter( 'login_headerurl', 'pridio_login_headerurl');

function pridio_login_headerurl()

{

     return 'https://hazomedia.com/';

}



add_filter( 'login_headertitle', 'pridio_login_headertitle');

function pridio_login_headertitle()

{

     return 'DỊCH VỤ SEO VÀ THIẾT KẾ WEBSITE GIÁ RẺ HÀNG ĐẦU VIỆT NAM';

}
