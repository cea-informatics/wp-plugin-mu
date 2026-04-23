<?php

if (!defined('ABSPATH')) exit;

define('WPWF_VERSION', '1.0.0');
define('WPWF_PLUGIN_URL', plugin_dir_url(__FILE__));

function wpwf_enqueue_styles() {
    if (!class_exists('WPForms') && !function_exists('wpforms')) return;

    wp_enqueue_style('wpwf-style', WPWF_PLUGIN_URL . 'assets/wpforms.css', [], WPWF_VERSION);
}

add_action('wp_enqueue_scripts', 'wpwf_enqueue_styles');
