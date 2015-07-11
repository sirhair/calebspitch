<!DOCTYTPE HTML>
<html>
	<head>
		<title>Edward Alonzo Template</title>
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	</head>
	
	<body>
		<header class="siteheader">
			<section class="layout">
				<div class="headprimary">
					<h1 class="site-title">
						<a href="<?php $url = home_url( '/' ); echo $url; ?>">
							<img class="logoimg" alt="<?php echo get_bloginfo('name');?>" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
						</a> 
					</h1>
<!-- 					<h2>
							<?php bloginfo('description'); ?>
					</h2>
 -->
				</div>

<!-- 				<div class="headsearch">
					<?php get_search_form();?> 
				</div> -->
			</section>
		</header>
		<nav class="headsecondary">
			<section class="layout">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'container _class' =>'nav_menu'));?>
			</section>
		</nav>