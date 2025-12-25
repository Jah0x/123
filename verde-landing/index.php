<?php
get_header();
?>
<section class="page-content">
    <div class="page-content-inner">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        } else {
            echo '<p class="placeholder">Добавьте записи или страницы, чтобы вывести контент на главной.</p>';
        }
        ?>
    </div>
</section>
<?php
get_footer();
