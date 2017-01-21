<?php 
session_start(); 
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Jan 21 2017 16:14:31 GMT+0000 (UTC)  -->
<html data-wf-page="58833af779448ad50b084c2b" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Admin-NeuesProdukt</title>
  <meta content="Admin-NeuesProdukt" property="og:title">
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
<body class="featured-slide1"><img src="images/Logo-Schokischenk-98x98.svg" width="76">
  <h1>Neues produkt hinzufügen</h1>
  <div class="w-form">
    <form data-name="Email Form" id="email-form" method="post" name="email-form">
      <label class="admintext" for="name"><span>Produkt-ID:</span>
      </label>
      <input class="adminfeld w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Füge die Produkt-ID ein" type="text">
      <label class="admintext" for="email"><span>Produktname:</span>
      </label>
      <input class="adminfeld w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Füge den Produktnamen ein" required="required" type="text">
      <label class="admintext" for="email">Schokoladenart:</label>
      <input class="adminfeld w-input" id="field" maxlength="256" name="field" placeholder="Füge die Schokoladenart ein" required="required" type="text">
      <label class="admintext" for="field-2">Schokoladengroesse:</label>
      <input class="adminfeld w-input" id="field-2" maxlength="256" name="field-2" placeholder="Füge die Schokoladengröße ein" required="required" type="text">
      <label class="admintext" for="field-3">Verpackung - Hintergrundfarbe:</label>
      <input class="adminfeld w-input" id="field-3" maxlength="256" name="field-3" placeholder="Füge die Hintergrundfarbe ein" required="required" type="text">
      <label class="admintext" for="field-3">Verpackung - Sticker:</label>
      <input class="adminfeld w-input" data-name="Field 7" id="field-7" maxlength="256" name="field-7" placeholder="Sticker?" required="required" type="text">
      <label class="admintext" for="field-6">Verpackung - Text:</label>
      <input class="adminfeld w-input" data-name="Field 6" id="field-6" maxlength="256" name="field-6" placeholder="Text?" required="required" type="text">
      <label class="admintext" for="field-5">Preis:</label>
      <input class="adminfeld w-input" data-name="Field 5" id="field-5" maxlength="256" name="field-5" placeholder="Füge den Preis ein" required="required" type="text">
      <label class="admintext" for="field-4">Verfügbarkeit:</label>
      <input class="adminfeld w-input" data-name="Field 4" id="field-4" maxlength="256" name="field-4" placeholder="Füge die Verfügbarkeit ein" required="required" type="text">
      <input class="adminbutton2 w-button" data-wait="Please wait..." type="submit" value="Produkt hinzufügen">
    </form>
    <div class="w-form-done">
      <div>Thank you! Your submission has been received!</div>
    </div>
    <div class="w-form-fail">
      <div>Oops! Something went wrong while submitting the form</div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="http://psiupuxa.com/js/particles.js"></script>
  <script src="http://psiupuxa.com/js/app.js"></script>
</body>
</html>

<?
# Verbindung zu Datenbank herstellen
$dbverbindung = require( "datenbank.php" ); 

## Eingabe auf Vollständigkeit prüfen

if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["field"]) && isset($_GET["field-2"]) && isset($_GET["field-3"]) && isset($_GET["field-5"]) && isset($_GET["field-4"]) && isset($_GET["field-7"]) && isset($_GET["field-6"])) {
	$shopid = $_GET["name"];
	$shopname = $_GET["email"];
	$shopart = $_GET["field"];
	$shopgroesse = $_GET["field-2"];
	$shopfarbe = $_GET["field-3"];
	$shoppreis = $_GET["field-5"];
	$shopverf = $_GET["field-4"];
	$shopsticker = $_GET["field-7"];
	$shoptext = $_GET["field-6"];

	$eintrag = "INSERT INTO Gut (produktID, schokoladenart, schokoladengroesse, produktname, Preis, verpackungsHintergrundfarbe, verpackungsSticker, verpackungsText, verfuegbarkeit) VALUES ('$shopid', '$shopart', '$shopgroesse', '$shopname', '$shoppreis', '$shopfarbe', '$shopsticker', '$shoptext', '$shopverf')";
	$eintragen = mysqli_query($dbverbindung, $eintrag);
} else {
	$fehler = "Bitte fehlende Informationen ergänzen!";
	echo $fehler;
}
?>
