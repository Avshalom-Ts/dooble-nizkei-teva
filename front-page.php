<?php
/**
 * Template Name: Front Page
 * Description: Custom home page template
 */

get_header(); ?>

<main class="main-content">

    <?php get_template_part('template-parts/news-section'); ?>

    <?php get_template_part('template-parts/hero-section'); ?>

    <?php get_template_part('template-parts/hero-sidebar'); ?>

    <?php get_template_part('template-parts/floating-buttons'); ?>

    <?php get_template_part('template-parts/gallery-section'); ?>

    <?php get_template_part('template-parts/farmary-gallery-section'); ?>

    <?php get_template_part('template-parts/what-new-section'); ?>


</main>

<?php get_footer(); ?>