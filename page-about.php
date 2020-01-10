<?php get_header(); ?>

<div style="background-image: url('<?= get_field('header_image')['url'] ?>')" class="Banner jumbotron About">
  <div class="container">
    <h1 class="Banner__header display-4 font-weight-normal text-light"><?php the_field('header_title'); ?></h1>
    <p class="lead text-light"><?php the_field('header_description'); ?></p>
  </div>
</div>

<div class="About__container container">
  <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer(); ?>