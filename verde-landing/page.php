<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <section class="page-hero">
            <div class="page-hero-inner">
                <h1><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) { ?>
                    <div class="page-hero-image"><?php the_post_thumbnail('large'); ?></div>
                <?php } ?>
            </div>
        </section>
        <section class="page-content">
            <div class="page-content-inner">
                <?php the_content(); ?>
            </div>
        </section>
        <?php
    }
}
get_footer();
?>
