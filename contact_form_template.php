<?php
/*
Template Name: Contact Form Template
*/
?>

<?php get_header(); ?>
<main class="main" >
    <section class="layout">

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="contactForm">
    <form action="//thenewe.us11.list-manage.com/subscribe/post?u=e17dc775841d90c94453ee785&amp;id=8ca46ed13d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        <h2>We Want To Hear From You!</h2>
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
        <label for="mce-MESSAGE">Your Message</label>
        <br />
        <textarea rows="4" cols="46" type="text" name="MESSAGE" class="" id="mce-MESSAGE"></textarea>
    </div>
        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <br />
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_e17dc775841d90c94453ee785_8ca46ed13d" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Send My Message" name="subscribe" id="mc-embedded-subscribe" class="formButton contactButton"></div>
        </div>
    </form>
</div>

<!--End mc_embed_signup-->

    </section>
</main>

<?php get_footer(); ?>