<?php require( 'datenbank.php' ); ?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 11 2017 23:34:30 GMT+0000 (UTC)  -->
<html>
<head>
  <meta charset="utf-8">
  <title>Schokischenk OnlineShop</title> 
  <meta content="Wir liefern die beste Schokolade im ganzen Universum" name="description"> 
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css"> 
  <link href="css/alexandras-fantabulous-site-1de408.webflow.css" rel="stylesheet" type="text/css">
  <script src="js/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Inconsolata:400,400italic,700,700italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
      }
    });
  </script>
  <script src="js/epe5bdv.js" type="text/javascript"></script>
  <script type="text/javascript">
    try{Typekit.load();}catch(e){}
  </script>
  <script src="js/modernizr.js" type="text/javascript"></script> 
</head>
<body>
  <div class="top-linking" id="top">
    <div class="header-sec">
      <div class="header-row w-row">
        <div class="column1 w-col w-col-10 w-col-small-small-stack">
          <div class="navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400">
            <div class="w-container">
              <a class="logo w-nav-brand" href="index.php"></a>
              <nav class="navmenumobile w-nav-menu" role="navigation"><a class="menuitem w-nav-link" href="index.php">Startseite</a>
                <div class="w-dropdown" data-delay="0" data-hover="1">
                  <div class="menuitem w-dropdown-toggle">
                    <div>schkoloadegrössen</div>
                    <div class="w-icon-dropdown-toggle"></div>
                  </div>
                  <nav class="dropdownlist w-dropdown-list"><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.php">klein</a><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.php">mittel</a><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.php">gross</a>
                  </nav>
                </div>
                <div class="w-dropdown" data-delay="0" data-hover="1">
                  <div class="menuitem w-dropdown-toggle">
                    <div>Schokoladearten</div>
                    <div class="w-icon-dropdown-toggle"></div>
                  </div>
                  <nav class="dropdownlist w-dropdown-list"><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.php">zartbitter</a><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.php">vollmilch</a><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.php">nougat</a>
                  </nav>
                </div>
                <a class="menuitem w-nav-link warenkorb" href="warenkorb.php"></a>
              </nav>
              <div class="menubutton w-nav-button">
                <div class="menuicon w-icon-nav-menu"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="column2 w-col w-col-2 w-col-small-small-stack">
          <a class="facebook header-link w-inline-block" href="http://twitter.com/schokischenk" target="_blank"><img class="social-img" height="20" src="images/twitter.png" width="20">
          </a>
          <a class="facebook header-link w-inline-block" href="http://instagram.com/schokischenk" target="_blank"><img class="social-img" height="20" src="images/instagram.png" width="20">
          </a>
          <a class="facebook header-link w-inline-block" href="http://facebook.com/schokischenk" target="_blank"><img class="social-img" height="20" src="images/facebook.png" width="20">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="featured w-slider" data-animation="fade" data-autoplay="1" data-delay="5000" data-duration="5000" data-infinite="1" data-ix="fetured-load">
    <div class="w-slider-mask">
      <div class="featured-slide1 w-slide"></div>
      <div class="featured-slide2 w-slide">
        <div class="w-row">
          <div class="w-col w-col-6"></div>
          <div class="w-col w-col-6"></div>
        </div>
      </div>
      <div class="featured-slide3 w-slide"></div>
      <div class="featured-slide4 w-slide"></div>
    </div>
  </div>
  <div class="text-container" data-ix="header-load">
    <h2 class="ueberschrift2">Wir liefern die<br> beste</h2>
    <h1 class="handpackedchocolate">handverpackte <br>schokolade</h1>
    <h3>aus dem ganzen universum</h3>
    <div class="scrolling">
      <a class="scrolldown w-inline-block" href="#secondsection"><img class="scroll-arrow" src="images/scroll_arrow2x.png" width="10">
        <div class="scroll-down-text">MEHR ERFAHREN</div><img class="scroll-arrow" src="images/scroll_arrow2x.png" width="10">
      </a>
    </div>
  </div>
  <div class="secondsection" id="secondsection">
    <div class="w-container">
      <h1>6 Angebote zum <br><br>verlieben</h1>
      <h5 class="secondsectionheading5">Solange der Vorracht reicht.</h5>

<?php

$sql = "SELECT * FROM Gut";
$result = $conn->query( $sql );

if( $result->num_rows <= 0 ) {
  echo "Ich habe keine Produkte gefunden";
}
else {
  $alleSchokoladen = $result->fetch_all();
  shuffle( $alleSchokoladen );
  $counter = 0;
  $counterMax = 6;
  foreach( $alleSchokoladen as $singleSchokolade ) {
    if( $counter >= $counterMax ) {
      break;
    }

    if( $counter % 3 == 0 ) {
      if( $counter >= 3 ) {
        $secondrow = 'secondrow ';
      }
      else {
        $secondrow = '';
      }
      echo '<div class="angeboterow ' .$secondrow . 'w-row">';
    }
    echo '<div class="columninsiderow w-col w-col-4">';
    echo '<div class="imagediv"><img src="images/' . $singleSchokolade[0] . '.jpg">';
    echo '<h4 class="nameofproduct">' . $singleSchokolade[3] . '</h4>';
    echo '<div class="productinformation">';
    echo '<div class="chocolatesize">Art: ' . $singleSchokolade[1] . '</div>';
    echo '<div class="chocolatesize">Grösse: ' . $singleSchokolade[2] . '</div>';
    echo '<h4 class="pricetag">' . $singleSchokolade[4] . '€<br><em>inkl.Mwst.</em></h4>';
    echo '<div class="shippingtag">zzgl. Versand und Bezahlkosten</div><a class="verfgbarkeitbtn w-button" href="schokolade.php?id=' . $singleSchokolade[0] . '">Jetzt Verfügbarkeit prüfen</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    if( $counter %3 == 2 ) {
      echo '</div>';
    }
    $counter++;
  }
}


?>
    </div>
  </div>
  <div class="section-footer warenkorbfooter">
    <div class="w-container">
      <div class="w-row">
        <div class="made-column w-col w-col-6 w-col-medium-6 w-col-small-6">
          <div class="made-text">Made in Digitale Ökönomie</div>
        </div>
        <div class="keda-logo-column w-col w-col-6 w-col-medium-6 w-col-small-6">
          <div class="copyright-text">© 2016 SCHOKISCHENK @ UNI WIEN</div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="http://psiupuxa.com/js/particles.js"></script>
  <script src="http://psiupuxa.com/js/app.js"></script>
</body>
</html>