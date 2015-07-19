
<?php 
/*
Template name: Events Template
*/
?>

<?php get_header(); ?>

<main class="main">
    <section class="layout events">
	<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?> <!--[data context]-->
            	<h2><?php the_title(); ?></h2>
            	<?php the_content();
			  endwhile;
			endif; ?>
	</section>

			<section class="getInvolved">
				<section class="layout">
					<h2>Get Involved</h2>
						<div class="getInvolvedBadge">
							<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch donate icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green_splat.png">
							<h3><a href="http://www.cp.thenewe.com/donate/">Donate</a></h3>	
						</div>
						<div class="getInvolvedBadge">
							<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch volunteer icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue_splat.png">
							<h3><a href="http://www.cp.thenewe.com/volunteer/">Volunteer</a></h3>
						</div>
						<div class="getInvolvedBadge">
							<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch sponsor icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pink_splat.png">
							<h3><a href="http://www.cp.thenewe.com/sponsor-sign-up/">Sponsor</a></h3>
						</div>
				</section>
			</section>
</main>
        


<?php get_footer(); ?>