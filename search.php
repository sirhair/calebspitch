<?php 
/*Template: Search Page*/

get_header(); ?>

	<main class="main" >
		<section class="layout">
			<div class="primary">
				<?php if (have_posts()) :?>
					<h1>
						<?php printf(__('Search Results for: %s'), '<span>' .
							get_search_query() . '</span>'); ?>
					</h1>
				
					<?php if (have_posts()):
						while(have_posts()) : the_post(); ?>
							<h2><?php the_title(); ?> </h2>
							<?php the_content();
						endwhile; 
					endif; ?>
				<?php else : ?>
					<h1> <?php _e('Nothing Found'); ?></h1>
					<p><?php _e('Sorry, but nohting matched your search criteria. Please try again with different search terms.'); ?> </p>
				<?php endif; ?>
			</div>
			<div class="secondary">

			</div>
		</section>
	</main>


<?php get_footer(); ?>