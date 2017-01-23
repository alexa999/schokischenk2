<?php require( 'datenbank.php' );
    session_start();
    // zum testen: muss bitte rausgenommen werden!
  $_SESSION["email"] = "lisa@muster.at";
    ?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Jan 21 2017 20:03:50 GMT+0000 (UTC)  -->
<html data-wf-page="5883b5da9307252622d5e30e" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>KreditkartenKauf</title>
  <meta content="KreditkartenKauf" property="og:title">
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
  <div class="featured-slide1"> <a class="logo w-nav-brand" href="index.php"></a>
    <h1>KAUF ÜBER<br><br>KREDITKARTE</h1>
  </div>
  <div>


<div>
<?php
    $mail = mysqli_real_escape_string($conn,$_SESSION["email"]);
    $sql = "SELECT * FROM Kunde WHERE (Email = '". $mail. "')";
    $result = $conn->query( $sql );
    $kunde =  mysqli_fetch_array($result, MYSQL_ASSOC);
    
      if(isset ($kunde['Kreditkartennummer']) && !empty ($kunde['Kreditkartennummer']) ){
    echo '<div class="w-col w-col-15"><br>';
    echo '<h3> Bitte bestätigen Sie die folgenden Informationen:</h3>';
    echo '<h4 class="vorname">Kreditkartennummer:'. $kunde['Kreditkartennummer'] . '</h4><br>';
    echo '<h4 class="nachname">Gültig bis: ' . $kunde['Gueltig'] . '</h4><br>';
    echo '<h4 class="adresse">CVC: ' . $kunde['CVC'] . '</h4><br>';
       echo '<br>';
    echo '<a href="danke.php">Zahlungspflichtig bestellen</a>';
    echo '</div><br>';
    }
    
    else{
    echo '<div class="w-form">';
    echo '<form data-name="Email Form" id="email-form" name="email-form" method="post" >';
        echo '<label class="field-label" for="Kreditkartennummer">Kreditkartennummer:</label>';
            echo '<input class="w-input" data-name="Kreditkartennummer1" id="Kreditkartennummer1" maxlength="16" name="Kreditkartennummer1" placeholder="Geben Sie hier Ihre Kreditkartennummer ein" type="integer">';
            echo '<label class="field-label" for="Gueltig">Gültig bis:</label>';
                echo '<input class="w-input" data-name="Gueltigb1" id="Gueltigb1" maxlength="5" name="Gueltigb1" placeholder="MM/YY" required="required" type="text">';
                echo '<label class="field-label" for="CVC">CVC:</label>';
                    echo '<input class="w-input" data-name="CVC1" id="CVC1" maxlength="3" name="CVC1" placeholder="CVC" required="required" type="integer">';
                    echo'<input class="w-button" data-wait="Please wait..." type="submit" name ="submit" value="Submit">';
       echo '</div>';
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $Kreditkartennummer1 =  $_REQUEST['Kreditkartennummer1'];
            $Gueltigb1 = $_REQUEST['Gueltigb1'];
            $CVC1 = $_REQUEST['CVC1'];
            
            $sql="UPDATE Kunde SET Kreditkartennummer='".$Kreditkartennummer1."',Gueltig='".$Gueltigb1."',CVC='".$CVC1."' WHERE Email = '". $mail. "'";
            $retval = mysqli_query( $sql, $conn );
            echo mysql_error();
            echo 'nummer1:' .$Kreditkartennummer2 ;
       }
        
        
     //  $Kreditkartennummer2 =  (isset($_GET['Kreditkartennummer1']) ? $_GET['Kreditkartennummer1'] : null);
    //    $Gueltig2=  (isset($_GET['Gueltig1']) ? $_GET['Gueltig1'] : null);
      //  $CVC2=  (isset($_GET['CVC1']) ? $_GET['CVC1'] : null);
    
        //$insert = mysql_query("INSERT INTO Kunde (Kreditkartennummer, Gueltig, CVC) VALUES (' ".$Kreditkartennummer1."', '".$Gueltig1."', '".$CVC1."')");
      /*  try {
            //"INSERT INTO (`Kreditkartennummer`, `Gueltig`, `CVC`) VALUES (['$Kreditkartennummer2'],['$Gueltig2'],['$CVC2'])";

                    }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }*/
          }
    
    ?>

</div><br>
<br>
<br>

<?php
    $sql = "SELECT * FROM Kunde WHERE (Email = '". $mail. "')";
    $result = $conn->query( $sql );
    $kunde =  mysqli_fetch_array($result, MYSQL_ASSOC);
echo 'nummer2:' .$kunde['Kreditkartennummer'];
    ?>

</form>
<div class="w-form-done">
<div>Thank you! Your submission has been received!</div>
</div>


<div class="w-form-fail">
<div>Oops! Something went wrong while submitting the form</div>
</div>
</div>
</div>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="http://psiupuxa.com/js/particles.js"></script>
  <script src="http://psiupuxa.com/js/app.js"></script>
</body>
</html>
