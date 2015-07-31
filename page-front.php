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
						<p>Caleb's Pitch is a nonprofit organization founded to honor the inspirational spirit of Caleb Jacobbe. We are dedicated to creating positive experiences and enhancing quality of life for children and their families confronting serious childhood illnesses.</p>
							<a href="http://www.cp.thenewe.com/about/"><button class="greenButton">Learn More</button></a>
					</div>
					<div class="video">
						<iframe src="https://www.youtube.com/embed/HoG1NQoU04M" frameborder="0" allowfullscreen></iframe>
					</div>
				</section>
		</section> <!-- Ends Layout -->
			<div class="getInvolved">
				<section class="layout">
					<h2>Get Involved</h2>
						<div class="getInvolvedBadge">
							<a href="http://www.cp.thenewe.com/donate/">
								<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch donate icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green_splat.png">
							</a>
							<a href="http://www.cp.thenewe.com/donate/">
								<button class="greenButton hvr-icon-bob">Donate</button>
							</a>
							<p>Your donations make our syringe painting events possible! Chip in today to help us reach more kids and families.</p>
						</div>
						<div class="getInvolvedBadge">
							<a href="http://www.cp.thenewe.com/volunteer/">
								<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch volunteer icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue_splat.png">
							</a>
							<a href="http://www.cp.thenewe.com/volunteer/">
								<button class="blueButton">Volunteer</button>
							</a>
							<p>Caleb's Pitch is run entirely by volunteers. Sign up today to help out with syringe painting events.</p>
						</div>
						<div class="getInvolvedBadge">
							<a href="http://www.cp.thenewe.com/sponsor-sign-up/">
								<img class="homeSplat hvr-float-shadow" alt="Caleb's Pitch sponsor icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pink_splat.png">
							</a>
							<a href="http://www.cp.thenewe.com/sponsor-sign-up/">
								<button class="pinkButton">Sponsor</button>
							</a>
							<p>Do you own a business? Do you want to make a difference in your community? Sponsor a Caleb's Pitch event today!</p>
						</div>
				</section>
			</div>

			<section class="layout">

				<section class="upcomingEvents">
					<h2>Upcoming Events</h2>
					<div class="secondary">
						<?php dynamic_sidebar('events-list-widget'); ?>
					</div>
					<div class="miniCalendar">
						<?php dynamic_sidebar('calendar-widget'); ?>
					</div>

				</section>
				<section class="galleryHome fullWidth">
					<h2>Caleb's Pitch In Action</h2>
							<?php if( function_exists('cyclone_slider') ) cyclone_slider('home-page-slider'); ?>
							<a href="http://www.cp.thenewe.com/gallery/"><button class="blueButton">Go To The Gallery</button></a>
				</section>
				<section class="emailList fullWidth">
				<h2>Join Our Email List</h2>
					<p>Sign up for our email list and we'll keep you in the loop for all of our activities, events, and fundraisers!</p>
					<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
						<div id="mc_embed_signup" class="emailForm">
						<form action="//thenewe.us11.list-manage.com/subscribe/post?u=e17dc775841d90c94453ee785&amp;id=8ca46ed13d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">

							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;"><input type="text" name="b_e17dc775841d90c94453ee785_8ca46ed13d" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="greenButton"></div>
						    </div>
						</form>
						</div>
					<!--End mc_embed_signup-->
			</section>
			</section>

		</main>

<?php get_footer(); ?>