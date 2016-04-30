<?php while (have_posts()) : the_post(); ?>
  <!-- wireframes -->
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/ui/sitemap', 'sitemap'); ?>
<?php endwhile; ?>
