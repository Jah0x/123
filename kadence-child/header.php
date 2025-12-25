<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="intro-overlay" id="intro-overlay">
    <div class="intro-logo">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="Ignatova Anna">
        <span>Ignatova</span>
    </div>
</div>
<header class="site-header" id="site-header">
    <div class="header-inner">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="Ignatova Anna">
            <span><?php bloginfo('name'); ?></span>
        </a>
        <nav class="nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'menu',
                'fallback_cb' => function () {
                    echo '<ul class="menu">';
                    echo '<li><a href="#about">О себе</a></li>';
                    echo '<li><a href="#works">Работы</a></li>';
                    echo '<li><a href="#services">Услуги</a></li>';
                    echo '<li><a href="#contacts">Контакты</a></li>';
                    echo '</ul>';
                },
            ]);
            ?>
        </nav>
        <a class="button secondary" href="<?php echo esc_url(TELEGRAM_URL); ?>" target="_blank" rel="noopener">Telegram</a>
    </div>
</header>
<main class="site-main">
