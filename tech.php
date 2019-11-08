<?php require_once( 'development/cms.php' ); ?>
<cms:template title='Sec Tech' order='23' />

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
                <h1 class="mt-4 mb-3">Security Technologies
                        <!-- <small>Subheading</small> -->
                      </h1>
                  
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Technology</li>
                      </ol>
                <br>
            <div class="row">
                    <div class="col-lg-5 mb-4">
                    <cms:editable name='main_photo' type='richtext'>
                        <img src="http://ee-security.com/img/sec.jpg" style="max-width: 100%;" alt="security system"></cms:editable>
                        </div>
                    <div class="col-lg-7 mb-4">
                    <cms:editable name='main_content' type='richtext'>
                        
                    <ol class="configurable-swatch-list">
                            <li><span class="swatch-item"><span class="swatch-text">eLEDing®</span></span>
                                <ol>* Smart Solar Lighting Technology :  world’s first pure digital hybrid LED lighting solution that can achieve the dynamic balance between power management and lighting performance optimization</ol>
                            </li>
                            <li><span class="swatch-item"><span class="swatch-text">eSenlite®</span></span>
                                <ol>* Energy-Efficient Smart Sensing Lighting Technology : the light dims down to reasonable brightness during nighttime when no motion has been detected, and immediately turns to maximum brightness when the sensor detects motion. The brightness settings of the light (dim or motion-sensing) are adjustable.</ol>
                            </li>
                            <li><span class="swatch-item"><span class="swatch-text">eStreet®</span></span>
                                <ol>* Smart or Auto Outdoor Solar Lighting Technology : completely software-driven, and can be upgraded or customized for special applications.</ol>
                            </li>
                            <li><span class="swatch-item"><span class="swatch-text">ePower®</span></span>
                                <ol>* Solar Power Supply Grids and Generators : combination of hardware and software solutions that aims to optimize the distribution and use of power under different application scenarios. Our exclusive, built-in IPM system monitors the battery capacity and power balance, controlling and adjusting the battery’s charging & discharging cycles, thus enabling the product to generate the most efficient power profile. Our system allows for dusk-to-dawn capacity in all kinds of applications and locations..</ol>
                            </li>
                            <li><span class="swatch-item"><span class="swatch-text">ePIR®</span></span>
                                <ol>* Upgraded version of current PIR motion sensing technology;&nbsp;directs the future
                                    development of motion detection applications. considerable improvements in both sensitivity and stability, effectively lowering the probability of false alarms triggered by pets, bugs, fans, etc.</ol>
                            </li>
                            <li><span class="swatch-item"><span class="swatch-text">eVoxBox®</span></span>
                                <ol>* Technology that is designed specially for&nbsp;access contol in security and/or&nbsp;life
                                    safety industries.</ol>
                            </li>
                            <li><span class="swatch-item"><span class="swatch-text">eVoxCon®</span></span>
                                <ol>* Expands and amplifies eVoxBox® technology.</ol>
                            </li>
                            <li><span class="swatch-item"><span class="swatch-text">eNaviGuard®</span></span>
                                <ol>* Combination of&nbsp;ePIR® and&nbsp;eVoxBox® technology for security and safety systems.
                                </ol>
                            </li>
                        </ol> </cms:editable>
                        </div>
            </div>
        </section>
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