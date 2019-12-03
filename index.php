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
  <h2 class="blog__single-header h1 text-primary"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="blog__metabox">
    <p class="blog__metabox-text"> Posted by <?php the_author_posts_link(); ?> on <?php the_time("n.j.y"); ?> in
      <?php echo get_the_category_list(', ') ?></p>
  </div>
  <div class=" row justify-content-md-center blog-preview__row">
    <div class="blog__thumbnail col-md-4">
      <a href="<?php the_permalink(); ?>">
        <?php 
        if( has_post_thumbnail() ):
            echo get_the_post_thumbnail($id, 'medium');
        endif; 
        ?>
      </a>
    </div>
    <div class="col-md-8">
      <p><?php the_excerpt(); ?></p>
      <div class="blog-preview__btn-container">
        <a href="<?php the_permalink(); ?>" class="btn btn-primary blog-preview__btn">Read more...</a>
      </div>
    </div>
  </div>
  <?php }
  ?>
</div>

<?php get_footer(); ?>