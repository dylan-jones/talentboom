<?php get_header(); ?>
  <main role="main">
    <section>
      <div class="intro-section">
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/candidates-header-image.png" alt="">
        </div>
        <div class="container">
          <div class="content candidates-content">
            <?php the_field('intro_container'); ?>
          </div>
        </div>
      </div>
      <div class="large-boxes">
        <div class="intro-copy">
          <div class="container">
            <?php the_field('pre_content_container'); ?>
          </div>
        </div>
        <div class="container">
          <div class="box-info">
            <?php if( have_rows('candidates_repeater') ): ?>

              <?php while( have_rows('candidates_repeater') ): the_row(); 

                // vars
                $dataid = get_sub_field('data_id');
                $boxtext = get_sub_field('box_text');
                $big_box_content = get_sub_field('big_box_content');

                ?>

                <div class="box" data-tab="<?php echo $dataid; ?>">
                  <?php echo $boxtext; ?>
                </div>

                <div class="big-box" id="<?php echo $dataid; ?>">
                  <?php echo $big_box_content; ?>
                </div>

              <?php endwhile; ?>

            <?php endif; ?>
          </div>
          <!--
          <div class="box-info">
            <div class="box" data-tab="BoxLeadership">
              <div class="title">Leadership</div>
              <div class="content">Executive search on a local, <br />global and expat basis.</div>
            </div>
            <div class="box" data-tab="BoxCreativeDesign">
              <div class="title">CREATIVE AND DESIGN FOR ADVERTISING</div>
              <div class="title-two">AND BRANDING</div>
              <div class="content">Our creative recruiters source on a mid to senior level accross all creative, digital and branding disciplines.</div>
            </div>
            <div class="box" data-tab="BoxAccountProject">
              <div class="title">ACCOUNT, PROJECT,</div>
              <div class="title-two">SOCIAL MEDIA <span>AND MARKETING</span></div>
              <div class="content">Executive search on a local, global and expat basis.</div>
            </div>
            <div class="big-box" id="BoxLeadership">
              <ul>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
              </ul>
              <ul>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
              </ul>
              <ul>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
              </ul>
            </div>
            <div class="box" data-tab="BoxInteractive">
              <div class="title">INTERACTIVE<br /><span>&amp;</span> TECHNICAL</div>
              <div class="content">We have a dedicated IT division to tap into mid to high level tech talent.</div>
            </div>
            <div class="box" data-tab="BoxFintech">
              <div class="title">Fintech, data &</div>
              <div class="title-two">FINANCIAL SERVICES</div>
              <div class="content">In collaboration with our tech division, talk to us about  your financial and fintech hiring needs.</div>
            </div>
            <div class="box" data-tab="BoxSports">
              <div class="title">SPORTS</div>
              <div class="content">Aligned with our creative niche, we hunt down filming / technical and animation talent within Sub Saharan Africa.</div>
            </div>
          </div>
          -->
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
