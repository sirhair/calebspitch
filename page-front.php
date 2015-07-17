<?php
/*
Template name: Front Page Template
*/
?>

<?php get_header(); ?>
		<main class="main" >
			<section class="layout">
				<section class="story">
					<div class="storyText">
						<h2>The Caleb's Pitch Story</h2>
						<p>Caleb's Pitch is a nonprofit organization founded to honor the inspirational spirit of Caleb Jacobbe. We are dedicated to creating positive experiences and enhancing quality of life for children and their families while being treated for serious conditions at the hospital.</p>
							<a href="#"><button class="blueButton">Learn More</button></a>
					</div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/HoG1NQoU04M" frameborder="0" allowfullscreen></iframe>
					</div>
				</section>
			</section>

			<div class="getInvolved">
				<section class="layout">
					<h2>Get Involved</h2>
						<div class="getInvolvedBadge">
							<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch donate icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green_splat.png">
							<h3>Donate</h3>
							<p>Some text about donating money and how it's awesome. Some text about donating money and how it's awesome.</p>
						</div>
						<div class="getInvolvedBadge">
							<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch volunteer icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue_splat.png">
							<h3>Volunteer</h3>
							<p>Some text about volunteering and how it's awesome. Some text about volunteering and how it's awesome.</p>
						</div>
						<div class="getInvolvedBadge">
							<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch sponsor icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pink_splat.png">
							<h3>Sponsor</h3>
							<p>Some text about sponsoring Caleb's Pitch and how it's awesome. Some text about sponsoring Caleb's Pitch.</p>
						</div>
				</section>
			</div>

			<section class="layout">
				<section class="upcomingEvents">
					<h2>Upcoming Events</h2>
					<?php dynamic_sidebar('events-widget'); ?>
				</section>
				<section class="galleryHome">
					<h2>Caleb's Pitch In Action</h2>
					<?php if( function_exists('cyclone_slider') ) cyclone_slider('home-page-slider'); ?>
					<a href="http://www.cp.thenewe.com/gallery/"><button class="blueButton">Go To The Gallery</button></a>

				</section>




			</section>

		</main>

<?php get_footer(); ?>