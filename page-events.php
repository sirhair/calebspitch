
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
            	<h1><?php the_title(); ?></h1>
            	<?php the_content();
			  endwhile;
			endif; ?>
	</section>


	<div class="getInvolved">
		<section class="layout">
			<h2>Get Involved</h2>

			<div class="getInvolvedBadge">
			
				<a href="http://www.cp.thenewe.com/donate/">
								<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch donate icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green_splat.png">
							</a>
				<a href="http://www.cp.thenewe.com/donate/">
				<button class="greenButton">Donate</button>
				</a>
			</div>

			<div class="getInvolvedBadge">
				<a href="http://www.cp.thenewe.com/volunteer/">
								<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch volunteer icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue_splat.png">
							</a>
				<a href="http://www.cp.thenewe.com/volunteer/">
				<button class="blueButton">Volunteer</button>
				</a>
			</div>

			<div class="getInvolvedBadge">
				<a href="http://www.cp.thenewe.com/sponsor-sign-up/">
								<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch sponsor icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pink_splat.png">
							</a>
				<a href="http://www.cp.thenewe.com/sponsor-sign-up/">
				<button class="pinkButton">Sponsor</button>
				</a>
			</div>
		</section>
	</div>
	
</main>
        


<?php get_footer(); ?>