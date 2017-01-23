<?php require( 'datenbank.php' );
    session_start();
    // zum testen: muss bitte rausgenommen werden!
    $_SESSION["email"] = "max@muster.at";
    ?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Jan 21 2017 20:03:50 GMT+0000 (UTC)  -->
<html data-wf-page="5883b5e77c801fc00ba76228" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>AufRechnungKauf</title>
  <meta content="AufRechnungKauf" property="og:title">
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
  <div class="featured-slide2"> <a class="logo w-nav-brand" href="index.php"></a>
    <div></div>
  </div>
  <h1>Kauf AUf rechnung</h1>
  <div>
    <p>Die Rechnung wird mit Ihrer Sendung geliefert und wir freuen uns über eine zeitgerechte Einzahlung des Gesamtbetrages in den zwei Woche nach Erhalt der Lieferung.</p>
  </div>
  <div class="divrechnung">
    <h3 class="admintext">Liefer- und Rechnungsadresse</h3>

<?php
    $mail = mysqli_real_escape_string($conn,$_SESSION["email"]);
    $sql = "SELECT * FROM Kunde WHERE (Email LIKE '". $mail. "')";
    $result = $conn->query( $sql );
    $kunde =  mysqli_fetch_array($result, MYSQL_ASSOC);
    
    echo '<div class="w-col w-col-8">';
    echo '<h4 class="vorname">Vorname:'. $kunde['Vorname'] . '</h4><br>';
    echo '<h4 class="nachname">Nachname: ' . $kunde['Nachname'] . '</h4><br>';
    echo '<h4 class="adresse">Adresse: ' . $kunde['Adresse'] . '</h4><br>';
    echo '<h4 class="telefonnummer">Telefonnummer: ' . $kunde['Telefonnummer'] . '</h4><br>';
    echo '<br>';
   echo '<a href="danke.php">Zahlungspflichtig bestellen</a>';
    echo '</div>';
    ?>

  </div>

  <div></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="http://psiupuxa.com/js/particles.js"></script>
  <script src="http://psiupuxa.com/js/app.js"></script>
</body>
</html>
