<?php

function dl_enqueue_style() {
    $theme_data = wp_get_theme();

   
    wp_register_style('bootstrap-theme', get_parent_theme_file_uri('/assets/css/bootstrap-theme.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('bootstrap-th', get_parent_theme_file_uri('/assets/css/bootstrap-theme.css.map'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('bootstrap-theme-min', get_parent_theme_file_uri('/assets/css/bootstrap-theme.min.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/css/bootstrap.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('bootstrap-css-map', get_parent_theme_file_uri('/assets/css/bootstrap.css.map'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('bootstrap-min-css', get_parent_theme_file_uri('/assets/css/bootstrap.min.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('styles', get_parent_theme_file_uri('/assets/css/styles.css'), null, $theme_data->get( 'Version' ), 'screen');
    
   
    wp_enqueue_style('bootstrap-theme');
    wp_enqueue_style('bootstrap-th');
    wp_enqueue_style('bootstrap-theme-min');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-css-map');
    wp_enqueue_style('bootstrap-min-css');
    wp_enqueue_style('styles');
    
}
add_action( 'wp_enqueue_scripts', 'dl_enqueue_style');

function dl_enqueue_scripts() {
    $theme_data = wp_get_theme();

    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate' );

    wp_register_script('jquery-3', get_parent_theme_file_uri('assets/js/jquery-3.3.1.slim.min.js'), null, '3.3.1', true);

    wp_register_script('jquery-1', get_parent_theme_file_uri('assets/js/jquery-1.11.2.min.js'), null, '1.11.2', true);
    wp_register_script('modernizr-2', get_parent_theme_file_uri('assets/js/modernizr-2.8.3-respond-1.4.2.min.js'), 'jquery-mio', '1.4.2', true);
    wp_register_script('bootstrap', get_parent_theme_file_uri('assets/js/bootstrap.min.js'), 'jquery-3', null, true);
    wp_register_script('plugins', get_parent_theme_file_uri('assets/js/plugins.js'), 'jquery-3', null, true);
    wp_register_script('main', get_parent_theme_file_uri('assets/js/main.js'), 'jquery-3', null, true);
    
    

    wp_enqueue_script('jquery-3');
    wp_enqueue_script('jquery-1');
    wp_enqueue_script('modernizr-2');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('plugins');
    wp_enqueue_script('main');
  
}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts');
?>