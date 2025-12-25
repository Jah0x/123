<?php
get_header();
$about_content = verde_get_section_content('about');
$works_content = verde_get_section_content('works');
$services_content = verde_get_section_content('services');
$contacts_content = verde_get_section_content('contacts');
?>
<section class="hero" id="hero">
    <div class="hero-content">
        <p class="eyebrow">Ландшафтный дизайн</p>
        <h1>Verde Studio</h1>
        <p class="lead">Создаем частные сады и городские пространства, где архитектура и природа работают на ваше настроение.</p>
        <div class="hero-actions">
            <a class="button" href="#works">Смотреть проекты</a>
            <a class="button ghost" href="<?php echo esc_url(TELEGRAM_URL); ?>" target="_blank" rel="noopener">Связаться в Telegram</a>
        </div>
        <div class="hero-meta">
            <div>
                <span class="stat">10+ лет</span>
                <span class="muted">опыта в проектах</span>
            </div>
            <div>
                <span class="stat">35 объектов</span>
                <span class="muted">проектирование и реализация</span>
            </div>
            <div>
                <span class="stat">Полный цикл</span>
                <span class="muted">от концепции до сопровождения</span>
            </div>
        </div>
    </div>
    <div class="hero-visual">
        <div class="hero-card">
            <span>verdelanding.ru</span>
            <strong>Гармония природы</strong>
            <p>Чистые линии, натуральные материалы и комфорт для жизни на участке.</p>
        </div>
    </div>
</section>
<section class="section about" id="about">
    <div class="section-heading">
        <p class="eyebrow">О студии</p>
        <h2>Мы создаём живые пространства</h2>
        <p class="muted">Понимаем участок, работаем с рельефом, подбираем растения и материалы под ваш стиль жизни.</p>
    </div>
    <div class="section-content">
        <?php echo $about_content ?: '<p class="placeholder">Добавьте контент на страницу “About”, чтобы рассказать о себе или команде.</p>'; ?>
    </div>
</section>
<section class="section works" id="works">
    <div class="section-heading">
        <p class="eyebrow">Портфолио</p>
        <h2>Показываем результаты</h2>
        <p class="muted">Комплексы отдыха, уютные дворики и современные садовые композиции.</p>
    </div>
    <div class="section-content cards">
        <?php echo $works_content ?: '<p class="placeholder">Добавьте контент на страницу “Works”, чтобы показать примеры реализованных проектов.</p>'; ?>
    </div>
</section>
<section class="section services" id="services">
    <div class="section-heading">
        <p class="eyebrow">Услуги</p>
        <h2>Решения под задачи участка</h2>
        <p class="muted">Концепции, генеральные планы, подбор растений, авторский надзор и уход.</p>
    </div>
    <div class="section-content cards">
        <?php echo $services_content ?: '<p class="placeholder">Добавьте контент на страницу “Services”, чтобы описать услуги и форматы работы.</p>'; ?>
    </div>
</section>
<section class="section contacts" id="contacts">
    <div class="contacts-grid">
        <div>
            <p class="eyebrow">Контакты</p>
            <h2>Запланируем встречу</h2>
            <p class="muted">Опишите участок и пожелания, подготовим варианты планировки и смету.</p>
            <div class="contact-actions">
                <a class="button" href="<?php echo esc_url(TELEGRAM_URL); ?>" target="_blank" rel="noopener">Написать в Telegram</a>
                <a class="button ghost" href="mailto:hello@verdelanding.ru">hello@verdelanding.ru</a>
            </div>
        </div>
        <div class="section-content">
            <?php echo $contacts_content ?: '<p class="placeholder">Добавьте контент на страницу “Contacts”, чтобы указать адрес, телефон и способы связи.</p>'; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
