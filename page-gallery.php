<?php 
/*
Template name: Gallery Template
*/
?>

<?php get_header(); ?>

<main class="main">
    <section class="layout gallery">

        	<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?> <!--[data context]-->
            	<h1><?php the_title(); ?></h1>
            	<?php the_content();
			  endwhile;
			endif; ?>
            <a href="https://plus.google.com/u/0/photos/102474186291659580823/albums/5795118637767766737?sort=1" target="new"><button class="blueButton">View More</button></a>
    </section>
</main>
        


<?php get_footer(); ?>