<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('THEME_INCLUDE_PATH', get_stylesheet_directory().'/inc/');
function pprint($dd){
    echo '<pre>';
    print_r($dd);
    echo '</pre>';
}
require_once get_theme_file_path('/inc/theme_setups.php');
require_once get_theme_file_path('/inc/menu-fields.php');

/*
 * Theme Setups Hooks
 */
add_action( 'after_setup_theme', 'upomahin_setup' );
//add_action( 'wp_enqueue_scripts', 'upomahin_scripts' );