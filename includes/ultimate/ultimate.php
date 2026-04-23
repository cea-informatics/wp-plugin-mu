<?php

if (!defined('ABSPATH')) exit;

define('WPUM_VERSION', '1.0.0');
define('WPUM_PLUGIN_URL', plugin_dir_url(__FILE__));

function wpum_enqueue_styles() {
    if (!function_exists('um_is_core_page')) return;

    wp_enqueue_style('wpum-style', WPUM_PLUGIN_URL . 'assets/ultimate.css', [], WPUM_VERSION);
}

add_action('wp_enqueue_scripts', 'wpum_enqueue_styles');
