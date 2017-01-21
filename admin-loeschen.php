<?php 
session_start(); 
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Jan 21 2017 16:14:31 GMT+0000 (UTC)  -->
<html data-wf-page="58834a5b87c44a831fc67877" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Admin-Löschen</title>
  <meta content="Admin-Löschen" property="og:title">
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
<body class="featured-slide1"><img src="images/Logo-Schokischenk-98x98.svg" width="78">
  <h1>produkt löschen</h1>
  <div class="w-form">
    <form data-name="Email Form" id="email-form" name="email-form">
      <label class="admintext" for="name">Produkt-ID</label>
      <input class="adminfeld w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Enter your name" type="text">
      <input class="adminbutton2 w-button" data-wait="Please wait..." type="submit" value="Suchen">
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
  </div><a class="adminbutton2 w-button" href="#">löschen</a>
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

# Ids vergleichen
if ($sql = "SELECT produktID FROM Gut WHERE produktID = '$shopid'") {
	$ergebnis = mysqli_query($dbverbindung,$sql);
	echo $ergebnis;
} else {
         $fehler = "Produkt-ID ist nicht vergeben. Bitte neue Produkt-ID eingeben.";
		 echo $fehler;
      }
?>