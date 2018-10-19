<?php get_header(); ?>
  <main>
    <section>
      <div class="landing-top">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/home-header-image.png" alt="">
        </div>
        <div class="container">
          <div class="content">
            <?php get_template_part('/app/img/inline', 'matches.svg'); ?>
            <?php the_field('intro_copy'); ?>
          </div>
        </div>
      </div>
      <?php if( have_rows('big_boxes') ): ?>
        <div class="large-buttons-top">
          <div class="container">
            <?php while( have_rows('big_boxes') ): the_row(); 

              $title = get_sub_field('title');
              $content = get_sub_field('content');
              $link = get_sub_field('link');
              ?>

              <div class="box">
                <div class="landing">
                  <h3><?php echo $title; ?></h3>
                </div>
                <div class="hidden">
                  <?php echo $content; ?>
                  <span>Lets get started!</span>
                </div>
                <a href="<?php echo home_url(); ?>/contact-us#<?php echo $link; ?>"></a>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="job-search-bar">
        <div class="container">
          <h3>Quick Job Search</h3>
          <form role="search" method="get" id="searchform" action="" class="form">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/duration.svg" alt="">
              <select name="duration" id="duration" >
                <option value="fulltime">Full Time</option>
                <option value="parttime">Part Time</option>
                <option value="freelance">Freelance</option>
              </select>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/location.svg" alt="">
              <input type="text" placeholder="Cape Town, SA" value="" name="location" id="location">
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/search.svg" alt="">
              <input type="text" placeholder="Marketing" value="" name="search" id="search" >
            </div>
            <button class="btn btn-primary" id="searchsubmit">Search Jobs</button>
          </form>

          <div id="results" class="form-results"></div>

        </div>
      </div>
      <div class="about-section">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/home-about-image.png" alt="">
        </div>
        <div class="container">
          <div class="content">
            <?php the_field('global_connections_content'); ?>
            
            <div class="light-bulb">
              <?php get_template_part('/app/img/inline', 'light-bulb.svg'); ?>
            </div>
            <a href="<?php echo home_url(); ?>/about-us" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="home-global-connections">
        <div class="container">
          <h3>Our Global Connections</h3>
          <div class="connections-blocks">
            <ul class="locations">
              <li><a href="<?php echo home_url(); ?>/connection/usa">USA</a></li>
              <li><a href="<?php echo home_url(); ?>/connection/europe">Europe</a></li>
              <li><a href="<?php echo home_url(); ?>/connection/middle-east-and-africa">Middle East &amp; Africa</a></li>
              <li><a href="<?php echo home_url(); ?>/connection/asia">Asia</a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <h3>Our Clients</h3>
          <div class="connections-blocks">
            <?php 
            $images = get_field('our_clients');

            if( $images ): ?>
                <ul>
                    <?php foreach( $images as $image ): ?>
                        <li>
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </li>
                    <?php endforeach; ?>
                    <li><a href="<?php echo home_url(); ?>/our-clients" >View All Clients</a></li>
                </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="testimonial-slider">
        <div class="container">
          <h3>Lovely things they say about us:</h3>
          <?php if( have_rows('testimonials') ): ?>
            <div class="slider">
              <?php while( have_rows('testimonials') ): the_row(); 

                $name = get_sub_field('name');
                $testimonial = get_sub_field('testimonial');
                ?>
                <div class="slide">
                    <?php echo $testimonial; ?>
                    <span><?php echo $name; ?></span>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
