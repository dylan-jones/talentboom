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
      <div class="form-tabs">
        <div class="container">
          <ul class="tabs">
            <li class="tab-link" data-tab="tab-1">I’m looking to hire staff</li>
            <li class="tab-link" data-tab="tab-2">I’m looking for work</li>
          </ul>
          <div id="tab-1" class="tab-content">
            <?php echo do_shortcode('[contact-form-7 id="31" title="Hire Staff Form"]'); ?>
          </div>
          <div id="tab-2" class="tab-content">
            <?php echo do_shortcode('[contact-form-7 id="32" title="Looking for Work Form"]'); ?>
          </div>
        </div>
        <div class="select-info">
          <div class="text">
            <div class="title">Choose a form!</div>
            <p>Or contact an office below.</p>
          </div>
        </div>
      </div>
      <div class="connections-boxes">
        <div class="container">
          <?php 
            $posts = get_field('connections_info');
            if( $posts ): ?>
                <ul>
                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <li>
                        <div class="title"><?php the_title(); ?></div>
                        <div class="content">
                          <span class="tel"><?php the_field('tel'); ?></span>
                          <span class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></span>
                          <span class="address"><?php the_field('address'); ?></span>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
          </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
