<?php get_header(); ?>

	<main role="main">
    <section>
      <div class="container">
      	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="featured-image">
							<?php if ( has_post_thumbnail()) :  ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>
						</div>
						<h1><?php the_title(); ?></h1>
						<div class="category"><?php _e( '', 'html5blank' ); the_category(', '); ?></div>
						<!-- post details -->
						<span class="author"><?php _e( 'By ', 'html5blank' ); the_author(); ?></span>
						<span class="date"><?php the_time('F j, Y'); ?></span>
						<!-- /post details -->

						<div class="content">
							<?php the_content(); // Dynamic Content ?>

							<?php add_share_buttons(); ?>
						</div>

					</article>

				<?php endwhile; ?>

				<?php else: ?>

					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>

				<?php endif; ?>

				<div class="pagination">
					<?php previous_post_link('%link','Previous Post'); ?>
						<span></span>
					<a href="<?php echo home_url(); ?>/blog">All Posts</a>
						<span></span>
					<?php next_post_link('%link','Next Post'); ?>
        </div>

      </div>
    </section>
  </main>
<?php get_footer(); ?>
