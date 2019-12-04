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
  <div class="breadcrum">
    <a href="<?php echo site_url("/blog"); ?>" class="breadcrum__home"><i class="fa fa-home" aria-hidden="true"></i>
      Blog Home</a>
    <div class="breadcrum__metabox">
      <p class="breadcrum__metabox-text"> Posted by <?php the_author_posts_link(); ?> on <?php the_time("n.j.y"); ?> in
        <?php echo get_the_category_list(', ') ?></p>
    </div>
  </div>

  <div class="blog__generic-content">
    <?php the_content(); ?>
  </div>
</div>
<?php  }
?>

<?php get_footer(); ?>