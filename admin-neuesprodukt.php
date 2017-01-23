<?php 
session_start(); 
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Jan 23 2017 13:44:50 GMT+0000 (UTC)  -->
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
<body class="featured-slide1">
  <div>
    <div class="adminnavi w-nav" data-animation="default" data-collapse="medium" data-duration="400">
      <div class="adminheader w-container">
        <a class="w-nav-brand" href="#"><img src="images/Logo-Schokischenk-98x98.svg">
        </a>
        <nav class="adminmenue w-nav-menu" role="navigation"><a class="adminhome w-nav-link" href="administration.php">Home</a><a class="adminnaviliste w-nav-link" href="admin-produktliste.php">Produktliste einsehen</a><a class="adminnaviupdate w-nav-link" href="admin-update.php">Produkt aktualisieren</a><a class="adminnavineu w-nav-link" href="admin-neuesprodukt.php">Produkt hinzufügen</a><a class="adminnaviloeschen w-nav-link" href="admin-loeschen.php">Produkt löschen</a><a class="logoutbutton w-button" href="#">Logout</a>
        </nav>
        <div class="w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>
  <h1>Neues produkt hinzufügen</h1>
  <div class="w-form">
    <form class="adminformcenter" data-name="Form" id="form" method="post" name="form">
      <label class="admintext" for="produktid"><span>Produkt-ID:</span>
      </label>
      <input class="adminfeld w-input" data-name="Name" id="produktid" maxlength="256" name="name" placeholder="Füge die Produkt-ID ein" type="text">
      <label class="admintext" for="produktname"><span>Produktname:</span>
      </label>
      <input class="adminfeld w-input" data-name="Name" id="produktname" maxlength="256" name="name" placeholder="Füge den Produktnamen ein" required="required" type="text">
      <label class="admintext" for="schokoladenart">Schokoladenart:</label>
      <input class="adminfeld w-input" id="schokoladenart" maxlength="256" name="field" placeholder="Füge die Schokoladenart ein" required="required" type="text">
      <label class="admintext" for="groesse">Schokoladengroesse:</label>
      <input class="adminfeld w-input" id="groesse" maxlength="256" name="field-2" placeholder="Füge die Schokoladengröße ein" required="required" type="text">
      <label class="admintext" for="farbe">Verpackung - Hintergrundfarbe:</label>
      <input class="adminfeld w-input" id="farbe" maxlength="256" name="field-3" placeholder="Füge die Hintergrundfarbe ein" required="required" type="text">
      <label class="admintext" for="sticker">Verpackung - Sticker:</label>
      <input class="adminfeld w-input" data-name="Field 7" id="sticker" maxlength="256" name="field-7" placeholder="Sticker?" required="required" type="text">
      <label class="admintext" for="text">Verpackung - Text:</label>
      <input class="adminfeld w-input" data-name="Field 6" id="text" maxlength="256" name="field-6" placeholder="Text?" required="required" type="text">
      <label class="admintext" for="preis">Preis:</label>
      <input class="adminfeld w-input" data-name="Field 5" id="preis" maxlength="256" name="field-5" placeholder="Füge den Preis ein" required="required" type="text">
      <label class="admintext" for="verfuegbarkeit">Verfügbarkeit:</label>
      <input class="adminfeld w-input" data-name="Field 4" id="verfuegbarkeit" maxlength="256" name="field-4" placeholder="Füge die Verfügbarkeit ein" required="required" type="text">
      <input class="adminbutton2 w-button" data-wait="Please wait..." id="hinzufuegenButton" type="submit" value="Produkt hinzufügen">
    </form>
    <div class="w-form-done">
      <div>Produkt wurde hinzugefügt!</div>
    </div>
    <div class="w-form-fail">
      <div>Oops! Bitte fehlende Informationen ergänzen!</div>
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
require( "datenbank.php" ); 

## Eingabe auf Vollständigkeit prüfen

if(isset($_POST["produktid"]) && isset($_POST["produktname"]) && isset($_POST["schokoladenart"]) && isset($_POST["groesse"]) && isset($_POST["farbe"]) && isset($_POST["sticker"]) && isset($_POST["text"]) && isset($_POST["preis"]) && isset($_POST["verfuegbarkeit"])) {
	$shopid = $_POST["produktid"];
	$shopname = $_POST["produktname"];
	$shopart = $_POST["schokoladenart"];
	$shopgroesse = $_POST["groesse"];
	$shopfarbe = $_POST["farbe"];
	$shoppreis = $_POST["preis"];
	$shopverf = $_POST["verfuegbarkeit"];
	$shopsticker = $_POST["sticker"];
	$shoptext = $_POST["text"];

	#$sql = "INSERT INTO Gut (produktID, schokoladenart, schokoladengroesse, produktname, Preis, verpackungsHintergrundfarbe, verpackungsSticker, verpackungsText, verfuegbarkeit) VALUES ('$shopid', '$shopart', '$shopgroesse', '$shopname', '$shoppreis', '$shopfarbe', '$shopsticker', '$shoptext', '$shopverf')";
	$sql = "INSERT INTO `Gut`(`produktID`, `schokoladenart`, `schokoladengroesse`, `produktname`, `Preis`, `verpackungsHintergrundfarbe`, `verpackungsSticker`, `verpackungsText`, `verfuegbarkeit`) VALUES ('$shopid', '$shopart', '$shopgroesse', '$shopname', '$shoppreis', '$shopfarbe', '$shopsticker', '$shoptext', '$shopverf')";
	$eintrag = mysqli_query($conn, $sql);
	
} else {
	$fehler = "Bitte fehlende Informationen ergänzen!";
	echo $fehler;
}
?>
