<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <title>hello world</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/berrygood.css" rel="stylesheet">

    <link rel="stylesheet" href="js/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="js/vendor/owl.theme.default.css">
    <link rel="stylesheet" href="js/vendor/jquery.mmenu.all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <script src="js/lib/isMobile.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    #slide-1 { background-image: url('images/cms/homepage-slide-1-mobile.png'); }
    #slide-2 { background-image: url('images/cms/homepage-slide-2-mobile.png'); }
    #slide-3 { background-image: url('images/cms/homepage-slide-3-mobile.png'); }

    @media (min-width: 768px){

        #slide-1 { background-image: url('images/cms/homepage-slide-1-desktop.png'); }
        #slide-2 { background-image: url('images/cms/homepage-slide-2-desktop.png'); }
        #slide-3 { background-image: url('images/cms/homepage-slide-3-desktop.png'); }
    }
    </style>
  </head>
  <body>
    <!--
    <?php foreach($list as $k=>$r): ?>
    <?php echo htmlspecialchars_decode($r['content']); ?>
    <?php endforeach; ?>
    -->
        <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="social-media">
                        <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="" target="_blank"><i class="fas fa-bicycle"></i></a></li>                     
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="main-navigation">
                        <a href="index.html" class="logo"><img src="images/logo-berrygood.png" alt="site logo - Love Fresh Berries" /></a>
                        <ul class="devices-wide">
                            <li><a href="about.html">About</a></li>                   
                            <li><a href="facts.html">Berry Facts</a></li>                   
                            <li><a href="growers.html">Berry Growers</a></li>                   
                            <li><a href="health.html">Health Facts</a></li>                   
                            <li><a href="recipes.html">Recipes</a></li>                   
                        </ul>
                        <ul class="devices-narrow">
                            <li><a href="#menu" class="mobile-navigation-trigger"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div id="hero-carousel" class="hero-carousel">
                    <div id="slide-1" class="slide active">&nbsp;</div>
                    <div id="slide-2" class="slide">&nbsp;</div>
                    <div id="slide-3" class="slide">&nbsp;</div>
                    <div class="dots">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><span class="active"></span></li>
                                        <li><span></span></li>
                                        <li><span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- main carousel -->
                    <div class="owl-carousel secondary-carousel">
                        <div class="slide"> 
                            <h2>What do you call a blueberry?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisrerit ehet. Donec vel tincibitur bibendum leo eget maximus rutrum.</p>
                            <button class="btn">Read more</button>    
                        </div>
                        <div class="slide"> 
                            <h2>Binging on Twin Peaks: The Return</h2>
                            <p>I think he is on the run, we hope to hear from him soom.</p>
                            <button class="btn">Read more</button>    
                        </div>
                        <div class="slide"> 
                            <h2>A Tomato is a fruit, did you know?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisrerit ex, ac finibdunt bitur bibendum leo eget maximus rutrum.</p>
                            <button class="btn">Read more</button>    
                        </div>
                        <div class="slide"> 
                            <h2>Playing music very loadly in the club.</h2>
                            <p>She may be on to something here, something very interesting I think.</p>
                            <button class="btn">Read more</button>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="pod">

                            <!-- growers carousel -->
                            <div class="owl-carousel tertiary-carousel grower-carousel">
                                <div class="slide"> 
                                    <a href="growers.html" style="background-image: url('images/cms/Marion-Regan.png');">
                                        <div class="title">
                                            <h3>Meet Our Growers</h3>
                                            <p>Text plus the name - Marion Regan</p>
                                        </div>
                                    </a>   
                                </div>
                                <div class="slide"> 
                                    <a href="growers.html" style="background-image: url('images/cms/Peter-Vinson.png');">
                                        <div class="title">
                                            <h3>Meet Our Growers</h3>
                                            <p>Copy plus his name - Peter Vinson</p>
                                        </div>
                                    </a>  
                                </div>
                                <div class="slide"> 
                                    <a href="growers.html" style="background-image: url('images/cms/Harry-Hall.png');">
                                        <div class="title">
                                            <h3>Meet Our Growers</h3>
                                            <p>This is Harry Hall, not Harry Hill</p>
                                        </div>
                                    </a>   
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pod">

                            <iframe class="iframe" src="twitter.html"></iframe>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pod">
                            <div class="recipes-four">
                                <a href="recipe.html?recipe=01" style="background-image: url('images/cms/blueberry_and_pecan_balls.jpg')">&nbsp;</a>
                                <a href="recipe.html?recipe=02" style="background-image: url('images/cms/scandinavian-blueberry-and-soured-cream-tart.jpg')">&nbsp;</a>
                                <a href="recipe.html?recipe=03" style="background-image: url('images/cms/blueberry_flapjacks.jpg')">&nbsp;</a>
                                <a href="recipe.html?recipe=04" style="background-image: url('images/cms/blueberry-and-banana-muffins.jpg')">&nbsp;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pod">

                            <!-- vertical scroller -->
                            <div class="v-scroll">
                                    <div class="title">
                                        <h4>Latest Recipes</h4>
                                    </div>
                                    <div class="v-container">
                                        <div class="v-content">
    
                                            <a href="recipe.html" class="article">
                                                <img src="images/cms/recipe-news-sample-2.png" alt="Blueberry and Banana Muffins" />
                                                <div class="title">
                                                    <h4>Blueberry and Banana Muffins</h4> 
                                                </div>
                                            </a>
    
                                            <a href="recipe.html" class="article">
                                                <img src="images/cms/recipe-news-sample.png" alt="Sweet Potato Soup with Blackberry" />
                                                <div class="title">
                                                    <h4>Sweet Potato Soup with Blackberry</h4> 
                                                </div>
                                            </a>
    
                                            <a href="recipe.html" class="article">
                                                <img src="images/cms/recipe-news-sample-3.png" alt="Sticky Blueberry and Banana Flapjack" />
                                                <div class="title">
                                                    <h4>Sticky Blueberry and Banana Flapjack</h4> 
                                                </div>
                                            </a>
    
                                            <a href="recipe.html" class="article">
                                                <img src="images/cms/recipe-news-sample-4.png" alt="Mapled Blueberry, Pecan Balls" />
                                                <div class="title">
                                                    <h4>Mapled Blueberry and Pecan Balls</h4> 
                                                </div>
                                            </a>
    
                                            <a href="recipe.html" class="article">
                                                <img src="images/cms/recipe-news-sample.png" alt="Don't stop me now" />
                                                <div class="title">
                                                    <h4>Blueberry and Banana Muffins Soup</h4> 
                                                </div>
                                            </a>

                                            <a href="recipe.html" class="article">
                                                <img src="images/cms/recipe-news-sample-2.png" alt="Don't stop me now" />
                                                <div class="title">
                                                    <h4>Blueberry and Banana Muffins</h4> 
                                                </div>
                                            </a>
    
                                            <a href="recipe.html" class="article">
                                                <img src="images/cms/recipe-news-sample-3.png" alt="Don't stop me now" />
                                                <div class="title">
                                                    <h4>Sticky Blueberry and Banana Flapjack</h4> 
                                                </div>
                                            </a>
    
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pod">

                            <!-- vertical scroller -->
                            <div class="v-scroll">
                                <div class="title">
                                    <h4>Latest News</h4>
                                </div>
                                <div class="v-container">
                                    <div class="v-content">

                                        <a href="news.html" class="article">
                                            <img src="images/cms/news-image-sample-4.png" alt="Don't stop me now" />
                                            <div class="title">
                                                <h4>Step Up Club's Productivity hacks</h4> 
                                            </div>
                                        </a>

                                        <a href="news.html" class="article">
                                            <img src="images/cms/news-image-sample-2.png" alt="Don't stop me now" />
                                            <div class="title">
                                                <h4>In my Greenhouse - Marion Regan</h4> 
                                            </div>
                                        </a>

                                        <a href="news.html" class="article">
                                            <img src="images/cms/news-image-sample.png" alt="Don't stop me now" />
                                            <div class="title">
                                                <h4>Peter Vinson picks a strawberry!</h4> 
                                            </div>
                                        </a>

                                        <a href="news.html" class="article">
                                            <img src="images/cms/news-image-sample-3.png" alt="Don't stop me now" />
                                            <div class="title">
                                                <h4>LEAF Marque launches back in 2003</h4> 
                                            </div>
                                        </a>

                                        <a href="news.html" class="article">
                                            <img src="images/cms/news-image-sample-2.png" alt="Don't stop me now" />
                                            <div class="title">
                                                <h4>Welcome to my Greenhouse</h4> 
                                            </div>
                                        </a>

                                        <a href="news.html" class="article">
                                            <img src="images/cms/news-image-sample.png" alt="Don't stop me now" />
                                            <div class="title">
                                                <h4>Peter Vinson picks a strawberry!</h4> 
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="pod">

                            <!-- random carousel -->
                            <div class="owl-carousel tertiary-carousel berries-carousel">
                                <div class="slide"> 
                                    <a href="growers.html" style="background-image: url('images/cms/close-up-blueberry.png');">
                                        <div class="title">
                                            <h2>Blueberries</h2>
                                            <p>Pibendum leo eget maximus ruttur bibendrum.</p>
                                        </div>
                                    </a>   
                                </div>
                                <div class="slide"> 
                                    <a href="growers.html" style="background-image: url('images/cms/close-up-raspberry.png');">
                                        <div class="title">
                                            <h2>Raspberries</h2>
                                            <p>Loet, consectetur adipisr erre it amit.</p>
                                        </div>
                                    </a>  
                                </div>
                                <div class="slide"> 
                                    <a href="growers.html" style="background-image: url('images/cms/close-up-strawberry.png');">
                                        <div class="title">
                                            <h2>Strawberries</h2>
                                            <p>Zeit amet, consectetur adip mulis.</p>
                                        </div>
                                    </a>   
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
        <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="privacy.html">Privacy</a></li>
                                <li><a href="tandcs.html">T&Cs</a></li>
                                <li><a href="cookies.html">Cookies</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                            </ul>
                            <p>The Red Brick Road<br />
                                50-54 Beak Street<br />
                                London. W1 FRN<br />
                                <a href="tel:08002205555" class="tel-link">0800&nbsp;000&nbsp;1121</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="skirt"></div>
        </div>
    </div>

    <nav id="menu" aria-hidden="true" class="display-none">
        <ul>
            <li><a href="index.html">Home</a></li>                   
            <li><a href="about.html">About</a></li>                   
            <li><a href="facts.html">Berry Facts</a></li>                   
            <li><a href="growers.html">Berry Growers</a></li>                   
            <li><a href="health.html">Health Facts</a></li>                   
            <li><a href="recipes.html">Recipes</a></li>                   
        </ul>
    </nav>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery.mmenu.min.all.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/berrygood.js"></script>
  </body>
</html>
