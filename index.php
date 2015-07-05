<?php get_header(); ?>
		<main class="main" >
			<section class="layout">

				<?php if (have_posts() ) {  

					while (have_posts() ) { 

						the_post(); ?>
	
							<h3><?php the_title(); ?> </h3>
							<p><?php the_excerpt(); ?></p>
							<p><a href="<?php the_permalink(); ?>">Read More</a></p>

				<?php
					}
					
				}
				?>

			</section>
		</main>

<?php get_footer(); ?>