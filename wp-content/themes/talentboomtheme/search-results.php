<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <!-- article -->
  <article id="post-<?php the_ID(); ?>" class="result-box">

    <!-- post title -->
    <h4><?php the_title(); ?></h4>
    <div class="company-name">
      <?php the_field('company_name') ?>
    </div>
    <div class="location">
      <?php the_field('location') ?>
    </div>

    <a href="mailto:<?php the_field('enquire'); ?>" class="btn btn-outline">Enquire</a>

  </article>
  <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>
    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
  </article>
  <!-- /article -->

<?php endif; ?>
