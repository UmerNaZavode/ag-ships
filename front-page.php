<?php
/*
 * Template Name: front-page
 */

get_header();
?>

<?php echo get_template_part("template-parts/home/hero-section"); ?>

    <main>
        <?php echo get_template_part("template-parts/home/news"); ?>
        <?php echo get_template_part("template-parts/home/history"); ?>
        <?php echo get_template_part("template-parts/home/publications"); ?>
        <?php echo get_template_part("template-parts/home/projects"); ?>
        <?php echo get_template_part("template-parts/home/safety"); ?>
    </main>

<?php get_footer(); ?>