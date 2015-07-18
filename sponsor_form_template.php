<?php
/*
Template Name: Sponsor Form Template
*/
?>

<?php get_header(); ?>
<main class="main" >
    <section class="layout">

    <section class="thirdwidth formText">
        <img class="formSplat hvr-float-shadow" alt="Caleb's Pitch volunteer icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pink_splat.png">
        <h2>Sponsor Caleb's Pitch Today!</h2>
            <p>By sponsoring an event with Caleb's Pitch you help us reach out the community and build our capacity to reach more children and families. Use the form to the right to sign up, and we'll contact you to talk about how your business can make a lasting contribution to Caleb's Pitch.</p>
    </section>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="sponsorForm">
    <form action="//kellyngo.us11.list-manage.com/subscribe/post?u=e17dc775841d90c94453ee785&amp;id=8ca46ed13d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        <h2>Sponsor Sign Up</h2>
    <!--<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>-->
    <div class="mc-field-group">
        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>
        <br />
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    </div>
    <div class="mc-field-group">
        <label for="mce-FNAME">First Name </label>
        <br />
        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
    </div>
    <div class="mc-field-group">
        <label for="mce-LNAME">Last Name </label>
        <br />
        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
    </div>
    <div class="mc-field-group">
        <label for="mce-BIZ">Business/Organization </label>
        <br />
        <input type="text" value="" name="BIZ" class="" id="mce-BIZ">
    </div>
        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <br />
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_e17dc775841d90c94453ee785_8ca46ed13d" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Sign Me Up!" name="subscribe" id="mc-embedded-subscribe" class="formButton sponsorButton"></div>
        </div>
    </form>
</div>

<!--End mc_embed_signup-->

    </section>
</main>

<?php get_footer(); ?>