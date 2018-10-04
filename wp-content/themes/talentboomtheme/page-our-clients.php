<?php get_header(); ?>
  <main role="main">
    <section>
      <div class="intro-section">
        <div class="container">
          <div class="content">
            <?php the_field('intro_container'); ?>
          </div>
        </div>
      </div>
      <div class="clients-list">
        <div class="container">
          <h3>Just a few of our fantastic clients...</h3>
          <?php 
            $images = get_field('client_logos');

            if( $images ): ?>
                <ul>
                    <?php foreach( $images as $image ): ?>
                        <li>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
      </div>
      <div class="client-about-section">
        <div class="container">
          <?php the_field('about_container'); ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
