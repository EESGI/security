<?php require_once( '../development/cms.php' ); ?>
<cms:template title='Sec Systems' order='22' />

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
                <h1 class="mt-4 mb-3">Security Systems and Services
                        <!-- <small>Subheading</small> -->
                      </h1>
                  
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Systems</li>
                      </ol>
                <br>
            <div class="row">
                <div class="col-lg-8 mb-4">
                <cms:editable name='main_content' type='richtext'>
                    <p> EE-Security is a local security vendor, servicing Southern Californian Counties. With custom EESGI security components, combined with Honeywell Monitoring and DSC Security Modules, we can combine the dedication and personal touch of a local business, with the resources and security capabilities of a large corporation. <br><br>Our advanced security system technologies make your security and safety worry-free! With our lines of
                        ePIR®, eVoxBox®, eVoxCon®, and eNaviGuard® products, we strive to be ahead of the competition, and
                        to give YOU peace of mind.</p><br><br>
                        <h4>What We Offer:</h4> <br>
                        <div style="padding-left: 3rem">
                        <a href="https://eleding.com/shop-products/eleding.html">Solar Security Lighting</a><br><br>
                        <a href="https://eleding.com/led-light-fixtures.html">AC Security Lighting</a><br><br>
                        <a href="https://eleding.com/security-safety.html">EESGI Security Components</a><br><br>
                        <a href="https://eleding.com/led-light-fixtures.html">Off-The-Grid Solar Generator Systems</a><br><br>
                        <a href="https://www.security.honeywell.com/All-Categories/integrated-security">Honeywell Security</a><br><br>
                        <a href="https://www.dsc.com/index.php?n=products&filter=6,7">DSC Security</a><br><br>
                    </div><br><br><br><br>
                    <div class="row justify-content-center"><a href="https://eleding.com/local-installation.html" class="btn btn-dark btn-lg">Schedule Install</a></div></cms:editable>
                </div>
                <div class="col-lg-4 mb-4">
                <cms:editable name='main_photo' type='richtext'>
                    <img src="http://ee-security.com/img/poe-ad.jpg" href="https://eleding.com/ee-poe-high-voltage-solar-power-panel-w-optional-wifi-cctv-camera-system.html" target="_blank" alt="ee-poe ad"></cms:editable>
                </div>
            </div>
            
        </section>
    </div>
        
    <hr>
    <footer class="py-2 footer bg-light" style="background-color: #b17f7f; color:black !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-md-left my-auto">
                    <ul class="list-inline mb-2" style="font-size: 0.95rem;">
                        <li class="list-inline-item">
                            <a href="https://goo.gl/maps/sYWfPUiwCRckCdjg7"
                                target="_blank" rel="noopener">12346 Valley Blvd. Suite E,&nbsp;El Monte, CA 91732,
                                U.S.A</a><br>
                            <a href="callto:18775793889">877-579-3889</a> | <a
                                href="mailto:info@eesgi.com">info@eesgi.com</a> | M-F : 10 am - 5 pm PST <br>
                            <a href="https://eleding.com/privacy-policy-cookie-restriction-mode">Privacy Policy</a> | <a href="https://eesgi.com" target="_blank">Corporate Site</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="https://www.facebook.com/EE-Systems-Group-107671617281437" target="_blank">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="https://www.linkedin.com/company/ee-systems-group-inc/" target="_blank">
                                <i class="fab fa-linkedin fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.yelp.com/biz/ee-systems-group-inc-el-monte-2">
                                <i class="fab fa-yelp fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a
                                href="https://www.google.com/maps/place//data=!4m3!3m2!1s0x80c2da19868af7eb:0x88d6b5e224e66b07!12e1?source=g.page.default&pli=1">
                                <i class="fab fa-google fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UCsvZVa5bMpbK3mKQOsNtKWA">
                                <i class="fab fa-youtube fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0" style="padding-left:3%; padding-top:1%">&copy; EESGI 2019.
                        All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

      <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php COUCH::invoke(); ?>