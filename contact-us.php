<?php
    include "import/db_connection.php";
    $user1=$_POST["user_name"];
    $user2=$_POST["user_email"];
    $user3=$_POST["user_phone"];
    $user4=$_POST["user_subject"];
    $user5=$_POST["user_message"];
    echo $user3;

    date_default_timezone_set('Africa/Johannesburg');
    $currentTime = date('d-m-Y H:i:s');
    if(isset($_POST["submit"]))
    {
        $sql = "INSERT INTO enquiries VALUES (NULL, '$user1', '$user2', '$user3', '$user4', '$user5', '$currentTime')";
        if (mysqli_query($conn,$sql)) 
        {
            function submitForm() 
            {
              echo("<script type='text/javascript'>window.alert('Submission Successful.')</script>");
            }
            sleep(1);
            submitForm(); 
            sleep(1);
        } 
        else 
        {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>STEM</title>
        <link rel="icon" href="assets/images/logo25.png" type="image/x-icon">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/owl.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/swiper.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/jquery.fancybox.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/icomoon.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/scss/elements/theme-css.css' type='text/css' media='all'/>
        <link rel='stylesheet' id="creote-color-switcher-css" href='assets/css/scss/elements/color-switcher/color.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/woocommerce-layout.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='assets/css/woocommerce.css' type='text/css' media='all'/>
    </head>
    <body class="theme-creote">
        <div id="page" class="page_wapper hfeed site">
        
        
        
        
            <div id="wrapper_full" class="content_all_warpper">
                
                
                 <?php include "import/header.php"; ?>
                
                    
                </div>
                <div class="page_header_default style_one ">
                    <div class="parallax_cover">
                        <div class="simpleParallax"><img src="assets/images/main-2.png" alt="bg_image" class="cover-parallax"></div>
                    </div>
                    <div class="page_header_content">
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner_title_inner">
                                        <div class="title_page"> Contact </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="breadcrumbs creote">
                                        <ul class="breadcrumb m-auto">
                                            <li><a href="index">Home</a></li>
                                            <li class="active">Contact</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content" class="site-content ">
                    <section class="contact-section">
                        <div class="pd_top_90"></div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                                    <div class="contact_form_box_all type_one">
                                        <div class="contact_form_box_inner">
                                            <div class="contact_form_shortcode">
                                                <form method="post" action="">
                                                    <div class="controls">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label> Your Name<br/></label> <input type="text" name="user_name" placeholder="Your Name *" required="Enter Your Name" data-error="Enter Your Name"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label> Your Email<br/></label> <input type="email" name="user_email" required="required" placeholder="Enter Your Email Id *" data-error="Enter Your Email Id"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label> Your Phone<br/></label> <input type="text" name="user_phone" required="required" placeholder="Enter Your Phone Number*" data-error="Enter Your Phone Number"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group"> 
                                                                <label> Your Subject<br/></label> <input type="text" name="user_subject" required="required" placeholder=" Subject (Optional)"> </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label> Your Message<br/></label> 
                                                                    <textarea name="user_message" placeholder="Please, leave us a message " rows="3" required="required" data-error="Please, leave us a message."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group mg_top apbtn"> <button class="theme_btn" name="submit" type="submit">Submit</button> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 pd_left_30">
                                    <div class="title_all_box style_one dark_color">
                                        <div class="title_sections left">
                                            <div class="before_title">Contact Info to</div>
                                            <h2>Reach Our Expert Team</h2>
                                            <p>Send a message through given form, If your enquiry is time sensitive please use below contact details.</p>
                                        </div>
                                    </div>
                                    <div class="contact_box_content style_one">
                                        <div class="contact_box_inner icon_yes">
                                            <div class="icon_bx"> <span class=" icon-placeholder"></span> </div>
                                            <div class="contnet">
                                                <h3> Post Address </h3>
                                                <p> Building 6, Time Square Office
Park, 11 Pieter Street, Highveld
Techno Park, Centurion </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pd_bottom_15"></div>
                                    <div class="contact_box_content style_one">
                                        <div class="contact_box_inner icon_yes">
                                            <div class="icon_bx"> <span class="icon-phone-call"></span> </div>
                                            <div class="contnet">
                                                <h3> General Enquires </h3>
                                                <p> Phone: 0797 20 6667 &amp; Email: info@stemconsulting.co.za </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pd_bottom_15"></div>
                                    <div class="contact_box_content style_one">
                                        <div class="contact_box_inner icon_yes">
                                            <div class="icon_bx"> <span class="fa fa-clock-o"></span> </div>
                                            <div class="contnet">
                                                <h3> Operation Hours </h3>
                                                <p> Mon-Satday: 09.00 to 07.00 (Sunday: Closed) </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pd_bottom_40"></div>
                                    <div class="social_media_v_one style_two">
                                        <ul>
                                            <li> <a href="#"> <span class="fa fa-facebook"></span> <small>facebook</small> </a> </li>
                                            <li> <a href="#"> <span class="fa fa-twitter"></span> <small>twitter</small> </a> </li>
                                            <li> <a href="#"> <span class="fa fa-skype"></span> <small>skype</small> </a> </li>
                                            <li> <a href="#"> <span class="fa fa-instagram"></span> <small>instagram</small> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pd_top_70"></div>
                    </section>
                    <section class="contact-map-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <section class="map-section">
                                        <div class="map-outer">
                                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3062.2095757193324!2d28.184770567391414!3d-25.870340899386914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9565c9590fab1d%3A0x3d40594ae3c6789d!2sTime%20Square!5e0!3m2!1sen!2sin!4v1722928448344!5m2!1sen!2sin" width="1120" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                        <div class="pd_top_90"></div>
                    </section>
           
                </div>
            </div>
            
            
            
        <!--footer-->
            <?php include "import/footer.php"; ?>    
        </div>
        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
        <script type='text/javascript' src='assets/js/jquery-3.6.0.min.js'></script> <script type='text/javascript' src='assets/js/bootstrap.min.js'></script> <script type='text/javascript' src='assets/js/jquery.fancybox.js'></script> <script type='text/javascript' src='assets/js/jQuery.style.switcher.min.js'></script> <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script> <script type='text/javascript' src='assets/js/color-scheme.js'></script> <script type='text/javascript' src='assets/js/owl.js'></script> <script type='text/javascript' src='assets/js/swiper.min.js'></script> <script type='text/javascript' src='assets/js/isotope.min.js'></script> <script type='text/javascript' src='assets/js/countdown.js'></script> <script type='text/javascript' src='assets/js/simpleParallax.min.js'></script> <script type='text/javascript' src='assets/js/appear.js'></script> <script type='text/javascript' src='assets/js/jquery.countTo.js'></script> <script type='text/javascript' src='assets/js/sharer.js'></script> <script type='text/javascript' src='include/validator.min.js'></script> <script type='text/javascript' src='include/contact.js'></script> <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script> <script src="assets/js/gmaps.js"></script> <script src="assets/js/map-helper.js"></script> <script type='text/javascript' src='assets/js/creote-extension.js'></script> 
    </body>
</html>
