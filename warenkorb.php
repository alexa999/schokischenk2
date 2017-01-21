<?php require( "datenbank.php" );
session_start();
$aktualisiert = '';
if( isset( $_POST ) && !empty( $_POST ) ) {
   $formularSchokoID = $_POST["schokoID"];
   $formularAnzahl = $_POST["anzahl"];

  if( isset( $_SESSION["warenkorb"] ) && !empty( $_SESSION["warenkorb"] ) ) {
    foreach( $_SESSION["warenkorb"] as $einzelnesItem => $value ) {
      $warenkorbAnzahl = $value["anzahl"];
      $warenkorbSchokoID = $value["id"];
      if( $formularSchokoID == $warenkorbSchokoID ) {
        if( $formularAnzahl == $warenkorbAnzahl ) {
          unset( $_SESSION["warenkorb"][$einzelnesItem] );
          $aktualisiert = "Warenkorb wurde aktualisiert";
        }
      }
    }
  }
}
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 11 2017 23:34:30 GMT+0000 (UTC)  -->
<html data-wf-page="5876b56689370d8d1bdfacab" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Warenkorb</title>
  <meta content="Warenkorb" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/alexandras-fantabulous-site-1de408.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Inconsolata:400,400italic,700,700italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
      }
    });
  </script>
  <script src="https://use.typekit.net/epe5bdv.js" type="text/javascript"></script>
  <script type="text/javascript">
    try{Typekit.load();}catch(e){}
  </script>
  <script src="js/modernizr.js" type="text/javascript"></script>
  <link href="images/psiuico.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/psiusafari.png" rel="apple-touch-icon">
</head>
<body>
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
  <div class="sectionchocolatesize sectionspecificchocolate">
    <div class="w-container">
      <h1 class="headingangebot">Warenkorb</h1>
      <h5 class="secondsectionheading5">Lieber jetzt kaufen</h5>
      <p style="text-align:center;"><?php echo $aktualisiert; ?></p>
    </div>
  </div>

  <div class="warenkorbsection">
    <div class="w-container">

    <?php if( isset( $_SESSION["warenkorb"]) && !empty( $_SESSION["warenkorb"] ) ) {
      $priceTotal = 0;
      $anzahlArray = count( $_SESSION["warenkorb"] );
      $counter = 0;
      foreach( $_SESSION["warenkorb"] as $einzelnesItem ) {
        $schokoID = $einzelnesItem["id"];
        $anzahl = $einzelnesItem["anzahl"];
        $sql = "SELECT * FROM Gut WHERE produktID=" . $schokoID;
        $result = $conn->query( $sql );
        $schokolade = $result->fetch_row();
        if( $counter >= $anzahlArray ) {
          $lastrow = 'lastrow ';
        }
        else {
          $lastrow = '';
        }

        echo '<div class="' . $lastrow . 'w-row warenkorbrow">';
        echo '<div class="w-col w-col-4"><img class="warenkorbpic" sizes="(max-width: 767px) 54vw, (max-width: 991px) 128.421875px, 167.984375px" src="images/' . $schokolade[0] . '.jpg" srcset="images/' . $schokolade[0] . '.jpg 500w, images/' . $schokolade[0] . '.jpg 600w">
        </div>';
        echo '<div class="w-col w-col-5">';
        echo '<h4 class="nameofproduct">' . $schokolade[3] . '</h4>';
        echo '<div class="chocolatesize chocolatesizespecific">Art: ' . $schokoade[1] . '</div>';
        echo '<div class="chocolatesize">Grösse: ' . $schokolade[2] . '</div>';
        echo '</div>';
        echo '<div class="w-col w-col-2">';
        echo '<h4 class="menge">' . $anzahl . '<br>x</h4>';
        echo '<h4 class="pricetag pricetagwarenkorb">' . $schokolade[4] . '€</h4>';
        echo '</div>';
        echo '<div class="w-col w-col-1">
        <form action="warenkorb.php" method="POST" id="deleteitem">
        <input type="hidden" name="schokoID" value="' . $schokolade[0] .'">
        <input type="hidden" name="anzahl" value="' . $anzahl . '">
        <button type="submit" class="w-button warenkorbentfernen" href="#">entfernen</button>
        </form>';
        echo '</div>';
        echo '</div>';
        $counter++;
       
        $priceTotal += $anzahl * $schokolade[4];      
      }
    }

  ?>

    </div>
    <div class="w-container">
      <h1>Gesamt: <?php echo $priceTotal; ?>€</h1><a class="tokasse w-button" href="#">Zur Kasse</a>
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