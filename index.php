<!DOCTYPE html>
<html lang="en">
<?php 
$pageName="Home";
$active="index";
include_once('head.php')
?>


<body>
    <!-- start preload -->
    <div class="preloader">
        <div class="pre_item">
            <img class="img-responsive" src="assests/img/loader.gif" alt="">
        </div>
    </div>
    <!-- end preload -->
    <section id="navigation">
        <?php include_once('navigation.php') ?>
    </section>
    <!-- start header top -->

    <!-- slider part -->
    <section id="banar_slider">
        <div class="banar_slide_active owl-carousel">
            <div class="slide_item1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banar_table">
                                <div class="banar_table_cell">
                                    <div class="banar_text">
                                        <h1 class="theme-text-alt">Seasoned Meals</h1>
                                        <h3 class="theme-text">Your first steps into affordable homemade meals solutions, to keep your taste buds
                                            happy without any of that guilt! </h3>
                                        <a href="#">Request Menu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide_item2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banar_table">
                                <div class="banar_table_cell">
                                    <div class="banar_text">
                                        <h1>Seasoned Meals</h1>
                                        <h2>Let Enjoy The Rhym Of Fooday Dishes</h2>
                                        <a href="about.html">Red More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide_item3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banar_table">
                                <div class="banar_table_cell">
                                    <div class="banar_text">
                                        <h1>Cattle-Resturent</h1>
                                        <h2>Let Enjoy The Rhym Of Fooday Dishes</h2>
                                        <a href="about.html">Red More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider part -->
    <!-- start about us part -->
    <section id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="about_img_slide owl-carousel">
                        <div class="about_s_item1">
                            <img class="img-responsive" src="assests/img/8.jpg" alt="">
                        </div>
                        <div class="about_s_item2">
                            <img class="img-responsive" src="assests/img/about-us/2.png" alt="">
                        </div>
                        <div class="about_s_item3">
                            <img class="img-responsive" src="assests/img/about-us/3.png" alt="">
                        </div>
                        <div class="about_s_item4">
                            <img class="img-responsive" src="assests/img/about-us/4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="about_info">
                        <h1>Seasoned
                            <span>Meals</span>
                        </h1>
                        <img class="img-responsive" src="assests/img/divider.png" alt="">
                        <p> Seasoned Meals in based in Johannesburg West but caters to people in the whole of the Johannesburg 
                            and Pretoria region. To adjust to all needs meals begin at R200 for a minimum of three days lunch meals. An extra delivery charge is charged depending on your location(this is worked out in the quotation, which will be sent out to you after you have decided on the menu). Menus are created specific to each and every client depending on allergies, likes and dislikes. All orders require a minimum or four-days prior notice(including weekends). </p>
                        <a href="#">See Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us part -->
    <!-- start service part -->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6 col-xs-12">
                    <div class="service_text">
                        <h1>
                            <span>Order</span> Now</h1>
                        <img class="img-responsive" src="assests/img/divider.png" alt="">
                        <p>Fill in the form below and receive a personalized menu to cater to your dietary
                            needs.</p>
                        <div class="service_item_container text-center">
                            <div class="contact_page_contact_form">
                                <form>
                                    <input type="text" class="form-control" name="fullname" placeholder="Name*" required="">
                                    <input type="tel" class="form-control" name="phoneNumber" placeholder="Cellphone Number*" required="">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address*" required="">
                                    <input type="text" class="form-control" placeholder="Allergies*">
                                    <textarea class="from_message form-control" placeholder="Message*"></textarea>
                                    <button type="submit" class="form-control">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-xs-12">
                    <div class="service_img text-right">
                        <img class="img-responsive" src="assests/img/20.jpg" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- end service part -->

    <?php include_once('footer.php') ?>
   
    <!-- all js file link here -->
    <!-- main js link -->
    <script src="assests/js/jquery-2.1.3.min.js"></script>
    <script> 
        // $(function () {
        //     $("#navigation").load("navigation.html");
        // });
    </script>
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

</html>