<?php
/*
Template Name: Donate Form Template
*/
?>

<?php get_header(); ?>
<main class="main" >
    <section class="layout">

    <section class="thirdwidth formText">
        <img class="formSplat" alt="Caleb's Pitch volunteer icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green_splat.png">
        <h2>Make a Donation to Caleb's Pitch</h2>
           <p>Thanks to the generous support from our donors, Caleb's Pitch is able to reach hundreds families. Your contribution to Caleb's Pitch helps buy paint for syringe paintings, canvases, and other necessary supplies.</p>
    </section>

    <section class="donateForm">
        <?php dynamic_sidebar('donate-widget'); ?>
    </section>


    </section>
</main>

<?php get_footer(); ?>