</main>
<footer class="footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="Ignatova Anna">
            <div>
                <p><?php bloginfo('name'); ?></p>
                <p class="muted">Ландшафтный дизайнер</p>
            </div>
        </div>
        <div class="footer-actions">
            <a class="button" href="<?php echo esc_url(TELEGRAM_URL); ?>" target="_blank" rel="noopener">Telegram</a>
        </div>
        <div class="footer-meta">
            <span><?php echo esc_html(get_bloginfo('name')); ?> © <?php echo date('Y'); ?></span>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
