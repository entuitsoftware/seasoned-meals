<!DOCTYPE html>
<html lang="en">
<?php 
$pageName="Blog";
$active="blog";
include_once('head.php')
?>

<body>
    <!-- start preload -->
   <div class="preloader">
       <div class="pre_item">
           <img class="img-responsive" src="assests/img/loader.gif" alt="">
       </div>
   </div>
    <?php include_once('navigation.php') ?>
    <!-- end main menu part -->
    <!-- start blog banar -->
    <section id="blog_banar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog_banar_table">
                        <div class="blog_banar_table_cell">
                            <div class="blog_banar_text">
                                <h1><span><?php echo($brand1) ?></span> <?php echo($brand2) ?></h1>
                                <p>Home / <span>blog</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog banar -->
    <!-- start main blog content -->
    <section id="blog_main_content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <div class="blog_main_left">
                        <div class="row">
                            <div class="col-sm-12">
                               <!-- news item -->
                                <div class="news_1">
                                    <div class="news_img">
                                        <img class="img-responsive" src="assests/img/blog-main/news-2.jpg" alt="">
                                        <div class="blog_main_date">
                                            <h1>jun</h1>
                                            <p>17</p>
                                        </div>
                                    </div>
                                    <div class="news_text">
                                        <h3>Happy Father's Day</h3>
                                        <p>Donec finibus sit amet orci eget ultricies. Praesent posuere ante ut erat fringilla, vestibulum placerat metus mattis. Aenean dictum vitae nisl nec tempor. Proin varius turpis ut sem porttitor varius. Sed aliquet libero ultrices consectetur. Vivamus egestas, metus quis egestas egestas tortor justo pharetra diam, et dapibus massa nibh dapibus</p>
                                    </div>
                                    <div class="news_info">
                                        <ul>
                                            <li><img class="img-responsive" src="assests/img/admin.jpg" alt=""> shisr imran</li>
                                            <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 300</li>
                                            <li><i class="fa fa-comment-o" aria-hidden="true"></i> 90</li>
                                        </ul>
                                    </div>
                                    <div class="news_btn">
                                        <a href="blog-details.html">read more</a>
                                    </div>
                                    <div class="news_social text-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter twiter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="blog_main_right">
                        <div class="news-search">
                            <form>
                                <input type="text" class="new_s" placeholder="Search....">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- <div class="news_categories">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Dapibus ac facilisis -- (20)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Morbi leo risus -- (70)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Porta ac consectetur -- (30)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Vestibulum at eros -- (19)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Best Theme On Envato -- (27)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Best WordPress Themes 2017 -- (70)</a></li>
                            </ul>
                        </div> -->
                        <div class="recent_news">
                           <h3>Recent Articles</h3>
                            <div class="recent_news_item">
                                <ul>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 26/05/2017</li>
                                </ul>
                                <h4>Happy father's day!</h4>
                                <p> </p>
                            </div>
                            <div class="recent_news_item">
                                <ul>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> 26/05/2017</li>
                                </ul>
                                <h4>Welcome</h4>
                                <p>... </p>
                            </div>
                         
                        </div>
                        <!-- <div class="news_galary">
                           <h3>Instagram Gallery</h3>
                            <div class="news_galary_item">
                                <img class="img-responsive" src="assests/img/news-galary/1.jpg" alt="">
                            </div>
                            <div class="news_galary_item">
                                <img class="img-responsive" src="assests/img/news-galary/2.jpg" alt="">
                            </div>
                            <div class="news_galary_item">
                                <img class="img-responsive" src="assests/img/news-galary/3.jpg" alt="">
                            </div>
                            <div class="news_galary_item">
                                <img class="img-responsive" src="assests/img/news-galary/4.jpg" alt="">
                            </div>
                            <div class="news_galary_item">
                                <img class="img-responsive" src="assests/img/news-galary/5.jpg" alt="">
                            </div>
                            <div class="news_galary_item">
                                <img class="img-responsive" src="assests/img/news-galary/6.jpg" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                        <!-- <div class="news_tags">
                            <h3>tags</h3>
                            <ul>
                                <li><a href="#">Hello</a></li>
                                <li><a href="#">Big deal</a></li>
                                <li><a href="#">cattle</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">news</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">chess</a></li>
                                <li><a href="#">Hello</a></li>
                                <li><a href="#">Big deal</a></li>
                                <li><a href="#">cattle</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end main blog content -->
    <?php include_once('footer.php') ?>
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

<!-- Mirrored from durkcoder.com/cattle-main/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Jun 2018 19:18:33 GMT -->
</html>