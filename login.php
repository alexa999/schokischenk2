<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Jan 21 2017 16:14:31 GMT+0000 (UTC)  -->
<html data-wf-page="58834e1598d7599026a717aa" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta content="Login" property="og:title">
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
  <h1 class="headerlogin">login</h1>
  <div class="w-form">
    <form class="w-clearfix" data-name="Email Form" id="email-form" name="email-form">
      <label class="logintext" for="email">Email Address:</label>
      <input class="loginfeld w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Enter your email address" required="required" type="email">
      <label class="logintext" for="name">Passwort:</label>
      <input class="loginfeld w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Enter your password" type="text">
      <input class="loginbutton2 w-button" data-wait="Please wait..." type = "submit" value="Login" href = "administration.php"><img class="imagelogin" src="images/Logo-Schokischenk-98x98.svg">
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

<?php 
# Neue Session
session_start(); 

# Verbindung zu Datenbank herstellen
$dbverbindung = require( "datenbank.php" ); 

# Login prüfen

## email von Login holen
## password von Login holen
if(isset($_GET["email"])&& !empty($_GET["email"]) && isset($_GET["name"])&& !empty($_GET["name"])) {
	$shopemail = $_GET["email"];
	$shoppassword = $_GET["name"];
	
	## Email und Passwort von Login mit Email und Password von Datenbank (Administrator) vergleichen

$sql = "SELECT Email FROM Administrator WHERE Email = '$shopemail' and Password = '$shoppassword'";
      $ergebnis = mysqli_query($dbverbindung,$sql);
      #$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      #$active = $row['active'];
      
      $anzahl = mysqli_num_rows($ergebnis);
      
      # Wenn beides übereinstimmt, ist die Anzahl der Reihen 1
		
      if($anzahl == 1) {
		 # Session zuordnen
         session_register("email");
         $_SESSION["email"] = $shopemail;
		 
		 # Auf Administrationsseite weiterleiten
		 
      }else {
         $fehler = "Unberechtigter Zugriff";
		 echo $fehler;
      }
}
?>