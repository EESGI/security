<?php require_once( 'development/cms.php' ); ?>
<cms:template title='Sec Contact' order='25' />

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><cms:get_custom_field 'site_title' masterpage='globals.php' /></title>
    <link rel="icon" href="<cms:get_custom_field 'seclogo' masterpage='globals.php' />">

    <link href="http://ee-security.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://ee-security.com/css/full-width-pics.css" rel="stylesheet">
    <link href="http://ee-security.com/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

    <cms:embed 'securitynav.html' />

        <section class="py-1">
                <h1 class="mt-4 mb-3">Contact Us
                        <!-- <small>Subheading</small> -->
                      </h1>
                  
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Contact</li>
                      </ol>
                <br>
            <div class="row">
                <div class="col-lg-8 mb-4">
                <cms:editable name='main_content' type='richtext'>
                    <h3>Looking for a quote or some info?</h3>
                    <h4>Need to report an issue?</h4>
                    <p>Use the following form to contact us with any questions or concerns</p> </cms:editable>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Contact Name:</label>
                                <input type="text" class="form-control" id="name" required
                                    data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control" id="phone" required
                                    data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required
                                    data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required
                                    data-validation-required-message="Please enter your message" maxlength="999"
                                    style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-dark" id="sendMessageButton">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-4 mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.4224520723583!2d-118.01416188493381!3d34.05868332483837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2d7314d684601%3A0x93566865ae404467!2s12346%20Valley%20Blvd%20Suite%20E%2C%20El%20Monte%2C%20CA%2091732!5e0!3m2!1sen!2sus!4v1571097489779!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
        <section></section>
    </div>
    <hr>
    <cms:embed 'securityfooter.html' />

      <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="http://ee-security.com/js/jqBootstrapValidation.js"></script>
  <script src="http://ee-security.com/js/contact_me.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="http://ee-security.com/vendor/jquery/jquery.min.js"></script>
    <script src="http://ee-security.com/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php COUCH::invoke(); ?>