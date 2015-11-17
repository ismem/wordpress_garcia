<!DOCTYPE html>
<html id="home-version-1">
        <head>
                <title>WarTa - News/Magazine Template</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
                <!--Import Google font-->
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
                
                <!-- Stylesheets -->        
                <link href="<?php bloginfo("template_url") ?>/css/style.min.css" rel="stylesheet">
                <link href="<?php bloginfo("template_url") ?>/css/custom.css" rel="stylesheet">

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
                     ie8.css and ie8.js custom style  and script that needed for IE8. -->
                <!--[if lt IE 9]>
                        <link href="css/ie8.css" rel="stylesheet">        
                        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                        <script src="<?php bloginfo("template_url") ?>/js/ie8.js"></script>
                <![endif]-->
        </head>    
            
        <body>
                <!--HEADER
                ==========-->
                <header>
                        <!-- TOP NAVBAR
                        =============== -->
                        <nav class="navbar navbar-inverse" id="top-nav" role="navigation">
                                <div class="container">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav-collapse">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                </button>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="top-nav-collapse">
                                                <ul class="nav navbar-nav">
                                                        <li><a href="#">Home</a></li>
                                                        <li><a href="#">About</a></li>
                                                        <li><a href="#">Contact</a></li>
                                                </ul>

                                                <form class="navbar-form navbar-right" role="search">
                                                        <label class="sr-only" for="top_search_form">Search for</label>
                                                        <input id="top_search_form" type="search" placeholder="Search">
                                                        <button type="submit" >
                                                                <span class="fa fa-search"></span>
                                                                <span class="sr-only">Search/submit</span>
                                                        </button>
                                                </form>

                                                <ul class="nav navbar-nav navbar-right">
                                                        <li><a href="#" title="Facebook"><span class="sc-sm sc-dark sc-facebook"></span></a></li>
                                                        <li><a href="#" title="Twitter"><span class="sc-sm sc-dark sc-twitter"></span></a></li>
                                                        <li><a href="#" title="Google+"><span class="sc-sm sc-dark sc-googleplus"></span></a></li>
                                                        <li><a href="#" title="RSS"><span class="sc-sm sc-dark sc-rss"></span></a></li>
                                                </ul>
                                        </div>
                                </div>
                        </nav><!-- #top-nav -->

                        <!-- MAIN NAVBAR
                        ================ -->
                        <nav class="navbar navbar-default" id="main-nav" role="navigation">
                                <div class="container">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-collapse">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#"><img src="<?php bloginfo("template_url") ?>/img/logo.png" alt="logo"></a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="main-nav-collapse">
                                                <ul class="nav navbar-nav navbar-right">
                                                        <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="home-version-1.html">Home Vervion 1</a></li>
                                                                        <li><a href="home-version-2.html">Home Version 2</a></li>
                                                                        <li class="divider"></li>                                    
                                                                        <li><a href="home-version-1-rtl.html">Home Version 1 RTL</a></li>
                                                                        <li><a href="home-version-2-rtl.html">Home Version 2 RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="blog-version-1.html">Blog Version 1</a></li>
                                                                        <li><a href="blog-version-2.html">Blog Version 2</a></li>
                                                                        <li><a href="blog-version-3.html">Blog Version 3</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="blog-version-1-rtl.html">Blog Version 1 RTL</a></li>
                                                                        <li><a href="blog-version-2-rtl.html">Blog Version 2 RTL</a></li>
                                                                        <li><a href="blog-version-3-rtl.html">Blog Version 3 RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Detail <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                                                        <li><a href="review-bar.html">Review Bar</a></li>
                                                                        <li><a href="review-star.html">Review Star</a></li>
                                                                        <li><a href="review-bar-bottom.html">Review Bar Bottom</a></li>
                                                                        <li><a href="review-star-bottom.html">Review Star Bottom</a></li>
                                                                        <li><a href="gallery.html">Gallery</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="blog-detail-rtl.html">Blog Detail RTL</a></li>
                                                                        <li><a href="review-bar-rtl.html">Review Bar RTL</a></li>
                                                                        <li><a href="review-star-rtl.html">Review Star RTL</a></li>
                                                                        <li><a href="review-bar-bottom-rtl.html">Review Bar Bottom RTL</a></li>
                                                                        <li><a href="review-star-bottom-rtl.html">Review Star Bottom RTL</a></li>
                                                                        <li><a href="gallery-rtl.html">Gallery RTL</a></li>
                                                                </ul>
                                                        </li>         
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="contact.html">Contact</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="contact-rtl.html">Contact RTL</a></li>
                                                                </ul>
                                                        </li>
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">404 <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="404.html">404</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="404-rtl.html">404 RTL</a></li>
                                                                </ul>
                                                        </li>                           
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign Up <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="sign-up.html">Sign Up</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="sign-up-rtl.html">Sign Up RTL</a></li>
                                                                </ul>
                                                        </li>    
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="sign-in.html">Sign In</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="sign-in-rtl.html">Sign In RTL</a></li>
                                                                </ul>
                                                        </li>    
                                                        <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Elements <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                        <li><a href="elements.html">Elements</a></li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="elements-rtl.html">Elements RTL</a></li>
                                                                </ul>
                                                        </li>                
                                                </ul>
                                        </div>
                                </div>
                        </nav><!--#main-nav-->  
                        
                        <!-- FULL WIDTH CAROUSEL -->
                        <div id="carousel-large" class="carousel slide carousel-large no-mobile" data-ride="carousel">
                                <!-- Indicators-->
                                <ol class="carousel-indicators">
                                        <li data-target="#carousel-large" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-large" data-slide-to="1"></li>
                                        <li data-target="#carousel-large" data-slide-to="2"></li>
                                </ol>

                                <!-- Contents -->
                                <div class="carousel-inner">
                                        <div class="item active">
                                                <div data-alt   ="Mauris lacus nisl, suscipit ut orci ut, gravida dapibus neque Interdum et malesuada"
                                                     data-small ="http://placehold.it/768x384"
                                                     data-medium="http://placehold.it/1366x683"
                                                     data-large="http://placehold.it/1920x960">
                                                </div>
                                                <div class="carousel-caption">
                                                        <div><a href="#"><h1>Mauris lacus nisl, suscipit ut orci ut, gravida dapibus neque Interdum et malesuada</h1></a></div>
                                                        <div class="hidden-xs hidden-sm">
                                                                <p>
                                                                        Fames ac ante ipsum primis in faucibus. Aenean vulputate a nunc quis suscipit. Praesent non risus consequat,
                                                                        volutpat mi eu, porta nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                                        Pellentesque lacinia varius quam. Nullam aliquet ante ac nibh convallis. Sed pulvinar eu eros ut blandit..
                                                                </p>
                                                        </div>                             
                                                </div>
                                        </div>
                                        
                                        <div class="item">
                                                <div data-alt   ="Fames ac turpis egestas Curabitur scelerisque sagittis lectus ac consequat Mauris dictum sollicitudin tincidunt"
                                                     data-small ="http://placehold.it/768x384"
                                                     data-medium="http://placehold.it/1366x683"
                                                     data-large="http://placehold.it/1920x960">
                                                </div>
                                                <div class="carousel-caption">
                                                        <div><a href="#"><h1>Fames ac turpis egestas Curabitur scelerisque sagittis lectus ac consequat Mauris dictum sollicitudin tincidunt</h1></a></div>
                                                        <div class="hidden-xs hidden-sm">
                                                            <p>
                                                                        Nam sagittis neque et lectus varius imperdiet. Phasellus blandit viverra diam, et tincidunt arcu tempus ut.
                                                                        Nulla gravida erat nisi, sed laoreet nulla fringilla id. Maecenas tristique erat ullamcorper purus consequat egestas,
                                                                        eu feugiat ipsum eleifend vel eget auctor risus facilisis. Suspendisse ornare feugiat leo...
                                                            </p>
                                                        </div>                            
                                                </div>
                                        </div>
                                        
                                        <div class="item">
                                                <div data-alt   ="Vivamus libero purus placerat id varius ut facilisis ut odio consequat Mauris dictum sollicitudin tincidunt"
                                                     data-small ="http://placehold.it/768x384"
                                                     data-medium="http://placehold.it/1366x683"
                                                     data-large="http://placehold.it/1920x960">
                                                </div>
                                                <div class="carousel-caption">
                                                        <div><a href="#"><h1>Vivamus libero purus placerat id varius ut facilisis ut odio dictum sollicitudin tincidunt</h1></a></div>
                                                        <div class="hidden-xs hidden-sm">
                                                                <p>
                                                                        Vestibulum id urna at magna dignissim sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                                                                        Nam sagittis neque et lectus varius imperdiet. Phasellus blandit viverra diam, et tincidunt arcu tempus ut.
                                                                        Nulla gravida erat nisi, sed laoreet nulla fringilla id. Maecenas tristique erat ullamcorper purus consequat egestas...
                                                                </p>
                                                        </div>                            
                                                </div>
                                        </div>
                                </div>

                                <!-- Light -->
                                <div class="image-light"></div>

                                <!-- Controls
                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <a class="left carousel-control" href="#carousel-large" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
                                <a class="right carousel-control" href="#carousel-large" data-slide="next"><span class="fa fa-chevron-right"></span></a>
                        </div>
                </header>  