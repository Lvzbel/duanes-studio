<?php get_header(); ?>

<div style="background-image: url('<?= get_field('header_image')['url'] ?>')" class="Banner jumbotron About">
  <div class="container">
    <h1 class="Banner__header display-4 font-weight-normal text-light"><?php the_field('header_title'); ?></h1>
    <p class="lead text-light"><?php the_field('header_description'); ?></p>
  </div>
</div>

<div class="About__container container">
  <?php if(have_rows('about_sections')) : ?>
  <?php while(have_rows('about_sections')) : the_row(); ?>
  <div class="About__section">
    <h2 class="About__title"><?= get_sub_field('title'); ?></h2>
    <div class="About__content row">
      <div class="About__box-img col-lg-6">
        <img src="<?= get_sub_field('image')['url']; ?>" alt="" class="About__image shadow">
      </div>
      <div class="About__text col-lg-6">
        <?= get_sub_field('description'); ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>