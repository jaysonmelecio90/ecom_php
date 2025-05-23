<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . "/header.php"); ?>

<!-- Contact Section -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contact Us</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" method="post">
                <?php send_message(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name"
                                required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email"
                                required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Your Phone *" id="phone"
                                required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" id="message"
                                required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button name="submit" type="submit" class="btn btn-xl">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container -->
<?php include(TEMPLATE_FRONT . "/footer.php"); ?>