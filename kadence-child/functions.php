<?php
if (!defined('ABSPATH')) {
    exit;
}

define('KADENCE_CHILD_TELEGRAM_URL', 'https://t.me/USERNAME');

add_action('wp_enqueue_scripts', function () {
    $parent_version = wp_get_theme('kadence')->get('Version');
    $child_version = wp_get_theme()->get('Version');
    wp_enqueue_style(
        'kadence-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        $parent_version
    );
    wp_enqueue_style(
        'kadence-child-style',
        get_stylesheet_uri(),
        array('kadence-parent-style'),
        $child_version
    );
    wp_enqueue_script(
        'kadence-child-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        $child_version,
        true
    );
    wp_localize_script(
        'kadence-child-main',
        'kadenceChild',
        array('telegramUrl' => KADENCE_CHILD_TELEGRAM_URL)
    );
});
