<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$logo_path = get_stylesheet_directory() . '/assets/images/logo.png';
$logo_uri = get_stylesheet_directory_uri() . '/assets/images/logo.png';
$has_logo = file_exists($logo_path);
?>
<div class="intro-overlay" id="intro-overlay">
    <div class="intro-logo">
        <?php if ($has_logo) : ?>
            <img src="<?php echo esc_url($logo_uri); ?>" alt="Логотип Анна Игнатова">
        <?php else : ?>
            <span class="logo-text">AI</span>
        <?php endif; ?>
    </div>
</div>
<header class="site-header" id="site-header">
    <div class="header-inner">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php if ($has_logo) : ?>
                <img src="<?php echo esc_url($logo_uri); ?>" alt="Анна Игнатова">
            <?php else : ?>
                <span class="brand-text">Анна Игнатова</span>
            <?php endif; ?>
        </a>
        <nav class="nav" aria-label="Главное меню">
            <a href="#about" data-scroll>О себе</a>
            <a href="#works" data-scroll>Работы</a>
            <a href="#services" data-scroll>Услуги</a>
            <a href="#contacts" data-scroll>Контакты</a>
        </nav>
        <a class="telegram-btn" data-telegram target="_blank" rel="noopener">Telegram</a>
    </div>
</header>
