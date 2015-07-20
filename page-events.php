
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


        <section class="giVolunteer fullwidth">
            <div class="layout">
                <div class="giText">
                    <h2>Volunteer</h2>
                        <a href="http://www.cp.thenewe.com/volunteer/"><button class="blueButton">Sign Me Up!</button></a>
                </div>
                <div class="giImage">
                    <iframe src="https://www.youtube.com/embed/IiLjwwUHq0I" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </section>

			  <section class="layout"></section>

        <section class="giDonate fullwidth">
            <div class="layout">
                <div class="giText">
                    <h2>Donate</h2>
                        <a href="http://www.cp.thenewe.com/donate/"><button class="greenButton">Donate</button></a>

                </div>
                <div class="giImage">
                    <img alt="Paint supplies for Caleb's Pitch" src="<?php echo get_stylesheet_directory_uri(); ?>/images/paint-supplies.jpg">
                </div>
            </div>
        </section>

        <section class="layout"></section>

        <section class="giSponsor fullwidth">
            <div class="layout">
                <div class="giText">
                    <h2>Sponsor</h2>
                        <a href="http://www.cp.thenewe.com/sponsor-sign-up/"><button class="pinkButton">Sponsor Us</button></a>
                </div>
                <div class="giImage">
                    <img alt="Caleb's Pitch event raffle tickets" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sponsor-image.jpg">
                </div>
            </div>
        </section>
</main>
        


<?php get_footer(); ?>