<?php require( 'datenbank.php' );
    session_start();
    ?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Sat Jan 21 2017 20:03:50 GMT+0000 (UTC)  -->
<html data-wf-page="58834d6ae299102d3a028542" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Kauf</title>
  <meta content="Kauf" property="og:title">
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
  <div class="featured-slide1">  <a class="logo w-nav-brand" href="index.php"></a>
    <h1>Kassa</h1>
  </div>
  <p data-ix="text1">Hier finden Sie nun Ihre finale Bestellung und können die Kaufmodalitäten auswählen.</p>
  <div class="kaufliste w-dyn-list">
    <div class="w-dyn-items">
      <div class="w-dyn-item"></div>
    </div>
    <div class="w-dyn-empty" id="WarenkorbListe">
<div>

<?php
    $sql='d';
    if (isset($_GET['email'])){
        
        // check if search view of list view
    $_GET['email'] = $_SESSION['email'];
            $sql = "SELECT * FROM Warenkorb WHERE Email = '" . $_GET['email'] . "'";
            $sql = "SELECT * FROM Warenkorb";
    
        // execute sql statement
    mysqli_query($conn,$sql);
    }
    ?>

<div id="table">
<table style='border: 1px solid #DDDDDD'>
<thead>
<tr>
<th>Produkt</th>
<th>Anzahl</th>
<th>Preis</th>

</tr>
</thead>
<tbody>

<?php
    // fetch rows of the executed sql query
    if ($result = mysqli_query($conn, $sql)) {
        
        /* fetch associative array */
    
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<tr>";
            echo "<td>" . $row['PRODUKTID'] . "</td>";
            echo "<td>" . $row['ANZAHL'] . "</td>";
            echo "<td>" . $row['PREIS'] . "</td>";
            echo "</tr>";
        }
        
        /* free result set */
        mysqli_free_result($result);
    }
  
    ?>

</tbody>
</table>
</div>
    
</div>
    </div>
  </div>
  <div class="w-row">
    <div class="w-col w-col-2"></div>
    <div class="w-col w-col-2"></div>
    <div class="w-col w-col-2"><a href="aufrechnungkauf.php">Auf Rechnung</a>
    </div>
    <div class="w-col w-col-2"><a href="kreditkartenkauf.php">Mit Kreditkarte</a>
    </div>
    <div class="w-col w-col-2">
      <div class="w-embed">


<form action="https://www.paypal.com/cgi-bin/webscr" style="text-align: right;" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VC4PVUFM8KDRJ">
<input type="image" src="https://www.paypalobjects.com/de_DE/AT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>

      </div>
      <div class="paypaltext">Mit PayPal</div>
    </div>
    <div class="w-col w-col-2"></div>
  </div>
  <p class="textback" data-ix="text1">Sollten Sie Änderungen vornehmen, so können Sie das im <a>Warenkorb</a> tun.</p>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="http://psiupuxa.com/js/particles.js"></script>
  <script src="http://psiupuxa.com/js/app.js"></script>
</body>
</html>
<?PHP
    mysqli_close($conn);
?>
