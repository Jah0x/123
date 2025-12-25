<?php get_header(); ?>
<main class="landing">
    <section id="hero" class="hero">
        <div>
            <h1>Я помогу вам создать сад вашей мечты</h1>
            <p>Создаю уютные и функциональные пространства: от идеи и концепции до реализации и ухода.</p>
            <div class="hero-actions">
                <a class="secondary-btn" href="#works" data-scroll>Посмотреть работы</a>
                <a class="telegram-btn" data-telegram target="_blank" rel="noopener">Написать в Telegram</a>
            </div>
        </div>
        <div class="about-card">
            <div class="contacts">
                <h3>Связаться со мной</h3>
                <p>Расскажите о своём участке, и я предложу гармоничное решение для вашего сада.</p>
                <div class="contact-actions">
                    <a class="telegram-btn" data-telegram target="_blank" rel="noopener">Telegram</a>
                    <a class="secondary-btn" href="#contacts" data-scroll>Контакты</a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="section">
        <div class="section-title">О себе</div>
        <div class="about">
            <div class="photo-placeholder" aria-hidden="true"></div>
            <div class="content">
                <h2>Анна Игнатова</h2>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="about-text"><?php the_content(); ?></div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <section id="works" class="section">
        <div class="section-title">Работы</div>
        <div class="grid">
            <?php
            $projects = array(
                array('title' => 'Сад с хвойными и огненным акцентом', 'desc' => 'Гармония вечнозелёных фактур и ярких многолетников.'),
                array('title' => 'Современный двор с зоной отдыха', 'desc' => 'Минималистичные дорожки, подсветка и уютная пергола.'),
                array('title' => 'Лесной участок у реки', 'desc' => 'Сохранение естественного рельефа и мягкие переходы к воде.'),
                array('title' => 'Цветущий сад у дома', 'desc' => 'Композиции из роз, лаванды и трав для круглогодичного эффекта.'),
                array('title' => 'Компактный городской сад', 'desc' => 'Рациональное зонирование, вертикальное озеленение и комфорт.'),
                array('title' => 'Декоративный огород', 'desc' => 'Грядки, которые радуют урожаем и украшают участок.')
            );
            foreach ($projects as $project) : ?>
                <article class="card">
                    <h3><?php echo esc_html($project['title']); ?></h3>
                    <p><?php echo esc_html($project['desc']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section id="services" class="section">
        <div class="section-title">Услуги</div>
        <div class="services-list">
            <?php
            $services = array(
                array('title' => 'Концепция и 3D-визуализация', 'desc' => 'Покажу, как будет выглядеть ваш будущий сад.'),
                array('title' => 'Дендроплан и посадки', 'desc' => 'Подбор растений под климат, стиль и уход.'),
                array('title' => 'Дорожки и освещение', 'desc' => 'Функциональные маршруты и мягкая архитектурная подсветка.'),
                array('title' => 'Системы полива и дренаж', 'desc' => 'Технологии, которые экономят время и заботятся о растениях.'),
                array('title' => 'Авторский надзор', 'desc' => 'Контроль реализации проекта и корректировки на месте.'),
                array('title' => 'Уход за садом', 'desc' => 'Сезонные работы, обрезка, подготовка к зиме.')
            );
            foreach ($services as $service) : ?>
                <div class="service-item">
                    <h4><?php echo esc_html($service['title']); ?></h4>
                    <p><?php echo esc_html($service['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section id="contacts" class="section">
        <div class="section-title">Контакты</div>
        <div class="contacts">
            <h3>Оставьте заявку</h3>
            <p>Свяжитесь удобным способом, и я подготовлю персональные рекомендации по вашему участку.</p>
            <div class="contact-actions">
                <a class="telegram-btn" data-telegram target="_blank" rel="noopener">Написать в Telegram</a>
                <a class="secondary-btn" href="tel:+70000000000">Позвонить</a>
            </div>
            <div class="contact-info">
                <div class="info-item">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.75c-3.45 0-6.25 2.74-6.25 6.12 0 4.63 5.57 10.36 5.8 10.59.25.24.65.24.9 0 .23-.23 5.8-5.96 5.8-10.59 0-3.38-2.8-6.12-6.25-6.12zm0 8.77a2.64 2.64 0 1 1 0-5.27 2.64 2.64 0 0 1 0 5.27z" fill="currentColor"/></svg>
                    <span>Москва и область</span>
                </div>
                <div class="info-item">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1.2l-8 4.8-8-4.8V5zm0 3.35V19a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8.35l-7.48 4.49a2 2 0 0 1-2.04 0L4 8.35z" fill="currentColor"/></svg>
                    <span>hello@example.com</span>
                </div>
                <div class="info-item">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.62 4.06c.18-.53.72-.84 1.26-.71l2.54.61a1 1 0 0 1 .74.96c-.02.53-.08 1.33-.18 2.38a1 1 0 0 1-.29.64l-1.21 1.19a10.54 10.54 0 0 0 4.32 4.32l1.2-1.2a1 1 0 0 1 .63-.28c1.05-.1 1.85-.16 2.38-.18a1 1 0 0 1 .97.74l.6 2.52a1 1 0 0 1-.71 1.22c-.86.27-2.05.54-3.56.54-1.6 0-3.5-.33-5.64-1.3-2.14-.96-3.9-2.37-5.3-4.22-1.4-1.85-2.2-3.64-2.5-5.37-.29-1.73-.12-3.04.32-3.98z" fill="currentColor"/></svg>
                    <span>+7 000 000 00 00</span>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
