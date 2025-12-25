<?php
get_header();
$about_content = ignatova_get_section_content('about');
$works_content = ignatova_get_section_content('works');
$services_content = ignatova_get_section_content('services');
$contacts_content = ignatova_get_section_content('contacts');
?>
<section class="hero" id="hero">
    <div class="hero-content">
        <p class="eyebrow">Ландшафтный дизайн</p>
        <h1>Анна Игнатова</h1>
        <p class="lead">Современные частные сады, уютные городские пространства и авторские проекты для жизни на природе.</p>
        <div class="hero-actions">
            <a class="button" href="#works">Смотреть работы</a>
            <a class="button ghost" href="<?php echo esc_url(TELEGRAM_URL); ?>" target="_blank" rel="noopener">Связаться в Telegram</a>
        </div>
        <div class="hero-meta">
            <div>
                <span class="stat">10+ лет</span>
                <span class="muted">опыта в проектах</span>
            </div>
            <div>
                <span class="stat">30+</span>
                <span class="muted">реализованных садов</span>
            </div>
            <div>
                <span class="stat">Полный цикл</span>
                <span class="muted">от концепции до ухода</span>
            </div>
        </div>
    </div>
    <div class="hero-visual">
        <div class="hero-card">
            <span>ignatovaanna.ru</span>
            <strong>Авторские ландшафты</strong>
            <p>Натуральные материалы, гармония линий и внимание к деталям.</p>
        </div>
    </div>
</section>
<section class="section about" id="about">
    <div class="section-heading">
        <p class="eyebrow">О себе</p>
        <h2>Ландшафт с характером</h2>
        <p class="muted">История, подход и ценности, которые формируют каждый проект.</p>
    </div>
    <div class="section-content">
        <?php echo $about_content ?: '<p class="placeholder">Добавьте контент на страницу “About”, чтобы показать блок о себе.</p>'; ?>
    </div>
</section>
<section class="section works" id="works">
    <div class="section-heading">
        <p class="eyebrow">Портфолио</p>
        <h2>Свежие проекты</h2>
        <p class="muted">Подборка реализованных садов, городских двориков и террас.</p>
    </div>
    <div class="section-content cards">
        <?php echo $works_content ?: '<p class="placeholder">Добавьте контент на страницу “Works”, чтобы показать примеры работ.</p>'; ?>
    </div>
</section>
<section class="section services" id="services">
    <div class="section-heading">
        <p class="eyebrow">Услуги</p>
        <h2>Решения для вашего участка</h2>
        <p class="muted">От концепции до регулярного ухода за садом.</p>
    </div>
    <div class="section-content cards">
        <?php echo $services_content ?: '<p class="placeholder">Добавьте контент на страницу “Services”, чтобы показать услуги.</p>'; ?>
    </div>
</section>
<section class="section contacts" id="contacts">
    <div class="contacts-grid">
        <div>
            <p class="eyebrow">Контакты</p>
            <h2>Обсудим ваш проект</h2>
            <p class="muted">Опишите участок, пожелания и сроки — я предложу решения и бюджет.</p>
            <div class="contact-actions">
                <a class="button" href="<?php echo esc_url(TELEGRAM_URL); ?>" target="_blank" rel="noopener">Написать в Telegram</a>
                <a class="button ghost" href="mailto:hello@ignatovaanna.ru">hello@ignatovaanna.ru</a>
            </div>
        </div>
        <div class="section-content">
            <?php echo $contacts_content ?: '<p class="placeholder">Добавьте контент на страницу “Contacts”, чтобы показать детали связи.</p>'; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
