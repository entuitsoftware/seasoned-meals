  <header id="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="header_top_left">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span></span>Johannesburg, South Africa</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+27733390118" ><span>+27 73 339 0118</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="header_top_right text-right">
                        <ul>
                            <li><a href="https://facebook.com/seasonedmeals_"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/seasonedmeals_"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header top -->
    <!-- start main menu part -->
    <nav class="navbar navbar-default">
        <div class="container menu_container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img class="img-responsive" src="assests/img/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul id="menu" class="nav navbar-nav navbar-right">
                  <li <?php  if($active=='index'){echo('class="active"');}?> ><a href="/">Home</a></li>    
                  <li <?php  if($active=='about'){echo('class="active"');}?>><a href="about.php">About</a></li>
                  <li <?php  if($active=='services'){echo('class="active"');}?>><a href="services.php">Services</a></li>
                  <li <?php  if($active=='gallery'){echo('class="active"');}?>><a href="gallery.php">Gallery</a></li>
                  <li <?php  if($active=='blog'){echo('class="active"');}?>><a href="blog.php">blog</a></li>
                  <li <?php  if($active=='contact'){echo('class="active"');}?>><a href="contact.php">contact</a></li>  
              </ul>
            </div>
        </div>
    </nav>
    <!-- end main menu part -->