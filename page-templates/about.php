<?php
/**
 * Template Name: about-us
 */

get_header();
?>

<!-- breadcrumb -->
<?php get_template_part('page-templates/helpers/share/bread-crumb'); ?>
<!-- breadcrumb -->

<!-- Who we are -->
<?php get_template_part('page-templates/helpers/about/who-are'); ?>
<!-- Who we are -->

    <!-- Story and Client -->
<?php get_template_part('page-templates/helpers/about/story-clients'); ?>
    <!-- Story and Client -->ç

    <!-- /.youtube -->
<?php get_template_part('page-templates/helpers/about/embed-youtube'); ?>
    <!-- /.youtube -->
    <!-- /.sponsor -->
<?php get_template_part('page-templates/helpers/share/sponsors'); ?>
    <!-- /.sponsor -->

    <!-- /.subscribe -->
<?php get_template_part('page-templates/helpers/share/subscribe'); ?>
    <!-- /.subscribe -->

<?php get_footer() ?>