<?php get_header(); ?>

	<main class="main">
		<section class="layout">
			<?php if (have_posts()):
				while(have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?> </h2>
					<?php the_content();
				endwhile; 
				endif; ?>
				
		</section>
	</main>	


<?php get_footer(); ?>