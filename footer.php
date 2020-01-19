<footer class="footer text-white">
  <div class="container">
    <div class="row">
      <?php 
          $args = array(  
            'post_type' => 'contact_info',
            'posts_per_page' => 1
        );
    
        $loop = new WP_Query( $args ); 
            
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="col-md-6">
        <div class="footer__body">
          <div class="footer__content">
            <p>Contact Us</p>
            <p>Phone: <?php the_field('phone'); ?></p>
            <p>Email: <?php the_field('email'); ?></p>
            <a class='btn btn-secondary btn-sm' href="<?= site_url('/contact'); ?>">Send us a message</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="footer__body">
          <div class="footer__content">
            <p>Check out my Social Media!</p>
            <ul class="Social">
              <li><a rel="noreferrer" target="_blank" href="<?php the_field('facebook'); ?>" class="Social__link"><i
                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a rel="noreferrer" target="_blank" href="<?php the_field('instagram'); ?>" class="Social__link"><i
                    class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a rel="noreferrer" target="_blank" href="<?php the_field('twitter'); ?>" class="Social__link"><i
                    class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <?php endwhile;
    
        wp_reset_postdata(); 
      ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>

</html>