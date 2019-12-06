<?php get_header(); ?>

<div class="Banner jumbotron">
  <div class="container">
    <h1 class="Banner__header display-4 font-weight-normal text-light"><?php the_title(); ?></h1>
    <p class="lead text-light">Learn more about the man behind the camera.</p>
  </div>
</div>

<div class="About container">
  <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer(); ?>