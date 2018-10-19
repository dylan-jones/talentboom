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
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
