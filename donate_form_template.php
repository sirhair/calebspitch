<?php
/*
Template Name: Donate Form Template
*/
?>

<?php get_header(); ?>
<main class="main" >
    <section class="layout">

    <section class="thirdwidth formText">
        <img class="formSplat hvr-float-shadow" alt="Caleb's Pitch volunteer icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green_splat.png">
        <h2>Make a Donation to Caleb's Pitch</h2>
           You can volunteer with Caleb's Pitch at our syringe art events or at any of our fundraisers. Please sign up using the form to the right, and we'll be in touch to see which events you're interested in.</p>
    </section>

    <section class="donateForm">
        <?php dynamic_sidebar('donate-widget'); ?>
    </section>


    </section>
</main>

<?php get_footer(); ?>