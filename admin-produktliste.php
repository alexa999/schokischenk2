<?php 
session_start(); 
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Jan 23 2017 13:44:50 GMT+0000 (UTC)  -->
<html data-wf-page="588338251ce0557f263341e6" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Admin-Produktliste</title>
  <meta content="Admin-Produktliste" property="og:title">
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
<body class="featured-slide2">
  <div>
    <div class="adminnavi w-nav" data-animation="default" data-collapse="medium" data-duration="400">
      <div class="adminheader w-container">
        <a class="w-nav-brand" href="#"><img src="images/Logo-Schokischenk-98x98.svg" width="101">
        </a>
        <nav class="adminmenue w-nav-menu" role="navigation"><a class="adminhome w-nav-link" href="administration.php" id="HomeButton">Home</a><a class="adminnaviliste w-nav-link" href="admin-produktliste.php" id="ProduktEinsehenButton">Produktliste einsehen</a><a class="adminnaviupdate w-nav-link" href="admin-update.php" id="ProduktUpdateButton">Produkt aktualisieren</a><a class="adminnavineu w-nav-link" href="admin-neuesprodukt.php" id="ProduktHinzufuegenButton">Produkt hinzufügen</a><a class="adminnaviloeschen w-nav-link" href="admin-loeschen.php" id="ProduktLoeschenButton">Produkt löschen</a><a class="logoutbutton w-button" href="index.php" id="LogoutButton">Logout</a>
        </nav>
      </div>
    </div>
  </div>
  <div>
    <h1>Produktliste einsehen</h1>
  </div>
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
 <?php
# Verbindung zu Datenbank herstellen
require( "datenbank.php" ); 

 ## Produktliste abfragen
$sql = "SELECT * FROM Gut";
$ergebnis = mysqli_query($conn,$sql);
$ergebnisreihen = mysqli_num_rows($ergebnis);

if($ergebnisreihen <= 0 ) {
 echo "Ich habe keine Produkte gefunden";
  }else {
		$alleSchokoladen = $ergebnis -> fetch_all();
		$counter = 0;
		# Je Produkt einen Eintrag in der Tabelle erstellen
		
		foreach($alleSchokoladen as $singleSchokolade) {

		echo "<tr>";
		echo '<td width="80" align="center">' . $singleSchokolade[0] . '</td>';
		echo '<td width="150" align="center">' . $singleSchokolade[1] . '</td>';
		echo '<td width="150" align="center">' . $singleSchokolade[2] . '</td>';
		echo '<td width="300" align="center">' . $singleSchokolade[3] . '</td>';
		echo '<td width="80" align="center">' . $singleSchokolade[4] . '</td>';
		echo '<td width="180" align="center">' . $singleSchokolade[5] . '</td>';
		echo '<td width="120" align="center">' . $singleSchokolade[6] . '</td>';
		echo '<td width="220" align="center">' . $singleSchokolade[7] . '</td>';
		echo '<td width="100" align="center">' . $singleSchokolade[8] . '</td>';
		echo '</tr>';
		}
  
		$counter++;
	}
?>
</tbody>
 </table>
 </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="http://psiupuxa.com/js/particles.js"></script>
  <script src="http://psiupuxa.com/js/app.js"></script>
</body>
</html>