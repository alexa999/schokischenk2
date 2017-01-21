<?php 
session_start(); 
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Jan 21 2017 16:14:31 GMT+0000 (UTC)  -->
<html data-wf-page="58834054e299102d3a02838b" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Admin-Update</title>
  <meta content="Admin-Update" property="og:title">
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
<body class="featured-slide2"><img src="images/Logo-Schokischenk-98x98.svg" width="75">
  <h1>Bestehendes produkt<br><br> aktualisieren</h1>
  <div class="w-form">
    <form data-name="Email Form" id="email-form" name="email-form">
      <label class="admintext" for="name">Produkt-ID:</label>
      <input class="adminfeld w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Füge die Produkt-ID ein" type="text">
      <input class="adminbutton2 w-button" data-wait="Please wait..." type="submit" value="Anzeigen">
    </form>
    <div class="w-form-done">
      <div>Thank you! Your submission has been received!</div>
    </div>
    <div class="w-form-fail">
      <div>Oops! Something went wrong while submitting the form</div>
    </div>
  </div>
  <div class="w-dyn-list">
    <div class="w-dyn-items">
      <div class="w-dyn-item"></div>
    </div>
    <div class="w-dyn-empty">
      <div>No items found.</div>
    </div>
  </div>
  <div class="w-form">
    <form data-name="Email Form 2" id="email-form-2" method="post" name="email-form-2">
      <label class="admintext" for="field">Wähle eine Spalte aus:</label>
      <select produkt-id="integer" produktname="string" schokoladenart="string" class="adminfeld w-select" id="field" name="field">
        <option value="">Select one...</option>
        <option value="Produkt-ID">Produkt-ID</option>
        <option value="Produktname">Produktname</option>
        <option value="Schokoladenart">Schokoladenart</option>
        <option value="Schokoladengroesse">Schokoladengroesse</option>
        <option value="Preis">Preis</option>
        <option value="Verfuegbarkeit">Verfuegbarkeit</option>
        <option value="Another ChoiceverpackungHintergrundfarbe">Hintergrundfarbe</option>
        <option value="verpackungSticker">Sticker</option>
        <option value="verpackungText">Text</option>
      </select>
      <label class="admintext" for="field-2">Gebe Änderungen ein:</label>
      <input class="adminfeld w-input" id="field-2" maxlength="256" name="field-2" placeholder="Gebe Änderungen ein" required="required" type="text">
      <input class="adminbutton2 w-button" data-wait="Please wait..." type="submit" value="Aktualisieren">
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

## Id von Seite holen

if(isset($_GET["name"])) {
	$shopid = $_GET["name"];
} 

#IDs vergleichen
if ($sql = "SELECT produktID FROM Gut WHERE produktID = '$shopid'") {
	$ergebnis = mysqli_query($dbverbindung,$sql);
	echo $ergebnis;
} else {
         $fehler = "Produkt-ID ist nicht vergeben. Bitte neue Produkt-ID eingeben.";
		 echo $fehler;
      }

## Spalte von Seite holen
if(isset($_GET["field"])) {
	$shopspalte = $_GET["field"];
}

## Änderung von Seite holen
if(isset($_GET["field-2"])) {
	$shopaender = $_GET["field-2"];
}
	  
## Wenn auf Button geklickt wird (ERGAENZEN!!!!)	
 
$eintrag = "UPDATE Gut SET '$shopspalte' = '$shopaender' WHERE produktID = '$shopid'";
$eintragen = mysqli_query($dbverbindung, $eintrag);
?>