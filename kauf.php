<?php require( 'datenbank.php' );
    session_start();
    // zum testen: muss bitte rausgenommen werden!
  //  $_SESSION["email"] = "max@muster.at";
    ?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Jan 21 2017 20:03:50 GMT+0000 (UTC)  -->
<html data-wf-page="58834d6ae299102d3a028542" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Kauf</title>
  <meta content="Kauf" property="og:title">
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
<body class="bodykauf">
  <div class="featured-slide1">  <a class="logo w-nav-brand" href="index.php"></a>
    <h1>Kassa</h1>
  </div>
  <p data-ix="text1">Hier finden Sie nun Ihre finale Bestellung und können die Kaufmodalitäten auswählen.</p>

<div>

<?php
    if(isset ($_SESSION["email"]) && !empty ($_SESSION["email"]) ){
    
    if( isset( $_SESSION["warenkorb"]) && !empty( $_SESSION["warenkorb"] ) ) {
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
        echo '<div class="chocolatesize chocolatesizespecific">Art: ' . $schokolade[1] . '</div>';
        echo '<div class="chocolatesize">Grösse: ' . $schokolade[2] . '</div>';
        echo '</div>';
        echo '<div class="w-col w-col-2">';
        echo '<h4 class="menge">' . $anzahl . '<br>x</h4>';
        echo '<h4 class="pricetag pricetagwarenkorb">' . $schokolade[4] . '€</h4>';
        echo '</div>';
        echo '<div class="w-col w-col-1">';
        echo '</div>';
        echo '</div>';
        $counter++;
        
        $priceTotal += $anzahl * $schokolade[4];
    }
    }}
    else{
       echo '<p class="textback" data-ix="text1">ERROR!!!kauf.php</p>';

    }
    
    ?>
<div class="w-container">
<h1>Gesamt: <?php echo $priceTotal; ?>€</h1>
</div>
<br>
<br>
</div>
    </div>
  </div>
  <div class="w-row">
    <div class="w-col w-col-2"></div>
    <div class="w-col w-col-2"></div>
    <div class="w-col w-col-2"><a href="aufrechnungkauf.php" vlink="#ff0000">Auf Rechnung</a>
    </div>
    <div class="w-col w-col-2"><a href="kreditkartenkauf.php" vlink="#ff0000">Mit Kreditkarte</a>
    </div>
    <div class="w-col w-col-2">
      <div class="w-embed">


<form action="https://www.paypal.com/cgi-bin/webscr" style="text-align: right;" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VC4PVUFM8KDRJ">
<input type="image" src="https://www.paypalobjects.com/de_DE/AT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>

      </div>
    </div>
    <div class="w-col w-col-2"></div>
  </div>
  <p class="textback" data-ix="text1">Sollten Sie Änderungen vornehmen, so können Sie das im <a href="warenkorb.php">Warenkorb</a> tun.</p>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="http://psiupuxa.com/js/particles.js"></script>
  <script src="http://psiupuxa.com/js/app.js"></script>
</body>
</html>
<?PHP
    mysqli_close($conn);
?>
