<?php get_header(); ?>

	<main role="main">
    <section>
      <div class="container">
      	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
						<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>

						<div class="location-info">
              <span class="tel"><?php the_field('tel'); ?></span>
              <span class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></span>
              <span class="address"><?php the_field('address'); ?></span>
            </div>
						
					</article>

				<?php endwhile; ?>

				<?php else: ?>

					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>

				<?php endif; ?>

      </div>
    </section>
  </main>
<?php get_footer(); ?>
