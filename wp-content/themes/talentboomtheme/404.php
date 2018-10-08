<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container">
				<!-- article -->
				<article id="post-404">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/talent-boom-logo.svg" alt="The Talent Boom Logo" >
						</a>
					</div>
					<h1><?php _e( 'Oops, page not found!', 'html5blank' ); ?></h1>
					<p>The page you are trying to view doesn’t seem to exist.</p>
						<a href="<?php echo home_url(); ?>" class="btn btn-primary"><?php _e( 'Take me back', 'html5blank' ); ?></a>
					</h2>

				</article>
				<!-- /article -->
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
