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
                <img src="<?php echo esc_url(verde_get_logo_url()); ?>" alt="<?php bloginfo('name'); ?>">
                <span><?php bloginfo('name'); ?></span>
            </div>
        </div>
        <header class="site-header" id="site-header">
            <div class="header-inner">
                <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(verde_get_logo_url()); ?>" alt="<?php bloginfo('name'); ?>">
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
                            echo '<li><a href="' . esc_url(home_url('/#about')) . '">О студии</a></li>';
                            echo '<li><a href="' . esc_url(home_url('/#works')) . '">Проекты</a></li>';
                            echo '<li><a href="' . esc_url(home_url('/#services')) . '">Услуги</a></li>';
                            echo '<li><a href="' . esc_url(home_url('/#contacts')) . '">Контакты</a></li>';
                            echo '</ul>';
                        },
                    ]);
                    ?>
                </nav>
        <a class="button secondary" href="<?php echo esc_url(TELEGRAM_URL); ?>" target="_blank" rel="noopener">Telegram</a>
    </div>
</header>
<main class="site-main">
