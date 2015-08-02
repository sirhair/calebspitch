
		<footer class="sitefooter">

			<section class="layout">

  
        <div class="footsocial"> <!-- social div -->
          <h2>Connect</h2>
            <a href="https://www.facebook.com/CalebsPitch"  target="_blank" title="Caleb's Pitch Facebook">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x cpBlue"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
            </a>  
            <a href="https://twitter.com/CalebsPitch" target="_blank" title="Caleb's Pitch Twitter">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x cpSalmon"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>  
<!--             <a href="https://www.instagram.com/CalebsPitch" title="Caleb's Pitch Instagram">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x cpYellow"></i>
                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
            </a>   -->
        </div>   <!-- social div -->
  
        <div class="footnav"> <!-- nav div -->
          <a id="footermenu"></a>
          <h2>Menu</h2>
          <div class="twocolart">
            <?php wp_nav_menu(array('theme_location' => 'footer', 'container _class' =>'nav_menu'));?>
          </div>

        </div> <!-- nav div -->

        <div class="footlogo"><!-- logo div -->
            <p>&copy; <?php echo date("Y") ?> Caleb's Pitch</p> 

            <a href="<?php $url = home_url( '/' ); echo $url; ?>">
              <img class="logoimg" alt="<?php echo get_bloginfo('name');?>" src="<?php echo get_stylesheet_directory_uri(); ?>/images/miniLogo2.png">
            </a> 
        
        </div> <!-- logo div -->


			</section>

		</footer>
	<?php wp_footer(); ?>
	</body>
</html>