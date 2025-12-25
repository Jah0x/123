<?php
get_header();
$about_default = <<<HTML
<div class="about-grid">
    <div class="about-text">
        <p>Verde Studio создаёт частные сады и общественные пространства, где архитектура и природа дополняют друг друга. Мы работаем с рельефом, освещением и инженерией участка, чтобы получить устойчивый и живой ландшафт.</p>
        <p>Команда включает ландшафтных архитекторов, дендрологов и инженеров. Каждый проект ведём в сопровождении: контролируем посадки, работу подрядчиков и сезонный уход, чтобы зелёные решения сохраняли форму долгие годы.</p>
    </div>
    <div class="about-list">
        <div class="about-item">
            <span class="badge">Подход</span>
            <p>Диалог с архитектурой дома, анализ инсоляции и почвы, подбор пород под климат.</p>
        </div>
        <div class="about-item">
            <span class="badge">Команда</span>
            <p>Проектировщики, визуализаторы, инженеры полива и освещения, кураторы авторского надзора.</p>
        </div>
        <div class="about-item">
            <span class="badge">Результат</span>
            <p>Пространства, которые работают круглый год: тёплое освещение, мульти-сезонные посадки и удобные сценарии отдыха.</p>
        </div>
    </div>
</div>
HTML;

$works_default = <<<HTML
<div class="work-grid">
    <article class="work-card">
        <div class="pill">Реализация</div>
        <h3>Загородный сад с перголой</h3>
        <p>Теневые зоны с перголой и костровой, миксбордеры из гортензий и хвойных, скрытая подсветка дорожек.</p>
        <ul class="tags">
            <li>Авторский надзор</li>
            <li>Система полива</li>
            <li>Освещение</li>
        </ul>
    </article>
    <article class="work-card">
        <div class="pill">Город</div>
        <h3>Двор клуба резиденций</h3>
        <p>Зонирование для отдыха и спорта, долговечные покрытия, дождевой дренаж и подбор растений для активного города.</p>
        <ul class="tags">
            <li>Генплан</li>
            <li>Эксплуатация</li>
            <li>Навигация</li>
        </ul>
    </article>
    <article class="work-card">
        <div class="pill">Концепция</div>
        <h3>Участок у воды</h3>
        <p>Террасы с видом на реку, дорожки из натурального камня, береговое укрепление и посадки, устойчивые к влаге.</p>
        <ul class="tags">
            <li>Берегоукрепление</li>
            <li>Патио</li>
            <li>Дендроплан</li>
        </ul>
    </article>
</div>
HTML;

$services_default = <<<HTML
<div class="service-grid">
    <div class="service-card">
        <h3>Концепция и мастер-план</h3>
        <p>Создаём функциональные схемы, дорожную сеть, сценарии освещения и зоны отдыха с учётом инженерии участка.</p>
        <ul>
            <li>3D-визуализации и коллажи</li>
            <li>Генеральный план с посадками</li>
            <li>Подбор материалов и покрытий</li>
        </ul>
    </div>
    <div class="service-card">
        <h3>Рабочая документация</h3>
        <p>Готовим точные чертежи для строителей и поставщиков: разбивочные планы, узлы мощения и схемы полива.</p>
        <ul>
            <li>План дренажа и ливневки</li>
            <li>Схемы освещения и автоматики</li>
            <li>Посадочные ведомости и спецификации</li>
        </ul>
    </div>
    <div class="service-card">
        <h3>Реализация и сопровождение</h3>
        <p>Координируем подрядчиков, ведём авторский надзор, контролируем посадки и бережём замысел при эксплуатации.</p>
        <ul>
            <li>Выезд куратора на объект</li>
            <li>Настройка полива и света</li>
            <li>Сезонный уход и обновления</li>
        </ul>
    </div>
</div>
HTML;

$contacts_default = <<<HTML
<div class="contacts-panel">
    <div class="contact-block">
        <span class="pill">Старт</span>
        <p>Расскажите о площади участка, желаемых сценариях и сроках. Подготовим предложение и примерный бюджет.</p>
    </div>
    <div class="contact-block">
        <span class="pill">Связь</span>
        <ul class="contact-list">
            <li><strong>Телефон:</strong> +7 (916) 000-00-00</li>
            <li><strong>Почта:</strong> hello@verdelanding.ru</li>
            <li><strong>Адрес:</strong> Москва, Саввинская наб., 12</li>
        </ul>
    </div>
</div>
HTML;

$about_content = verde_get_section_content('about') ?: $about_default;
$works_content = verde_get_section_content('works') ?: $works_default;
$services_content = verde_get_section_content('services') ?: $services_default;
$contacts_content = verde_get_section_content('contacts') ?: $contacts_default;
?>
<section class="hero" id="hero">
    <div class="hero-content">
        <p class="eyebrow">Ландшафтный дизайн</p>
        <h1>Verde Studio</h1>
        <p class="lead">Создаем частные сады и городские пространства, где архитектура и природа работают на ваше настроение.</p>
        <div class="hero-actions">
            <a class="button" href="<?php echo esc_url(home_url('/#works')); ?>">Смотреть проекты</a>
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
        <?php echo $about_content; ?>
    </div>
</section>
<section class="section works" id="works">
    <div class="section-heading">
        <p class="eyebrow">Портфолио</p>
        <h2>Показываем результаты</h2>
        <p class="muted">Комплексы отдыха, уютные дворики и современные садовые композиции.</p>
    </div>
    <div class="section-content cards">
        <?php echo $works_content; ?>
    </div>
</section>
<section class="section services" id="services">
    <div class="section-heading">
        <p class="eyebrow">Услуги</p>
        <h2>Решения под задачи участка</h2>
        <p class="muted">Концепции, генеральные планы, подбор растений, авторский надзор и уход.</p>
    </div>
    <div class="section-content cards">
        <?php echo $services_content; ?>
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
            <?php echo $contacts_content; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
