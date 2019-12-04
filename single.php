<?php get_header(); ?>

<?php 
  while(have_posts(  )) {
    the_post(); ?>
<div class="blog__banner jumbotron"
  style="background-image: url(<?php echo get_theme_file_uri('/src/images/banner-blog.jpg'); ?>);">
  <div class="container">
    <h1 class="blog__header display-4 font-weight-normal text-light"><?php the_title(); ?></h1>
    <p class="lead text-light">Stay up to the day about my past projects and other announcements</p>
  </div>
</div>

<div class="blog__container container">
  metabox will go here

  <div class="blog__generic-content">
    <?php the_content(); ?>
  </div>
</div>
<?php  }
?>

<?php get_footer(); ?>