<!DOCTYPE html>
<html lang="en">
<?php 
$pageName="Contact";
$active="contact";
include_once('config.php');
include_once('head.php');

?>
<body>
    <!-- start preload -->
   <div class="preloader">
       <div class="pre_item">
           <img class="img-responsive" src="assests/img/loader.gif" alt="">
       </div>
   </div>
   <?php
    include_once('navigation.php');
   ?>
    <!-- end main menu part -->
    <!-- start contact banar -->
    <section id="contact_banar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact_banar_table">
                        <div class="contact_baanr_table_cell">
                            <div class="contact_banar_txt">
                                <h1><span>Seasoned Meals</span> contact</h1>
                                <p>home / <span>contact</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact banar -->
    <!-- start contact container -->
    <section id="contact_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="menu_title text-center">
                        <h1>Contact <span>us</span></h1>
                        <img class="img-responsive" src="assests/img/divider.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="contact_main_container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="contact_page_contact_info">
                            <div class="contact_form_info_item">
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <h3>Phone</h3>
                                <p>+27 73 339 0118</p>
                            </div>
                            <div class="contact_form_info_item">
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <h3>Address</h3>
                                <p>Seasoned Meals, Johannesburg, 2006</p>
                            </div>
                            <div class="contact_form_info_item">
                                <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                <h3>E-mail</h3>
                                <p><?php echo($email)?></p>
                            </div>
                            <div class="contact_form_info_item">
                                <span><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                <h3>Follow Us</h3>
                                <ul>
                                    <li><a href="<?php echo($facebookUrl)?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo($twitterUrl)?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                               
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="contact_page_contact_form">
                            <form>
                                <input type="text" class="from_name" placeholder="Name*" required>
                                <input type="email" class="from_email" placeholder="Email*" required>
                                <input type="text" class="from_subject" placeholder="Subject*">
                                <textarea class="from_message" placeholder="Message*"></textarea>
                                <button type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact container -->
    <?php include_once('footer.php'); ?>
    <!-- all js file link here -->
    <!-- main js link -->
    <script src="assests/js/jquery-2.1.3.min.js"></script> 
    <!-- bootstrap js link -->
    <script src="assests/js/bootstrap.min.js"></script> 
    <!-- slider js link -->
    <script src="assests/js/owl.carousel.min.js"></script> 
    <!-- isotop js link -->
    <script src="assests/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded js link -->
    <script src="assests/js/imagesloaded.pkgd.min.js"></script>   
    <!-- counter up js link -->
    <script src="assests/js/jquery.counterup.min.js"></script>
    <!-- slick up js link -->
    <script src="assests/js/jquery.slicknav.min.js"></script>  
    <!-- lightbox js link -->
    <script src="assests/js/lightbox.min.js"></script> 
    <!-- waypoints js link -->
    <script src="assests/js/waypoints.min.js"></script> 
    <!-- custom js link -->
    <script src="assests/js/custom.js"></script>  
</body>

<!-- Mirrored from durkcoder.com/cattle-main/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 19:18:35 GMT -->
</html>