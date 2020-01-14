<?php get_header(); ?>

<div class="contact container">
  <div class="contact__heading">
    <h1><?php the_field('title'); ?></h1>
    <span class="lead"><?php the_field('sub_title'); ?></span>
  </div>

  <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer(); ?>