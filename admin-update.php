<?php 
session_start(); 
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Jan 23 2017 13:44:50 GMT+0000 (UTC)  -->
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
<body class="featured-slide1">
  <div>
    <div class="adminnavi w-nav" data-animation="default" data-collapse="medium" data-duration="400">
      <a class="w-nav-brand" href="#"><img src="images/Logo-Schokischenk-98x98.svg">
      </a>
      <div class="adminheader w-container">
        <nav class="adminmenue w-nav-menu" role="navigation"><a class="adminhome w-nav-link" href="administration.php">Home</a><a class="adminnaviliste w-nav-link" href="admin-produktliste.php">Produktliste einsehen</a><a class="adminnaviupdate w-nav-link" href="admin-update.php">Produkt aktualisieren</a><a class="adminnavineu w-nav-link" href="admin-neuesprodukt.php">Produkt hinzufügen</a><a class="adminnaviloeschen w-nav-link" href="admin-loeschen.php">Produkt löschen</a><a class="logoutbutton w-button" href="index.php">Logout</a>
        </nav>
        <div class="w-nav-button">
          <div class="w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </div>
  <h1>Bestehendes produkt<br><br> aktualisieren</h1>
  <div class="w-form">
    <form data-name="Email Form" id="email-form" name="email-form" action="admin-update.php">
      <label class="admintext" for="produktid">Produkt-ID:</label>
      <input class="adminfeld w-input" data-name="Name" id="produktid" maxlength="256" name="produktid" placeholder="Füge die Produkt-ID ein" type="text">
      <input class="adminbutton3 w-button" data-wait="Please wait..." id="anzeigenButton" type="submit" value="Anzeigen" name="anzeigenButton">
    </form>
	<div id=table>
<table style='border: 5px solid #DDDDDD' bgcolor="white" align="center">
  <thead>
    <tr>
      <th align="center">ProduktID</th>
      <th align="center">Schokoladenart</th>
      <th align="center">Schokoladengroesse</th>
	  <th align="center">Produktname</th>
      <th align="center">Preis</th>
      <th align="center">Hintergrundfarbe</th>
	  <th align="center">Sticker</th>
	  <th align="center">Text</th>
	  <th align="center">Verfuegbarkeit</th>
    </tr>
  </thead>
  <tbody>
 <?
# Verbindung zu Datenbank herstellen
require( "datenbank.php" ); 

## Id von Seite holen

if(isset($_POST["produktid"]) && !empty($_POST["produktid"])) {
	$shopid = $_POST["produktid"];
	
	$sql = "SELECT * FROM Gut WHERE produktID = '".$shopid."'";
	$ergebnis = mysqli_query($conn,$sql);
	$ergebnisreihen = mysqli_num_rows($ergebnis);
 
	#IDs vergleichen
	if ($ergebnisreihen == 1) {
		
		$produkt = $ergebnis -> fetch_all();
		
		foreach($produkt as $produktanzeige) {
			echo "<tr>";
			echo '<td width="80" align="center">' . $produktanzeige[0] . '</td>';
			echo '<td width="150" align="center">' . $produktanzeige[1] . '</td>';
			echo '<td width="150" align="center">' . $produktanzeige[2] . '</td>';
			echo '<td width="300" align="center">' . $produktanzeige[3] . '</td>';
			echo '<td width="80" align="center">' . $produktanzeige[4] . '</td>';
			echo '<td width="180" align="center">' . $produktanzeige[5] . '</td>';
			echo '<td width="120" align="center">' . $produktanzeige[6] . '</td>';
			echo '<td width="220" align="center">' . $produktanzeige[7] . '</td>';
			echo '<td width="100" align="center">' . $produktanzeige[8] . '</td>';
			echo '</tr>';
		}
		
	} else {
         $fehler = "Produkt-ID ist nicht vergeben. Bitte neue Produkt-ID eingeben.";
		 echo $fehler;
      }	
}
?>
</tbody>
 </table>
 </div>
  
    <div class="w-form-done">
      <div>Thank you! Your submission has been received!</div>
    </div>
    <div class="w-form-fail">
      <div>Oops! Something went wrong while submitting the form</div>
    </div>
  </div>
  <div class="adminproduktfeld" id="ProduktFeld"></div>
  <div class="w-form">
    <form data-name="Email Form 2" id="email-form-2" method="post" name="email-form-2" action="admin-update.php">
      <label class="admintext" for="spalte">Wähle eine Spalte aus:</label>
      <select class="adminfeld w-select" id="spalte" name="spalte">
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
      <label class="admintext" for="aenderungen">Gebe Änderungen ein:</label>
      <input class="adminfeld w-input" id="aenderungen" maxlength="256" name="aenderungen" placeholder="Gebe Änderungen ein" required="required" type="text">
      <input class="adminbutton3 w-button" data-wait="Please wait..." id="aktualisierenButton" type="submit" value="Aktualisieren" name="aktualisierenButton">
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
## Spalte von Seite holen
if(isset($_POST["spalte"])) {
	$shopspalte = $_POST["spalte"];
}

## Änderung von Seite holen
if(isset($_POST["aenderungen"])) {
	$shopaender = $_POST["aenderungen"];
}
	  
## Wenn auf Button geklickt wird, Produkt updaten	
if(isset($_POST['aktualisierenButton'])){ 
	#$update = "UPDATE Gut SET '$shopspalte' = '$shopaender' WHERE produktID = '$shopid'";
	$update = "UPDATE Gut SET '".$shopspalte."' = '".$shopaender."' WHERE produktID = '".$shopid."'";
	$eintragen = mysqli_query($conn, $update);
}
?>