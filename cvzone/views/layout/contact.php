<!-- Contact Section -->
<article class="hs-content contact-section" id="section8">
    <span class="sec-icon fa fa-paper-plane"></span>
    <div class="hs-inner">
        <span class="before-title">.08</span>
        <h2>CONTACT</h2>
        <div class="contact_info">
            <h3>Get in touch</h3>
            <hr>
            <h5>We are waiting to assist you</h5>
            <h6>Simply use the form below to get in touch</h6>

            <hr>
        </div>
        <!-- Contact Form -->
        <fieldset id="contact_form">
            <div id="result">


            </div>
            <form class="" action="php/add-contact.php" method="post">
              <input value="<?php echo date("Y-m-d")." ".date("h:i:s");?>" name="postDate" type="hidden">
              <input value="<?php echo $userViewId ?>" name="contactSendToUser" type="hidden">
              <input type="text" name="name" id="name" placeholder="NAME" />
              <input type="email" name="email" id="email" placeholder="EMAIL" />
              <textarea name="message" id="message" placeholder="MESSAGE"></textarea>
              <input class="submit_btn" id="submit_btn" value="SEND MESSAGE" type="submit">
            </form>

        </fieldset>
        <!-- End Contact Form -->
    </div>
</article>
<!-- End Contact Section -->
