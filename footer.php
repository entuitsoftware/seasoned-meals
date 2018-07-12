<?php include_once('config.php') ?>
<footer id="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12 ">
                    <div class="footer_item">
                        <div class="footer_about">
                            <div class="footer_logo">
                                <h1><?php echo($brand1) ?></h1>
                                <h3><?php echo($brand2) ?></h3>
                            </div>
                            <div class="about_text">
                                <p>Your first steps into affordable homemade meals solutions,
                                     to keep your taste buds happy without any of that guilt! </p>
                            </div>
                            <div class="about_social">
                                <ul>
                                   
                                    <li><a href="<?php echo($facebookUrl) ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo($twitterUrl) ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer_item">
                        <div class="contact_info">
                            <div class="footer_title">
                                <h3>contact info</h3>
                            </div>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><?php echo($address1.', '.$address2.', '.$address3) ?></li>
                                <li><i class="fa fa-phone"></i> <?php echo($contactNumber) ?></li>
                                <li><i class="fa fa-envelope"></i> <?php echo($email) ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </footer>
    <!-- end footer part -->
    <!-- start footer bottom -->
    <footer id="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footter_bottom_content text-center">
                        <p>&copy;&nbsp;<?php echo $copyright ?> | Developed By  <a href="http://entuit.co.za" target="_blank"><span>Entuit Software</span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- start scroll top -->
        <span id="scroll_top">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </span>
        <!-- end scroll top -->
    </footer>