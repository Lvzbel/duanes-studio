<?php get_header(); ?>
<header class="header">
  <div class="header__container text-white header__background">
    <h3 class="display-5">Photography and Video Production by</h3>
    <h1 class="display-2">Duane lastname</h1>
    <p class="lead">Making idea projects a reality</p>
    <a href="<?php echo site_url('/gallery'); ?>" class="btn btn-lg btn-primary">Portfolio</a>
  </div>

</header>

<section class="services">
  <div class="container">
    <div class="row services__container">
      <div class="col-md-3">
        <img src="/wp-content/themes/duanes-theme/dist/images/sports.jpg" alt="" class="img-fluid">
        <h3>Sports</h3>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quis adipisci, est consectetur
          sint laboriosam qui iusto tempore suscipit alias, nam minima esse sed minus itaque corporis voluptas. Fugiat,
          asperiores.</p>
      </div>
      <div class="col-md-3">
        <img src="/wp-content/themes/duanes-theme/dist/images/sports.jpg" alt="" class="img-fluid">
        <h3>Automotive</h3>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quis adipisci, est consectetur
          sint laboriosam qui iusto tempore suscipit alias, nam minima esse sed minus itaque corporis voluptas. Fugiat,
          asperiores.</p>
      </div>
      <div class="col-md-3">
        <img src="/wp-content/themes/duanes-theme/dist/images/sports.jpg" alt="" class="img-fluid">
        <h3>Video Production</h3>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quis adipisci, est consectetur
          sint laboriosam qui iusto tempore suscipit alias, nam minima esse sed minus itaque corporis voluptas. Fugiat,
          asperiores.</p>
      </div>
      <div class="col-md-3">
        <img src="/wp-content/themes/duanes-theme/dist/images/sports.jpg" alt="" class="img-fluid">
        <h3>Video Production</h3>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quis adipisci, est consectetur
          sint laboriosam qui iusto tempore suscipit alias, nam minima esse sed minus itaque corporis voluptas. Fugiat,
          asperiores.</p>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer(); ?>