<?php 

/* 
Plugin Name: MyPlugin
Author: Test
*/ 
 

function testing() {
wp_register_style( 'testingcss', plugins_url( 'plugintests/assets/css/main.css' ) ); 
wp_equeue_style('testingcss');
}

add_action('wp_enqueue_scripts','testing');

?> 
