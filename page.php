<?php get_header(); ?>

<div class="page container">
  <h1 class="page__header"><?php the_title(); ?></h1>

  <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer(); ?>