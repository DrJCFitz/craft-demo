<?php
global $connection;
require_once('/var/www/includes/craftDemo.params'); // for $appID
require_once('/var/www/includes/craftDB.php'); // for $connection
require_once('/var/www/includes/getAppDetails.php'); // for getAppDetails() method

// get product detail and current reviews
$app = getAppDetails($appID, $connection);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Discovr Music - Your Connection to the World of Music</title>
    <meta name="title" content="Discovr Music - Your Connection to the World of Music">
    <meta name="description" content="music search, music sharing, music artist mapping">
    <meta name="keywords" content="music, social, media, youtube, itunes">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/craft-demo.css" />
  </head>
  <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/#/"><img src="assets/images/discovr_logo_sm.jpg"/>   
              Discovr</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li><a>Explore Music</a></li>
                <li><a href="/#/about">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

  <div id="topContent">
    <div id="howItWorks" class="carousel slide col-md-7" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
            <h1><strong>
                Search and Discover
                </strong>
            </h1>
            <div>
                <img src="assets/images/discovr_menu_phone.jpeg" class="carousel-image" alt="screenshot of menu overlay on mobile version of Discovr">
                <span class="carousel-description">
                    <ul>
                        <li>
                            <img src="assets/images/discovr_bullet.jpg" class="bullet-size">
                            <span>
                            Interactive Maps Allow You to Search For Your Favorite Artists and Discovr New Ones
                            </span>
                        </li>
                        <br/>
                        <li>
                            <img src="assets/images/discovr_bullet.jpg" class="bullet-size">
                            <span>
                            Our Database Covers Every Genre
                            </span>
                        </li>
                        <br/>
                        <li>
                            <img src="assets/images/discovr_bullet.jpg" class="bullet-size">
                            <span>
                            It's All Here! We Bring You All of the Artists, Music, YouTube videos, Bios, Tweets, and More!
                            </span>
                        </li>
                    </ul>
                </span>
            </div>
        </div>

        <div class="item">
            <h1><strong>
                Listen
                </strong>
            </h1>
                <div>
                <img src="assets/images/discovr_bio_phone.jpeg" class="carousel-image" alt="screenshot of artist biography page on mobile version of Discovr">
                <span class="carousel-description">
                    <ul>
                        <li>
                            <img src="assets/images/discovr_bullet.jpg" class="bullet-size">
                            <span>
                            Launch your favorite artists in Spotify and Rdio
                            </span>
                        </li>
                        <br/>
                        <li>
                            <img src="assets/images/discovr_bullet.jpg" class="bullet-size">
                            <span>
                            Buy singles and albums from the iTunes Store
                            </span>
                        </li>
                    </ul>
                </span>
            </div>
        </div>

        <div class="item">
            <h1><strong>
                Share
                </strong>
            </h1>
                <div>
                <img src="assets/images/discovr_map_phone.jpeg" class="carousel-image" alt="screenshot of artist circle map on mobile version of Discovr">
                <span class="carousel-description">
                    <ul>
                        <li>
                            <img src="assets/images/discovr_bullet.jpg" class="bullet-size">
                            <span>
                            Share your favorite music to Twitter, Facebook, via email and SMS
                            </span>
                        </li>
                        <br/>
                        <li>
                            <img src="assets/images/discovr_bullet.jpg" class="bullet-size">
                            <span>
                            Mark the music and artists you love as favorites for later listening 
                            </span>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#howItWorks" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#howItWorks" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#howItWorks" data-slide-to="0" class="active"></li>
        <li data-target="#howItWorks" data-slide-to="1"></li>
        <li data-target="#howItWorks" data-slide-to="2"></li>
      </ol>
    </div>
      
      <div class="col-md-5">
          <div id="blurb-container">
          <h1><strong>Disc<img src="assets/images/discovr_logo_sm.jpg" class="logo-inline-text">vr</strong></h1>
          <p class="blurb">the revolutionary way to connect to the music you love</p>
          <p class="blurb">and find your new favorite artists</p>
          <span>
              <div class="blurb-icon">
                  <i class="fa fa-search fa-3x theme-foreground"></i>
                  <p class="blurb theme-foreground">Search</p>
              </div>
              <div class="blurb-icon">
                  <i class="fa fa-headphones fa-3x theme-foreground"></i>
                  <p class="blurb theme-foreground">Listen</p>
              </div>
              <div class="blurb-icon">
                  <i class="fa fa-share-alt fa-3x theme-foreground"></i>
                  <p class="blurb theme-foreground">Share</p>
              </div>
          </span>
          <p class="blurb">It's your turn to enjoy the #1 Music App in the US, UK, Canada, Japan, Australia, and Europe</p>
          <p class="blurb">With more than 5 million downloads across the globe and iTunes integration, isn't it time to see what you have been missing?</p>
      </div>
      <div id="distributeContainer">
          <a href="https://itunes.apple.com/us/app/discovr-discover-world-new/id412768094">
              <button>Download Discovr Now</button>
          </a>
          <hr class="partial-width">
          <div class="partial-width">
              <h3>Not on your Mobile Device?</h3>
              <p>Send us phone number or email address below</p>
              <p>We will send you a link to download Discovr</p>
              <form id="sendDiscoverForm">
                  <label for="phone">Contact Number:</label><input name="phone">
                  <br/>
                  <label for="email">Email Address:</label><input name="email">
                  <br/>
                  <a id="submitContactForm">
                      <button>Submit</button>
                  </a>
              </form>
          </div>
      </div>
    </div>
  </div>
      
    <hr class="body-hr">
    <div class="featurette">
        <h2 class="featurette-heading">
            Featured In:
        </h2>
        <div class="featured-thumbnails">
            <img src="assets/images/wsj.jpeg" alt="Featured in The Wall Street Journal" class="featured">
            <img src="assets/images/gizmodo.jpeg" alt="Featured in Gizmodo" class="featured">
            <img src="assets/images/techcrunch.png" alt="Featured in TechCrunch" class="featured">
        </div>
        <div class="featured-thumbnails">
            <img src="assets/images/macworld.jpeg" alt="Featured in MacWorld" class="featured">
            <img src="assets/images/lifehacker.jpeg" alt="Featured in LifeHacker" class="featured">
            <img src="assets/images/wired.png" alt="Featured in Wired Magazine" class="featured">
        </div>
    </div>
<?php
    if ($reviews = $app->getReviews()) {
?>
    <hr class="body-hr">

    <div id="reviews">
        <h2 class="featurette-heading">
            Listeners Love Us!
        </h2>
        <span>Rated <?php echo $app->averageUserRating ?>/5<i class="fa fa-star fa-2x theme-foreground"></i> on iTunes on <?php echo $app->userRatingCount?> reviews!</span>
        <div id="showReviews" class="carousel" data-ride="carousel" data-interval="false">
            
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
<?php 
            for ($i=0; $i<8; $i++) {
?>
            <div class="item <?php echo ($i===0) ? 'active' : '' ?>">
                <div>
                    <h4>
                        <?php echo $reviews[$i]->author ?>, <emphasis>
                        Rating: <?php echo $reviews[$i]->rating?></emphasis>
                    </h4>
                    <h5><?php echo $reviews[$i]->title ?></h5>
                    <p class="review"><?php echo $reviews[$i]->content ?></p>
                </div>
            </div>
<?php
            } // end reviews for loop
?>
          </div>
            
          <a class="left carousel-control" href="#showReviews" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#showReviews" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
<?php
    } //endif reviews
?>
    <div class="footer">
      <div id="footer-social" class="container">
        <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x theme-background"></i>
            <i class="fa fa-facebook fa-stack-1x theme-foreground"></i>
      </span>
        <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x theme-background"></i>
          <i class="fa fa-twitter fa-stack-1x theme-foreground"></i>
        </span>
        <span class="fa-stack">
            <i class="fa fa-circle fa-stack-2x theme-background"></i>
          <i class="fa fa-youtube fa-stack-1x theme-foreground"></i>
        </span>
      </div>
      <hr class="partial-width">
      <div id="external-links" class="container">
<?php 
          $span_size = 4;
          if ($app->sellerUrl) {
              $span_size = 3;
?>
          <span class="col-xs-<?php echo $span_size?>">
            <a href="<?php echo $app->sellerUrl ?>">About</a>
          </span>
<?php 
          }
?>
          <span  class="col-xs-<?php echo $span_size?>">
            <a href="#">Press</a>
          </span>
          <span  class="col-xs-<?php echo $span_size?>">
            <a href="https://itunes.apple.com/us/app/discovr-discover-world-new/id412768094">Discovr on iTunes</a>
          </span>
          <span  class="col-xs-<?php echo $span_size?>">
            Check out other apps:
            <div>
                <div>
                <a href="https://itunes.apple.com/us/app/flipcase/id712929884">
                    <img id="flipcase_ref" src="assets/images/flipcase_logo_sm.jpg" alt="Flipcase app logo">
                    <label for="flipcase_ref">Flipcase</label>
                </a>
              </div>
                <div>
                <a href="https://itunes.apple.com/us/app/product-hunt-best-new-products/id904658671">
                    <img id="productHunt_ref" src="assets/images/productHunt_logo_sm.jpg" alt="Product Hunt app logo">
                    <label for="productHunt_ref">Product Hunt</label>
                </a>
                </div>
            </div>
          </span>
      </div>
    </div>
      
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
 </body>
</html>
