<?php 
/*
Template name: Gallery Template
*/
?>

<?php get_header(); ?>

<main class="main">
    <section class="gallery">

        	<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?> <!--[data context]-->
            	<h2><?php the_title(); ?></h2>
            	<?php the_content();
			  endwhile;
			endif; ?>
            <a href="#"><button class="blueButton">View More</button></a>
    </section>
</main>
        


<?php get_footer(); ?>