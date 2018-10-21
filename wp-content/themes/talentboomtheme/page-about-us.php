<?php get_header(); ?>
  <main role="main">
    <section>
      <div class="intro-section">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/about-header-image.png" alt="">
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
          <li><a href="<?php echo home_url(); ?>/connection/middle-east-and-africa">Middle East &amp; Africa</a></li>
          <li><a href="<?php echo home_url(); ?>/connection/asia">Asia</a></li>
        </ul>
        <div class="map" id="map">
          <div class="container">
            <?php get_template_part('/app/img/inline', 'new-map.svg'); ?>
            <?php /* 
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/map.svg" alt="map" />
            */ ?>
            <div class="pin-locations">
              <div class="pin pin-cape-town" data-loc="cape-town">
                <div class="pin-location-pop">
                  <div class="title">The Talent Boom</div>
                  <div class="location">Cape Town</div>
                </div>
              </div>
              <div class="pin pin-scotland" data-loc="scotland">
                <div class="pin-location-pop">
                  <div class="title">The Talent Boom</div>
                  <div class="location">Scotland</div>
                </div>
              </div>
              <div class="pin pin-amsterdam" data-loc="amsterdam">
                <div class="pin-location-pop">
                  <div class="title">The Talent Boom</div>
                  <div class="location">Amsterdam</div>
                </div>
              </div>
              <div class="pin pin-miami" data-loc="miami">
                <div class="pin-location-pop">
                  <div class="title">The Talent Boom</div>
                  <div class="location">Miami</div>
                </div>
              </div>
              <div class="pin pin-middle-east" data-loc="middle-east">
                <div class="pin-location-pop">
                  <div class="title">The Middle East</div>
                  <div class="location">Serviced by our Cape Town office</div>
                </div>
              </div>
              <div class="pin pin-asia" data-loc="asia">
                <div class="pin-location-pop">
                  <div class="title">The Middle East</div>
                  <div class="location">Serviced by our Amsterdam office</div>
                </div>
              </div>
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
