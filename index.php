<?php require_once( 'development/cms.php' ); ?>
<cms:template title='Sec Home' order='21' />

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><cms:get_custom_field 'sec_title' masterpage='globals.php' /></title>

  <link rel="icon" href="<cms:get_custom_field 'seclogo' masterpage='globals.php' />">

  <!-- Bootstrap core CSS -->
  <link href="http://ee-security.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://ee-security.com/css/full-width-pics.css" rel="stylesheet">
  <link href="http://ee-security.com/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <cms:embed 'securitynav.html' />

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('<cms:get_custom_field 'seclogo' masterpage='globals.php' />');">
    <img class="img-fluid d-block mx-auto" src="https://lh3.googleusercontent.com/-NrZc9IlOrPU/XaT3c_9t8BI/AAAAAAAAABI/zHG7xaX5CyA7dwjXDgCrbPMloopy55pCACLoCGAYYCw/s239-c/profile%2Bpicture" alt="">
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
    <cms:editable name='main_content' type='richtext'>
      <h1>Security and Safety System Technology</h1>
      <p class="lead">Solar or Energy Efficient AC Powered Security, For the Future</p>
      <p>Motion activated security & safety systems and extending components for your peace of mind. With a selection of both solar and ac-powered systems, EESGI's advanced ePIR® technology will keep your area secure.

        <small>Off the grid solar-powered security systems make your safety worry free!</small></p></cms:editable>
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1424894408462-1c89797f2305?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
    <cms:editable name='second_content' type='richtext'>
      <h1>Incorporated</h1>
      <p class="lead">E&E Electronic Engineering Research is proud to be a part of EE Systems Group, Inc. All EESGI products are designed with green in mind. We are very proud to offer a wide selection of solar-powered or energy-efficient AC-powered products to suit your security and safety needs.</p></cms:editable>
    </div>
  </section>

    <!-- Image Section - set the background image for the header in the line below -->
    <section class="py-5 bg-image-full" style="background-image: url('https://images.unsplash.com/photo-1482987945559-cf71742c8329?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');">
      <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
      <div style="height: 200px;"></div>
    </section>
  
    <!-- Content section -->
    <section class="py-5">
      <div class="container">
      <cms:editable name='third_content' type='richtext'>
        <h1>Installation</h1>
        <p class="lead">If you are in the following counties in Southern California, please contact us for residental or industrial installation price quote:<br>
          <div style="padding-left: 3rem">
          Imperial County<br>
          Kern County<br>
          L.A. County<br>
          Orange County<br>
          Riverside County<br>
          San Bernardino County<br>
          San Diego County<br>
          Santa Barbara County<br>
          Ventura County<br><br> </div>
          Installation toll free hot line: 1-877-579-3889</p>
          <a class="btn btn-dark" href="./contact.html" title="pastOrders"><span><span>Send Inquiry</span></span></a>
          </cms:editable>
      </div>
    </section>
    <hr>

  <!-- Footer -->
  <cms:embed 'securityfooter.html' />

  <!-- Bootstrap core JavaScript -->
  <script src="http://ee-security.com/vendor/jquery/jquery.min.js"></script>
  <script src="http://ee-security.com/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>
