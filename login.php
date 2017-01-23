<?php 
# Neue Session
session_start(); 

# Verbindung zu Datenbank herstellen
require( "datenbank.php" ); 

# Auslöser: Buttonklick
if(isset($_POST['loginbutton'])) {
	
	# Login prüfen
	## email von Login holen
	## password von Login holen
	if(!empty($_POST["email"]) && !empty($_POST["password"])) {
		$shopemail = $_POST["email"];
		$shoppassword = $_POST["password"];
        ## Email und Passwort von Login mit Email und Password von Datenbank (Administrator) vergleichen
        $ergebnisAdmin = "SELECT Email FROM Administrator WHERE "
            ." Email = '".mysqli_real_escape_string($conn, $shopemail)."' and "
            ."Password = '".mysqli_real_escape_string($conn, $shoppassword)."'";
		$query = mysqli_query($conn, $ergebnisAdmin);
		$anzahlAdmin = mysqli_num_rows($query);
		
		# Wenn Anzahl 1 ist, loggt sich ein Admin ein
		if($anzahlAdmin == 1) {
			$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
            $_SESSION["email"] = $shopemail;
            # Auf Administrationsseite weiterleiten
            header('Location: administration.php');
        } else {
            $sql = "SELECT Email FROM Kunde WHERE "
                ."Email = '".mysqli_real_escape_string($conn, $shopemail)."' and "
                ."Password = '".mysqli_real_escape_string($conn, $shoppassword)."'";
            $ergebnis = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC);
            $anzahl = mysqli_num_rows($ergebnis);
            # Wenn beides übereinstimmt, ist die Anzahl der Reihen 1
            if($anzahl == 1) {
                # Session zuordnen
                $_SESSION["email"] = $shopemail;
                # Auf Startseite weiterleiten
                header('Location: index.php');
            } else {
                echo  "Passwort und Email stimmen nicht überein! Überprüfen Sie Ihre Passworteingabe.";
            }
        }
    } 
}
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Jan 23 2017 13:44:50 GMT+0000 (UTC)  -->
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
  <div>
    <div class="header-sec">
      <div class="header-row w-row">
        <div class="column1 w-col w-col-10 w-col-small-small-stack">
          <div class="navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400">
            <div class="w-container">
              <a class="logo w-nav-brand" href="index.html"></a>
              <nav class="navmenumobile w-nav-menu" role="navigation"><a class="menuitem w-nav-link" href="index.html">Startseite</a>
                <div class="w-dropdown" data-delay="0" data-hover="1">
                  <div class="menuitem w-dropdown-toggle">
                    <div>schkoloadegrössen</div>
                    <div class="w-icon-dropdown-toggle"></div>
                  </div>
                  <nav class="dropdownlist w-dropdown-list"><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.html">klein</a><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.html">mittel</a><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.html">gross</a>
                  </nav>
                </div>
                <div class="w-dropdown" data-delay="0" data-hover="1">
                  <div class="menuitem w-dropdown-toggle">
                    <div>Schokoladearten</div>
                    <div class="w-icon-dropdown-toggle"></div>
                  </div>
                  <nav class="dropdownlist w-dropdown-list"><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.html">zartbitter</a><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.html">vollmilch</a><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.html">nougat</a>
                  </nav>
                </div>
                <a class="menuitem w-nav-link warenkorb" href="warenkorb.html"></a>
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
  </div>
  <h1 class="headerlogin">login</h1>
  <div class="w-form">
    <form class="w-clearfix" data-name="Email Form" id="email-form" name="email-form" method = "POST" action="login.php">
      <label class="logintext" for="email">Email Address:</label>
      <input class="loginfeld w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Enter your email address" required="required" type="email">
      <label class="logintext" for="password">Passwort:</label>
      <input class="loginfeld w-input" data-name="Name" id="password" maxlength="256" name="password" placeholder="Enter your password" type="text">
      <input class="loginbutton2 w-button" data-wait="Please wait..." id="loginbutton" type="submit" value="login" name="loginbutton">
    </form>
   
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="http://psiupuxa.com/js/particles.js"></script>
  <script src="http://psiupuxa.com/js/app.js"></script>
</body>
</html>