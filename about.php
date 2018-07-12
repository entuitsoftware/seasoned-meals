<!DOCTYPE html>
<html lang="en">

<?php
$pageName="About Us";
$active="about";
include_once('head.php')
 ?>
<body>
    <!-- start preload -->
   <div class="preloader">
       <div class="pre_item">
           <img class="img-responsive" src="assests/img/loader.gif" alt="">
       </div>
   </div>
   
    <!-- start main menu part -->
    <?php include_once('navigation.php') ?>
    <!-- end main menu part -->
    <!-- start about us part -->
    <section id="about_page_banar">
        <div class="about_page_banar_item">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="about_banar_table">
                            <div class="about_banar_table_cell">
                                <div class="about_banar_text">
                                    <h1><span>Seasoned</span> Meals</h1>
                                    <p>Home / <span>about</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us part -->
    <!-- start about us about part -->
    <section id="about_us_about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="about_us_about_video">
                        <img class="img-responsive" src="assests/img/2.jpg" alt="">
                        
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="about_us_about_content">
                        <h1>Our <span>Story</span></h1>
                        <img class="img-responsive" src="assests/img/divider.png" alt="">
                        <p class="">
                                A self- taught food enthusiast Anza Mulovhedzi, began Seasoned Meals in January 2018 right in the hub of the fast paced city of Johannesburg. Through the need found for good health meals without the time to prepare it, Anza began to take her love for good food into a concept that not only helps her family and friends but to those that have also become accustomed to the fast paced life. 
                                <br><br>
                                With her passion and hard work Seasoned Meals began. Seasoned Meals is based in Johannesburg West but caters to people in the whole of the Johannesburg and Pretoria region. To adjust to all needs meals begin at R200 for a minimum of three days lunch meals. An extra delivery charge is charged depending on your location(this is worked out in the quotation, which will be sent out to you after you have decided on the menu). Menus are created specific to each and every client depending on allergies, likes and dislikes. All orders require a minimum or four-days prior notice(including weekends).
                                
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us about part -->
    <!-- start about percess -->
    <section id="about_us_about_percess">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about_us_about_percess_content text-center">
                        <h1><span>Explore Menu</span> For Your Lifestype</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="shope.html">see menu</a>
                        <a href="Reservation.html" class="sp">book table</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about percess -->
    <!-- start brand part -->
    <section id="about_brand">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <div class="brand_slide_active owl-carousel">
                        <div class="brand_item">
                            <img class="img-responsive" src="assests/img/brand/1.png" alt="">
                        </div>
                        <div class="brand_item">
                            <img class="img-responsive" src="assests/img/brand/2.png" alt="">
                        </div>
                        <div class="brand_item">
                            <img class="img-responsive" src="assests/img/brand/3.png" alt="">
                        </div>
                        <div class="brand_item">
                            <img class="img-responsive" src="assests/img/brand/4.png" alt="">
                        </div>
                        <div class="brand_item">
                            <img class="img-responsive" src="assests/img/brand/3.png" alt="">
                        </div>
                        <div class="brand_item">
                            <img class="img-responsive" src="assests/img/brand/1.png" alt="">
                        </div>
                        <div class="brand_item">
                            <img class="img-responsive" src="assests/img/brand/2.png" alt="">
                        </div>
                        <div class="brand_item">
                            <img class="img-responsive" src="assests/img/brand/3.png" alt="">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- end brand part -->
    

    <!-- start footer part -->
    <?php include_once('footer.php') ?>
    <!-- end footer bottom -->
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
    <!-- lightbox js link -->
    <script src="assests/js/YouTubePopUp.jquery.js"></script> 
    <!-- waypoints js link -->
    <script src="assests/js/waypoints.min.js"></script> 
    <!-- custom js link -->
    <script src="assests/js/custom.js"></script>
    <script>
        $(document).ready(function(){
            /*-- jqury video popup -- */
            jQuery("a.bla-1").YouTubePopUp(); 
        });
    </script>
</body>

<!-- Mirrored from durkcoder.com/cattle-main/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 19:18:32 GMT -->
</html>