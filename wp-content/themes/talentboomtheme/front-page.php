<?php get_header(); ?>
  <main>
    <section>
      <div class="landing-top">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/app/img/home-header-image.png" alt="">
        </div>
        <div class="container">
          <div class="content">
            <?php get_template_part('/app/img/inline', 'matches.svg'); ?>
            <p>Hello! We are a global digital & creative recruiting firm. We make matches between advertising agencies and creative departments of large corporates with elite talent worldwide.</p>
          </div>
        </div>
      </div>
      <div class="large-buttons-top">
        <div class="container">
          <div class="box">
            <div class="landing">
              <h3>I'm hiring <span>Talent</span></h3>
            </div>
            <div class="hidden">
              Great! We have an awesome network of Senior to Key Executive talent and matching ability to help find you game changing talent wherever you are in the world. 
              <a href="#">Lets get started!</a>
            </div>
          </div>
          <div class="box">
            <div class="landing">
              <h3>I'm looking <span>For Work</span></h3>
            </div>
            <div class="hidden">
              Great! We have an awesome network of Senior to Key Executive talent and matching ability to help find you game changing talent wherever you are in the world. 
              <a href="#">Lets get started!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="job-search-bar">
        <div class="container">
          <h3>Quick Job Search</h3>
          <?php /*
          <form action="" style="display: none;">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/app/img/duration.svg" alt="">
              <select name="" id="" class>
                <option value="">Full Time</option>
              </select>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/app/img/location.svg" alt="">
              <input type="text" placeholder="Cape Town, SA">
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/app/img/search.svg" alt="">
              <input type="text" placeholder="Marketing">
            </div>
            <button class="btn btn-primary">Search Jobs</button>
          </form>
           */ ?>
          <div class="form"><?php echo do_shortcode('[wpdreams_ajaxsearchpro id=1]'); ?></div>
          <div class="form-results"><?php echo do_shortcode('[wpdreams_ajaxsearchpro_results id=1 element="div"]'); ?></div>
        </div>
      </div>
      <div class="about-section">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/app/img/home-about-image.png" alt="">
        </div>
        <div class="container">
          <div class="content">
            <h3>About Us & Our <br />Global Connections</h3>
            <div class="light-bulb">
              <img src="<?php echo get_template_directory_uri(); ?>/app/img/light-bulb.svg" alt="">
            </div>
            <p>Focusing heavily across the globe from Africa, US, Asia, Europe & beyond, we represent key executive to board level talent across the Creative, Digital, Advertising and Sports world. Find out how we can find talent for your business as your virtual recruitment neighbour.</p>
            <a href="<?php echo home_url(); ?>/global-connections" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="home-global-connections">
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
      <div class="home-global-connections">
        <div class="container">
          <h3>Our Global Connections</h3>
          <div class="connections-blocks">
            <ul class="locations">
              <li><a href="<?php echo home_url(); ?>/connection/africa">Africa</a></li>
              <li><a href="<?php echo home_url(); ?>/connection/asia">Asia</a></li>
              <li><a href="<?php echo home_url(); ?>/connection/europe">Europe</a></li>
              <li><a href="<?php echo home_url(); ?>/connection/usa">USA</a></li>
            </ul>
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
