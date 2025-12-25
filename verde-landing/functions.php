<?php
if (!defined('TELEGRAM_URL')) {
    define('TELEGRAM_URL', 'https://t.me/USERNAME');
}

function verde_get_logo_url(): string
{
    $path = get_template_directory() . '/assets/images/logo.png';
    $uri = get_template_directory_uri() . '/assets/images/logo.png';
    $version = file_exists($path) ? filemtime($path) : wp_get_theme()->get('Version');
    return add_query_arg('v', $version, $uri);
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Primary Menu', 'verde-landing'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('verde-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap', [], null);
    wp_enqueue_style('verde-style', get_stylesheet_uri(), ['verde-fonts'], $theme_version);
    wp_enqueue_style('verde-main', get_template_directory_uri() . '/assets/css/main.css', ['verde-style'], $theme_version);
    wp_enqueue_script('verde-main', get_template_directory_uri() . '/assets/js/main.js', [], $theme_version, true);
});

function verde_get_section_content(string $slug): string
{
    $page = get_page_by_path($slug);
    if ($page instanceof WP_Post) {
        return apply_filters('the_content', $page->post_content);
    }
    return '';
}
