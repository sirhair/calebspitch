<?php 
/*
Template name: Events Template
*/
?>

<?php get_header(); ?>

<main class="main">
    <section class="events">

        	<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?> <!--[data context]-->
            	<h2><?php the_title(); ?></h2>
            	<?php the_content();
			  endwhile;
			endif; ?>

				<ul class="eventslist">
	            	<li><a href="#"><button class="blueButton">Donate</button></a></li>
	             	<li><a href="#"><button class="blueButton">Sponsor</button></a></li>
	              	<li><a href="#"><button class="blueButton">Volunteer</button></a></li>
              	</ul>
    </section>
</main>
        


<?php get_footer(); ?>