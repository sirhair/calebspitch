<?php 
/*Template: 404 page (Not Found)*/

get_header(); ?>

	<main class="main">
		<section class="layout">
			<div class="primary">
				<h1><?php _e('Not Found'); ?></h1>
				<h2>Not Found</h2>
				<p>It looks like nothing was found at this location, perhaps it went on vacation?</p>
				<h2>Try Searching for it</h2>
				<?php get_search_form() ?>

			</div>
			<div class="secondary">
				<?php get_sidebar(); ?>
			</div>
		</section>
	</main>
<?php get_footer(); ?>