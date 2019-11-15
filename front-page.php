<?php get_header(); ?>
<header class="header">
  <div class="header__container text-white header__background">
    <h3 class="display-5 header__by">Photography and Video Production by</h3>
    <h1 class="display-2 header__main">Duane last</h1>
    <p class="lead header__lead">Making your idea projects a reality</p>
    <a href="<?php echo site_url('/gallery'); ?>" class="btn btn-lg btn-primary px-5 header__btn">Portfolio</a>
  </div>

</header>

<section class="services">
  <div class="container">
    <h2 class="display-4 services__header">Services We Specialize</h2>
    <div class="row services__container">

      <div class="col-md-4 services__service">
        <div class="card">
          <img src="/wp-content/themes/duanes-theme/dist/images/sports.jpg" class="card-img-top" alt="Swimmer">
          <div class="card-body">
            <h2 class="card-title text-secondary">Sports</h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-lg btn-outline-secondary">Find out more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 services__service">
        <div class="card">
          <img src="/wp-content/themes/duanes-theme/dist/images/sports.jpg" class="card-img-top" alt="Swimmer">
          <div class="card-body">
            <h2 class="card-title text-secondary">Automotive</h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-lg btn-outline-secondary">Find out more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 services__service">
        <div class="card">
          <img src="/wp-content/themes/duanes-theme/dist/images/sports.jpg" class="card-img-top" alt="Swimmer">
          <div class="card-body">
            <h2 class="card-title text-secondary">Video Production</h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-lg btn-outline-secondary">Find out more</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="about">
  <div class="container text-white">
    <div class="row">
      <div class="col-md-6">
        <div class="about__images-container">
          <img src="/wp-content/themes/duanes-theme/dist/images/about.jpg" alt="" class="img-fluid about__img">
        </div>
      </div>
      <div class="col-md-6">
        <div class="about__description">
          <?php get_template_part('includes/section', 'content'); ?>
        </div>
      </div>
    </div>
    <div class="about__btn-container">
      <a class="about__btn btn btn-secondary btn-lg">Read More...</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>