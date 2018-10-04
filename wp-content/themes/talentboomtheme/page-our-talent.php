<?php get_header(); ?>
  <main role="main">
    <section>
      <div class="intro-section">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/app/img/ourtalent-header-image.png" alt="">
        </div>
        <div class="container">
          <div class="content">
            <?php the_field('intro_container'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="intro-section white-background">
        <div class="container">
          <div class="content candidates-content">
            <?php the_field('image_container'); ?>
          </div>
        </div>
      </div>
      <div class="about-content dark-background">
        <div class="container">
          <?php the_field('about_container'); ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
