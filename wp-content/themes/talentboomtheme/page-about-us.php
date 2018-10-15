<?php get_header(); ?>
  <main role="main">
    <section>
      <div class="intro-section">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/app/img/about-header-image.png" alt="">
        </div>
        <div class="container">
          <div class="content">
            <?php the_field('intro_container'); ?>
          </div>
        </div>
      </div>
      <div class="about-content dark-background">
        <div class="container">
          <?php the_field('global_connections_container'); ?>
        </div>
      </div>
      <div class="connections-map">
        <ul class="tabs">
          <li><a href="<?php echo home_url(); ?>/connection/usa">USA</a></li>
          <li><a href="<?php echo home_url(); ?>/connection/europe">Europe</a></li>
          <li><a href="<?php echo home_url(); ?>/connection/middle-ease-and-africa">Middle East &amp; Africa</a></li>
          <li><a href="<?php echo home_url(); ?>/connection/asia">Asia</a></li>
        </ul>
        <div class="map" id="map">
          <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/app/img/map.svg" alt="map" />
            <div class="pin-locations">
              <a href="<?php echo home_url(); ?>/connection/africa" class="pin pin-africa" data-loc="africa">
                <div class="pin-location-pop">
                  <div class="title">The Talent Boom</div>
                  <div class="location">Cape Town</div>
                  <div class="details">
                    <span class="tel">+27 21 426 0961</span>
                    <span class="address">32 Jamieson street, Gardens</span>
                  </div>
                </div>
              </a>
              <a href="<?php echo home_url(); ?>/connection/asia" class="pin pin-asia" data-loc="asia">
                <div class="pin-location-pop">
                  <div class="title">The Talent Boom</div>
                  <div class="location">Location Name</div>
                  <div class="details">
                    <span class="tel">+27 21 426 0961</span>
                    <span class="address">32 Jamieson street, Gardens</span>
                  </div>
                </div>
              </a>
              <a href="<?php echo home_url(); ?>/connection/europe" class="pin pin-europe" data-loc="europe">
                <div class="pin-location-pop">
                  <div class="title">The Talent Boom</div>
                  <div class="location">Location Name</div>
                </div>
              </a>
              <a href="<?php echo home_url(); ?>/connection/usa" class="pin pin-usa" data-loc="usa">
                <div class="pin-location-pop">
                  <div class="title">The Talent Boom</div>
                  <div class="location">Location Name</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="about-content">
        <div class="container">
          <?php the_field('post_map_container'); ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
