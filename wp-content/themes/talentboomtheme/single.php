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
						</div>
						<div class="sidebar">
							<div>
								<img src="http://placehold.it/290x290">
							</div>
							<div>
								<img src="http://placehold.it/290x290">
							</div>
						</div>
					</article>

				<?php endwhile; ?>

				<?php else: ?>

					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>

				<?php endif; ?>

				<div class="social-icons">
					<span>Share this post</span>
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/app/img/icon-facebook.svg" alt=""></a>
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/app/img/icon-twitter.svg" alt=""></a>
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/app/img/icon-linkedin.svg" alt=""></a>
				</div>


				<div class="pagination">
          <a href="#" class="page-left">Previous Post</a><span></span><a href="#">All Posts</a><span></span><a href="#" class="page-right">Next Post</a>
        </div>

      </div>
    </section>
  </main>
<?php get_footer(); ?>
