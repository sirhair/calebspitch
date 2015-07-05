<?php get_header(); ?>

	<main class="main">
		<section class="layout">
			<div class="primary">
				<?php if (have_posts()):
					while(have_posts()) : the_post(); ?>
						<h2><?php the_title(); ?> </h2>
						<?php the_content();
					endwhile; 
					endif; ?>
				
			</div>
			<div class="secondary">
				<?php get_sidebar(); ?>
			</div>
		</section>
	</main>	



<?php get_footer(); ?>