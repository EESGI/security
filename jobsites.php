<?php require_once( '../development/cms.php' ); ?>
<cms:template title='Sec Jobsites' order='24' />

<?php require_once( '../development/cms.php' ); ?>
<cms:template title='Sec Jobsites' order='24' />

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><cms:get_custom_field 'site_title' masterpage='globals.php' /></title>

    <link rel="icon" href="<cms:get_custom_field 'logo' masterpage='globals.php' />">

    <link href="http://ee-security.com/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://ee-security.com/css/full-width-pics.css" rel="stylesheet">
    <link href="http://ee-security.com/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <style>
            .rig {
                max-width:900px;
                margin:0 auto; /*center aligned*/
                padding:0;
                font-size:0; /* Remember to change it back to normal font size if have captions */
                list-style:none;
                background-color:rgba(0, 0, 0, 0);
            }
            .rig li {
                display: inline-block;
                *display:inline;/*for IE6 - IE7*/
                width:25%;
                vertical-align:middle;
                box-sizing:border-box;
                margin:0;
                padding:0;
            }
                    
            /* The wrapper for each item */
            .rig-cell {
                /*margin:12px;
                box-shadow:0 0 6px rgba(0,0,0,0.3);*/
                display:block;
                position: relative;
                overflow:hidden;
            }
                    
            /* If have the image layer */
            .rig-img {
                display:block;
                width: 100%;
                height: auto;
                border:none;
                transform:scale(1);
                transition:all 1s;
                margin: 5px;
                overflow:hidden;
            }
            
            .rig li:hover .rig-img {
                transform:scale(1.05);
            }
                    
            /* If have the overlay layer */
            .rig-overlay {
                position: absolute;
                display:block;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                margin: auto;
                background: #b17f7f url(img/link.png) no-repeat center 20%;
                background-size:50px 50px;
                opacity:0;
                filter:alpha(opacity=0);/*For IE6 - IE8*/
                transition:all 0.6s;
            }
            .rig li:hover .rig-overlay {
                opacity:0.8;
            }
            
            /* If have captions */
            .rig-text {
                display:block;
                padding:0 30px;
                box-sizing:border-box;
                position:absolute;
                left:0;
                width:100%;
                text-align:center;
                text-transform:capitalize;
                font-size:25px;
                font-weight:bold;
                font-family: 'Oswald', sans-serif;
                font-weight:normal!important;
                top:10%;
                color:white;
                opacity:0;
                filter:alpha(opacity=0);/*For older IE*/
                transform:translateY(-20px);
                transition:all .3s;
            }
            .rig li:hover .rig-text {
                transform:translateY(0px);
                opacity:0.9;
            }
            
            @media (max-width: 9000px) {
                #rig li {
                    width:25%;
                }
            }
            
            @media (max-width: 700px) {
                #rig li {
                    width:50%;
                }
            }
            
            @media (max-width: 550px) {
                #rig li {
                    width:50%;
                }
            }
            </style>

</head>

<body>
    <div class="container">
    <cms:embed 'securitynav.html' />

        <section class="py-1">
            <h1 class="mt-4 mb-3">Job Sites
                <!-- <small>Subheading</small> -->
            </h1>
    
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Sites</li>
            </ol>
            <br>
            <div class="row">
            <cms:editable name='main_content' type='richtext'>
                <ul class="rig" id="rig">
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C01_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Santa Anita Car Wash</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C02_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Garvey Commercial</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C03_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Asia Village</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C04_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Custom Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C05_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">China Town Senior Apartment</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C06_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Super K-Mart</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C08_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Gold World Plaza</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C09_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Monterey Park Medical Building</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C10_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">San Gabriel Square</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C11_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Grand Plaza</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img//C12_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Sheraton</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C13_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">World Plaza - China Town</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C14_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Arcadia Landmark</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C15_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Barstow Hotel</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C16_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Mar Center</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C17_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Industrial Complex</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C18_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Hoa Binh Super Market</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C19_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Asia Plaza</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C20_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Los Angeles Senior Apartment</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/ucla.jpg" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">UCLA Office Building</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C22_S.gif" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Grand Century - San Jose</span>
                        </a>
                    </li>
                    <li>
                        <a class="rig-cell" href="#">
                            <img src="http://ee-security.com/img/C23.jpg" alt="site" class="rig-img" />
                            <span class="rig-overlay"></span>
                            <span class="rig-text">Amphastar</span>
                        </a>
                    </li>
                
                </ul> </cms:editable>
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