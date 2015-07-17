
		<footer class="sitefooter">

			<section class="layout">

  
        <div class="fourths footsocial"> <!-- social div -->
          <h2>Connect</h2>
        </div>   <!-- social div -->
  
        <div class="fourths footnav"> <!-- nav div -->
          <?php wp_nav_menu(array('theme_location' => 'footer', 'container _class' =>'nav_menu'));?>

        </div> <!-- nav div -->

        <div class="fourths footcopy"><!--  copyright div -->
          <p>&copy; <?php echo date("Y") ?> Caleb's Pitch</p> 
        </div><!--  copyright div -->

        <div class="fourths footlogo"><!-- logo div -->
        
            <a href="<?php $url = home_url( '/' ); echo $url; ?>">
              <img class="logoimg" alt="<?php echo get_bloginfo('name');?>" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
            </a> 
        
        </div> <!-- logo div -->


			</section>

		</footer>
	<?php wp_footer(); ?>
	</body>
</html>