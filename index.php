<?php get_header(); ?>

<div class="blog__banner jumbotron"
  style="background-image: url(<?php echo get_theme_file_uri('/src/images/banner-blog.jpg'); ?>);">
  <div class="container">
    <h1 class="blog__header display-4 font-weight-normal text-light">Blog</h1>
    <p class="lead text-light">Stay up to the day about my past projects and other announcements</p>
  </div>
</div>

<div class="blog__body container">
  <?php 
    while(have_posts()) {
      the_post(); ?>
  <h2 class="h1 text-primary"><?php the_title(); ?></h2>
  <div class="blog__metabox">
    <p class="blog__metabox-text"> Posted by <?php the_author_posts_link(); ?> on <?php the_time("n.j.y"); ?> in
      <?php echo get_the_category_list(', ') ?></p>
  </div>
  <div class=" row justify-content-md-center blog-preview__row">
    <img src="/wp-content/themes/duanes-theme/dist/images/auto.jpg" alt="" class="img-thumbnail col-md-4">
    <div class="col-md-8">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsum id exercitationem ullam
        harum quae fugiat,
        earum ut ducimus rem vero, at quas vitae accusantium! Repellat neque repellendus maiores reprehenderit.</p>
      <div class="blog-preview__btn-container">
        <a href="#" class="btn btn-primary blog-preview__btn">Read more...</a>
      </div>
    </div>
  </div>
  <?php }
  ?>
</div>

<?php get_footer(); ?>