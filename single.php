<?php get_header(); ?>

<?php 
  while(have_posts(  )) {
    the_post(); ?>
<div class="Banner jumbotron"
  style="background-image: url(<?php echo get_theme_file_uri('/src/images/banner-blog.jpg'); ?>);">
  <div class="container">
    <h1 class="Banner__header display-4 font-weight-normal text-light"><?php the_title(); ?></h1>
    <p class="lead text-light">Stay up to the day about my past projects and other announcements</p>
  </div>
</div>

<div class="blog__container container">
  <div class="breadcrum">
    <a href="<?php echo site_url("/blog"); ?>" class="breadcrum__home"><i class="fa fa-home" aria-hidden="true"></i>
      Blog Home</a>
    <div class="breadcrum__metabox">
      <p class="breadcrum__metabox-text"> Posted by <?php the_author_posts_link(); ?> on <?php the_time("n.j.y"); ?> in
        <?php echo get_the_category_list(', ') ?></p>
    </div>
  </div>

  <div class="blog__generic-content">
    <div class="container">
      <?php
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
      the_post_thumbnail( 'large', [ 'class' => 'img-fluid mx-auto d-block shadow-lg rounded-lg'] );
      }
      ?>
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php  }
?>

<?php get_footer(); ?>