<?php get_header(); ?>

	<main class="main">
		<section class="layout">
			<div class="skinny">
				<?php if (have_posts()):
					while(have_posts()) : the_post(); ?>
						<h1><?php the_title(); ?> </h1>
						<?php the_content();
					endwhile; ?>
					<div class="postmenu"> 
						<?php previous_post(); ?>    <?php next_post(); ?>
					</div>
					<?php
				endif; ?>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
