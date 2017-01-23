<?php
    require( 'datenbank.php' );
    
    session_start();
    ?>


<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Jan 23 2017 13:44:50 GMT+0000 (UTC)  -->
<html data-wf-page="58834e3f98d7599026a717b0" data-wf-site="5870e9af48ff79596f35ed23">
<head>
<meta charset="utf-8">
<title>Registrierung</title>
<meta content="Registrierung" property="og:title">
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
/<div class="header-sec">
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
<nav class="dropdownlist w-dropdown-list"><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.php">klein</a><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.php">mittel</a><a class="dropdownmenulink w-dropdown-link" href="schokoladengroen.php">gross</a>
</nav>
</div>
<div class="w-dropdown" data-delay="0" data-hover="1">
<div class="menuitem w-dropdown-toggle">
<div>Schokoladearten</div>
<div class="w-icon-dropdown-toggle"></div>
</div>
<nav class="dropdownlist w-dropdown-list"><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.php">zartbitter</a><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.php">vollmilch</a><a class="dropdownmenulink w-dropdown-link" href="schokoladenarten.php">nougat</a>
</nav>
</div>
<a class="menuitem w-nav-link warenkorb" href="warenkorb.php"></a>
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
</div>*/
<h1 class="headerlogin">Registrierung</h1>
<div class="w-form">
<form class="w-clearfix" data-name="Email Form" id="email-form" method="post" name="email-form" action="registrierung.php">
<label class="logintext" for="businessauswahl">Businesskunde?</label>
<select class="loginfeld w-select" id="businessauswahl" name="field">
<option value="">Select one...</option>
<option value="TRUE">Ja</option>
<option value="FALSE">Nein</option>
</select>
<label class="logintext" for="anrede">Anrede:</label>
<select class="loginfeld w-select" id="anrede" name="field-2">
<option value="">Select one...</option>
<option value="Frau">Frau</option>
<option value="Herr">Herr</option>
</select>
<label class="logintext" for="vorname">Vorname:</label>
<input class="loginfeld w-input" data-name="Name" id="vorname" maxlength="256" name="Name" placeholder="z. B. Maxl" type="text">
<label class="logintext" for="nachname">Nachname:</label>
<input class="loginfeld w-input" data-name="Name2" id="nachname" maxlength="256" name="name-2" placeholder="z. B. Liebtschoki" type="text">
<label class="logintext" for="strasse">Straße &amp; Hausnummer:</label>
<input class="loginfeld w-input" data-name="Name 4" id="strasse" maxlength="256" name="name-4" placeholder="z. B. Währinger Str. 29" type="text">
<label class="logintext" for="stadt">PLZ &amp; Stadt:</label>
<input class="loginfeld w-input" data-name="Name 3" id="stadt" maxlength="256" name="name-3" placeholder="z.B. 1060 Wien" type="text">
<label class="logintext" for="tag">Geburtsdatum:</label>
<div class="registerspalten w-row">
<div class="w-col w-col-3"></div>
<div class="w-col w-col-2"></div>
<div class="w-col w-col-1">
<select class="gebtage w-select" id="tag" name="field-3">
<option value="">Select one...</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</div>
<div class="w-col w-col-1">
<select class="gebmonate w-select" data-name="Field 4" id="monat" name="field-4">
<option value="">Select one...</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>
<div class="w-col w-col-1">
<select class="gebjahre w-select" data-name="Field 5" id="jahr" name="field-5">
<option value="">Select one...</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
</select>
</div>
<div class="w-col w-col-4"></div>
</div>
<label class="logintext" for="email">Email Address:</label>
<input class="loginfeld w-input" data-name="Email" id="email" maxlength="256" name="email" placeholder="Enter your email address" required="required" type="email">
<label class="logintext" for="password">Passwort:</label>
<input class="loginfeld w-input" data-name="passwort" id="passwort" maxlength="256" name="passwort" placeholder="Enter your password" required="required" type="password" >

<input class="registerbutton w-button" data-wait="Please wait..." id="registerButton" type="submit" value="Registrieren">
</form>
<?php
    var_dump($_POST);
    if (isset ($_POST["submit"])){
        $anrede =  $_POST['field-2'];
        $vorname =  $_POST['Name'];
        $nachname =  $_POST['name-2'];
        $strasse =  $_POST['name-4'];
        $ort =  $_POST['name-3'];
        $email = $_POST['email'];
         $passwort = $_POST['passwort'];
        $birthDate = mktime(0, 0, 0, $_POST['field-4'], $_POST['field-3'], $_POST['field-5']);
            // Fuer SQL: FROM_UNIXTIME(".$birthDate.")
       // $birth= FROM_UNIXTIME(". $birthDate.");
    
      //  echo '"'. $nachname .'"';

        $_SESSION["email"] = $email;
      //  var_dump($_POST);
        
        $sql="INSERT INTO Kunde(Vorname, Nachname, Geburtstag, Email, Anrede, Password, Kreditkartennummer, Gueltig, CVC) VALUES ([".$vorname."],[".$nachname."],[FROM_UNIXTIME(".$birthDate.")],[".$email."],[".$anrede."],[".$password."])";
        $retval = mysqli_query( $conn, $sql );
        echo mysqli_error();
    }
    else{
        echo 'failure';
    }
    ?>

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
