<?php get_header(); ?>

	<main class="main">
		<section class="layout">
			<?php if (have_posts()):
				while(have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h2>
					<?php the_excerpt();
				endwhile; 
				endif; ?>

		</section>
	</main>
<?php get_footer(); ?>
