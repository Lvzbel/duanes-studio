<?php get_header(); ?>

<?php 
// echo '<pre>';
// print_r(get_field('main_header_img')['url']);
// echo '</pre>';
// die();

?>
<header class="header" style="background-image: url('<?php echo get_field('main_header_img')['url']; ?>');">
  <div class="header__container text-white header__background">
    <h3 class="display-5 header__by"><?php the_field('main_header_top'); ?></h3>
    <h1 class="display-2 header__main"><?php the_field('main_header'); ?></h1>
    <p class="lead header__lead"><?php the_field('main_header_bottom'); ?></p>
    <a href="<?php echo site_url('/gallery'); ?>" class="btn btn-lg btn-primary px-5 header__btn">Gallery</a>
  </div>

</header>

<section class="services">
  <div class="container">
    <h2 class="display-4 services__header"><?php the_field('services_title'); ?></h2>
    <div class="row services__container">

      <?php if(have_rows('services')) : ?>
      <?php while(have_rows('services')) : the_row(); ?>
      <a href="<?php echo site_url('/gallery'); ?>" data-aos="zoom-in-up" data-aos-duration="1000"
        class="col-md-3 services__service">
        <div class="card services__card">
          <img src="<?= get_sub_field('image')['url'] ?>" class="card-img-top" alt="Swimmer">
          <div class="card-body">
            <h3 class="card-title text-secondary"><?= get_sub_field('title') ?></h3>
            <p class="card-text"><?= get_sub_field('description') ?></p>
          </div>
        </div>
      </a>
      <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</section>
<section class="about">
  <div class="container text-white">
    <h2 class="about__header display-4"><?php the_field('about_title'); ?></h2>
    <div class="row">
      <div class="col-md-6">
        <div class="about__images-container">
          <img src="<?= get_field('about_image')['url']; ?>" alt="" class="img-fluid about__img">
        </div>
      </div>
      <div class="col-md-6">
        <div class="about__description">
          <?php the_field('about_description'); ?>
        </div>
      </div>
    </div>
    <div class="about__btn-container">
      <a href="<?php echo site_url('/about'); ?>" class="about__btn btn btn-secondary btn-lg">Read More...</a>
    </div>
  </div>
</section>

<!-- Blog Post Preview -->
<section class="blog-preview">
  <div class="container">
    <h2 class="blog-preview__header display-4">Recent Blog Posts</h2>

    <?php 
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 3
      ));

      while($homepagePosts->have_posts( )) {
        $homepagePosts->the_post(  ); ?>
    <div data-aos-duration="1000" data-aos="fade-left" class="row justify-content-md-center blog-preview__row">
      <div class="col-md-3">
        <img alt="" class="rounded shadow blog-preview__img" src="<?php 
        if( has_post_thumbnail() ):
            echo get_the_post_thumbnail($id);
        endif; 
        ?>
      </div>
      <div class=" col-md-7">
        <h3><a class="text-secondary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
        <div class="blog-preview__btn-container">
          <a href="<?php the_permalink(); ?>" class="btn btn-primary blog-preview__btn">Read more...</a>
        </div>
      </div>
    </div>
    <?php }
    ?>
  </div>

</section>

<?php get_footer(); ?>