<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

        <div class="container">
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/talent-boom-logo.svg" alt="The Talent Boom Logo" >
						</a>
					</div>
					<!-- /logo -->
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php header_nav(); ?>
            <a href="<?php echo home_url(); ?>" class="btn btn-primary call-to-action">I'm looking to hire talent</a>
					</nav>
					<!-- /nav -->
          <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
			</header>

      <nav class="mobile-nav" role="navigation">
        <?php mobile_nav(); ?>
        <a href="<?php echo home_url(); ?>" class="btn btn-primary call-to-action">I'm looking to hire talent</a>
      </nav>
			<!-- /header -->
