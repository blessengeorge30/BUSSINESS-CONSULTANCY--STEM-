<?php
    include "import/db_connection.php";
    $user1=$_POST["user_name"];
    $user2=$_POST["user_email"];
    $user3=$_POST["user_phoneno"];
    $user4=$_POST["user_subject"];
    $user5=$_POST["user_message"];
    echo $user3;

    date_default_timezone_set('Africa/Johannesburg');
    $currentTime = date('d-m-Y H:i:s');
    if(isset($_POST["submit"]))
    {
        $sql = "INSERT INTO modal_data VALUES ('$user1', '$user2', '$user3', '$user4', '$user5', '$currentTime',NULL)";
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


<!--footer-->
<div class="footer_widgets_wrap bg_op_1" style="background: url(assets/images/footer-bg.jpg);">
   <!--===============spacing==============-->
   <div class="pd_top_90"></div>
   <!--===============spacing==============-->
   <div class="container">
      <div class="row">
         <!-- Left Side: Get In Touch -->
         <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="footer_widgets about_company light_color">
               <div class="about_company_inner">
                  <div class="footer_logo">
                     <div class="footer_widgets wid_tit style_one">
                        <div class="fo_wid_title">
                           <h2>Get In Touch</h2>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
                  </div>
                  <div class="content_box">
                     <p class="color_white">
                        Stem Consulting is a leading BEEE Level 1 engineering consultancy, dedicated to driving sustainable infrastructure development. With a strong foundation built since 2018,
                     </p>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_5"></div>
               <!--===============spacing==============-->
               <div class="theme_btn_all color_one">
                  <a href="#" class="theme-btn two color_white">
                     Read More
                  </a>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_30"></div>
               <!--===============spacing==============-->
               <div class="social_media_v_one style_three">
                  <ul>
                     <li>
                        <a href="#"> <span class="fa fa-facebook"></span>
                           <small>facebook</small>
                        </a>
                     </li>
                     <li>
                        <a href="#"> <span class="fa fa-twitter"></span>
                           <small>twitter</small>
                        </a>
                     </li>
                     <li>
                        <a href="#"> <span class="fa fa-skype"></span>
                           <small>skype</small>
                        </a>
                     </li>
                     <li>
                        <a href="#"> <span class="fa fa-instagram"></span>
                           <small>instagram</small>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <!-- Right Side: Company, Information, and Contact Us -->
         <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-end">
            <div class="row">
               <div class="col-md-4 col-sm-12">
                  <div class="footer_widgets wid_tit style_one">
                     <div class="fo_wid_title">
                        <h2>Company</h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_35"></div>
                  <!--===============spacing==============-->
                  <div class="footer_widgets clearfix navigation_foo light_color style_one">
                     <div class="navigation_foo_box">
                        <div class="navigation_foo_inner">
                           <ul class="menu">
                              <li><a href="index">Home</a></li>
                              <li><a href="about-us">About Us</a></li>
                              <li><a href="contact-us">Contact</a></li>
                              <li><a href="#">Projects</a></li>
                              <li><a href="services">Services</a></li>
                          
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12">
                  <div class="footer_widgets wid_tit style_one">
                     <div class="fo_wid_title">
                        <h2>Information</h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_35"></div>
                  <!--===============spacing==============-->
                  <div class="footer_widgets clearfix navigation_foo light_color style_one">
                     <div class="navigation_foo_box">
                        <div class="navigation_foo_inner">
                           <ul class="menu">
                              <li><a href="#">How it’s Work</a></li>
                              <li><a href="#">Partners</a></li>
                              <li><a href="#">Testimonials</a></li>
                              <li><a href="#">Key Areas</a></li>
                              <li><a href="#">Case Studies</a></li>
                             
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12">
                  <div class="footer_widgets wid_tit style_one" style="width: 100%; text-align: left;">
                     <div class="fo_wid_title">
                        <h2>Contact Us</h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_25"></div>
                  <!--===============spacing==============-->
                  <div class="footer_contact_widget">
                     <div class="contact_info_nbox type_one">
                        <div class="single">
                           <h6 class="color_white"> <span class="icon-location2 color_white"></span> Address </h6>
                           <p class="color_white"> Time Square Office
Park, 11 Pieter Street, Highveld
Techno Park, Centurion</p>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_25"></div>
                     <!--===============spacing==============-->
                   
                     <div class="contact_info_nbox type_one">
                        <div class="single">
                           <h6 class="color_white"> <span class="icon-mail color_white"></span> Email</h6>
                           <p><a href="mailto:info@stemconsulting.co.za" class="color_white">info@stemconsulting.co.za</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_50"></div>
   <!--===============spacing==============-->
</div>

<div class="creote-footer-copyright bg_dark_3">
   <div class="pd_top_10"></div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="footer_copy_content color_white"> © 2024 <a href="https://themeforest.net/user/steelthemes">STEM Consultancy</a> All Rights Reserved. </div>
         </div>
         <div class="col-lg-6 col-md-12 col-sm-12 text-end">
            <div class="footer_copy_content_right">
               <div class="social_media_v_one">
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
   </div>
   <div class="pd_bottom_10"></div>
</div>
<!--footer end -->

   
            <div class="crt_mobile_menu">
                <div class="menu-backdrop"></div>
                <nav class="menu-box">
                    <div class="close-btn"><i class="icon-close"></i></div>
                    <form role="search" method="get" action="#"> <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search"/> <button type="submit" class="sch_btn"> <i class="icon-search"></i></button> </form>
                    <div class="menu-outer"> </div>
                </nav>
            </div>
            <div id="search-popup" class="search-popup">
                <div class="close-search"><i class="fa fa-times"></i></div>
                <div class="popup-inner">
                    <div class="overlay-layer"></div>
                    <div class="search-form">
                        <fieldset>
                            <form role="search" method="get" action="#"> <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search"/> <button type="submit" class="sch_btn"> <i class="icon-search"></i></button> </form>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="modal_popup one">
                <div class="modal-popup-inner">
                    <div class="close-modal"><i class="fa fa-times"></i></div>
                    <div class="modal_box">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 form_inner">
                                <div class="form_content">
                                    <form class="contact-form" method="post" action="">
                                        <p> <label> Your name<br/> <input type="text" name="user_name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name"/> <br/> <i class="fa fa-user"></i><br/> </label> </p>
                                        <p><label> Your email<br/> <input type="email" name="user_email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Email"/> <br/> <i class="fa fa-envelope"></i><br/> </label> </p>
                                        <p> <label> Your Phone no.<br/> <input type="text" name="user_phoneno" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your phone number"/> <br/> <i class="fa fa-folder"></i><br/> </label> </p>
                                         <p> <label> Subject<br/> <input type="text" name="user_subject" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Subject"/> <br/> <i class="fa fa-folder"></i><br/> </label> </p>
                                        <p> <label> Your message (optional) <br/> <textarea name="user_message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Enter Your Message"></textarea> <br/> <i class="fa fa-comments"></i><br/> </label> </p>
                                        <p><input name="submit" type="submit" value="Submit"/></p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 about_company_inner">
                                <div class="abt_content">
                                    <div class="logo"> <img src="assets/images/stemlogo.png" alt="img" class="company_logo_modal"> </div>
                                    <div class="text">
                                        <p> Established in 2018, Stem Consulting is a BEEE Level 2 firm offering a comprehensive suite of engineering services to a diverse clientele. Our expertise spans the entire project lifecycle, encompassing advisory, design, and project management services specifically tailored for infrastructure projects. At Stem Consulting, we are committed to exceeding client expectations by delivering exceptional service and value at every touchpoint. This unwavering commitment to quality forms the cornerstone of our core values.</p>
                                        <a href="index">Read More</a> 
                                    </div>
                                    
                                    
                                    
                                    <!-- <div class="post_contet_modal"> <h2> Latest News</h2> <div class="post_enable"> <div class="modal_post_grid"> <a href="blog-single.html"> <img width="852" height="812" src="assets/images/blog/blog-image-9.jpg" class="main_img wp-post-image" alt="img"/> </a> </div><div class="modal_post_grid"> <a href="blog-single.html"> <img width="852" height="812" src="assets/images/blog/blog-image-8.jpg" class="main_img wp-post-image" alt="img"/> </a> </div><div class="modal_post_grid"> <a href="blog-single.html"> <img width="852" height="812" src="assets/images/blog/blog-image-7.jpg" class="main_img wp-post-image" alt="img"/> </a> </div><div class="modal_post_grid"> <a href="blog-single.html"> <img width="852" height="812" src="assets/images/blog/blog-image-6.jpg" class="main_img wp-post-image" alt="img"/> </a> </div><div class="modal_post_grid"> <a href="blog-single.html"> <img width="852" height="812" src="assets/images/blog/blog-image-5.jpg" class="main_img wp-post-image" alt="img"/> </a> </div></div></div>--> 
                                    <div class="copright"> © 2024 STEM Consultancy. All Rights Reserved. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side_bar_cart" id="mini_cart">
                <div class="cart_overlay"></div>
                <div class="cart_right_conten">
                    <div class="close">
                        <div class="close_btn_mini"><i class="icon-close"></i></div>
                    </div>
                    <div class="cart_content_box">
                        <div class="contnet_cart_box">
                            <div class="widget_shopping_cart_content">
                                <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
        <script type='text/javascript' src='assets/js/jquery-3.6.0.min.js'></script> <script type='text/javascript' src='assets/js/bootstrap.min.js'></script> <script type='text/javascript' src='assets/js/jquery.fancybox.js'></script> <script type='text/javascript' src='assets/js/jQuery.style.switcher.min.js'></script> <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script> <script type='text/javascript' src='assets/js/color-scheme.js'></script> <script type='text/javascript' src='assets/js/owl.js'></script> <script type='text/javascript' src='assets/js/swiper.min.js'></script> <script type='text/javascript' src='assets/js/isotope.min.js'></script> <script type='text/javascript' src='assets/js/countdown.js'></script> <script type='text/javascript' src='assets/js/simpleParallax.min.js'></script> <script type='text/javascript' src='assets/js/appear.js'></script> <script type='text/javascript' src='assets/js/jquery.countTo.js'></script> <script type='text/javascript' src='assets/js/sharer.js'></script> <script type='text/javascript' src='assets/js/validation.js'></script> <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script> <script src="assets/js/gmaps.js"></script> <script src="assets/js/map-helper.js"></script> <script type='text/javascript' src='assets/js/creote-extension.js'></script> 
        
        
