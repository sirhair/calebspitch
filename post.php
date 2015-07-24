<?php get_header(); ?>

	<main class="main">
		<section class="layout">
			<?php if (have_posts()):
				while(have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?> </h1>
					<?php the_content();?>
					<div class="navigation">
						<p><?php posts_nav_link(); ?></p>
					</div>

				<?php endwhile; 
				endif; ?>

		</section>
	</main>
<?php get_footer(); ?>
