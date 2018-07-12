<!DOCTYPE html>
<html lang="en">

<?php
$pageName="Gallery";
$active="gallery";
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
                                    <p>Home / <span>gallery</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about us part -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <div class="galary_title text-center">
                        <h1>our <span>galary</span></h1>
                        <img class="img-responsive" src="assests/img/divider.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div> -->
                </div>
            </div>
            <div class="galary_container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="portfolio_btn">
                            <ul class="portfolio-filter">
                                <li class="filter active" data-filter="*">ALL</li>
                                <li class="filter" data-filter=".ill">Vegetarian</li>
                                <li class="filter" data-filter=".brand">Vegan</li>
                                <li class="filter" data-filter=".fs">Special</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- portfolio single item -->
            <div class="galary_item_container">
                <div class="row">
                   <div class="galary_item" style="position: relative; height: 520.25px;">
                       <!-- portfolio single item -->
                        <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ill singal_item nopading" style="position: absolute; left: 0px; top: 0px;">
                            <div class="singal-galary">
                                <img class="img-responsive" src="assests/img/15.jpg" alt="">
                                <div class="port_hover_div">
                                    <div class="port_hover_item text-center">
                                        <h3>Meal name</h3>
                                        <a href="assests/img/15.jpg" data-lightbox="imran" data-title="Meal description here">
                                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </a>
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio single item -->
                        <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12 brand singal_item nopading" style="position: absolute; left: 390px; top: 0px;">
                            <div class="singal-galary">
                                <img class="img-responsive" src="assests/img/17.png" alt="">
                                <div class="port_hover_div">
                                    <div class="port_hover_item text-center">
                                        <h3>Meal name</h3>
                                        <a href="assests/img/17.png" data-lightbox="imran" data-title="Meal description here">
                                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </a>
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio single item -->
                        <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12 fs singal_item nopading" style="position: absolute; left: 780px; top: 0px;">
                            <div class="singal-galary">
                                <img class="img-responsive" src="assests/img/13.jpg" alt="">
                                <div class="port_hover_div">
                                    <div class="port_hover_item text-center">
                                        <h3>Meal name</h3>
                                        <a href="assests/img/13.jpg" data-lightbox="imran" data-title="Meal description here">
                                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </a>
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio single item -->
                        <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12 brand singal_item nopading" style="position: absolute; left: 0px; top: 260px;">
                            <div class="singal-galary">
                                <img class="img-responsive" src="assests/img/6.jpg" alt="">
                                <div class="port_hover_div">
                                    <div class="port_hover_item text-center">
                                        <h3>Meal name</h3>
                                        <a href="assests/img/6.jpg" data-lightbox="imran" data-title="Meal description here">
                                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </a>
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio single item -->
                        <div class="col-md-4 col-sm-6 col-lg-4 col-xs-12 fs singal_item nopading" style="position: absolute; left: 390px; top: 260px;">
                            <div class="singal-galary">
                                <img class="img-responsive" src="assests/img/9.jpg" alt="">
                                <div class="port_hover_div">
                                    <div class="port_hover_item text-center">
                                        <h3>Meal name</h3>
                                        <a href="assests/img/9.jpg" data-lightbox="imran" data-title="Meal description here">
                                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </a>
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio single item -->
                        <div class="col-md-4 col-sm-6 col-lg-4 col-sm-6 col-xs-12 ill singal_item nopading" style="position: absolute; left: 780px; top: 260px;">
                            <div class="singal-galary">
                                <img class="img-responsive" src="assests/img/14.jpg" alt="">
                                <div class="port_hover_div">
                                    <div class="port_hover_item text-center">
                                        <h3>Meal name</h3>
                                        <a href="assests/img/14.jpg" data-lightbox="imran" data-title="Meal description here">
                                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </a>
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- start about percess -->
    <section id="about_us_about_percess">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about_us_about_percess_content text-center">
                        <h1><span>Explore Menu</span> We've got something for your tastebuds</h1>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <a href="contact.php">Request menu</a>
                        <a href="contact.php" class="sp">Place order</a>
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

</html>