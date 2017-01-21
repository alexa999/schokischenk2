<?php session_start(); ?>
<?php if( !isset( $_SESSION["warenkorb"] )) {
  $_SESSION["warenkorb"] = array();
}
?>
<?php require( "datenbank.php" ); ?>
<?php
if( isset( $_GET[ "id" ] ) && !empty( $_GET[ "id" ] ) ) {
  $schokoID = $_GET[ "id" ];
}

if( isset( $_POST[ "Anzahl" ] ) && !empty( $_POST[ "Anzahl" ] )  ) {
  $gewuenschteAnzahl = $_POST[ "Anzahl" ];
  $idDesProduktes = $_POST[ "schokoID" ];
  $warenkorbArray = array( 'anzahl' => $gewuenschteAnzahl, 'id' => $idDesProduktes );
  array_push( $_SESSION["warenkorb"], $warenkorbArray );
  $successfull = 'Warenkorb wurde aktualisiert';
}
else {
  $successfull = '';
}
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Jan 11 2017 23:34:30 GMT+0000 (UTC)  -->
<html data-wf-page="5876adf568b63e6f12c3db07" data-wf-site="5870e9af48ff79596f35ed23">
<head>
  <meta charset="utf-8">
  <title>Schokolade</title>
  <meta content="Schokolade" property="og:title">
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
<body>
<?php include("menu.php"); ?>

  <?php
  $sql = "SELECT * FROM Gut WHERE produktID = " . $schokoID;

  $result = $conn->query( $sql );
  if( $result->num_rows <= 0 ) {
    echo '<h1 style="margin-top:25%">Ich habe das Produkt nicht gefunden</h2>';
  die;
  }
  else {
    $spezifischeSchokolade = $result->fetch_row();

   
  }

  ?>
  <div class="sectionchocolatesize sectionspecificchocolate">
    <div class="w-container">
      <h1 class="headingangebot"><?php echo $spezifischeSchokolade[3]; ?></h1>
      <h5 class="secondsectionheading5">Solange der Vorracht reicht.</h5>
      <div class="specificchocolaterow w-row">
        <div class="specificchocolateleftcolumn w-col w-col-6">
        <img sizes="(max-width: 479px) 96vw, (max-width: 618px) 97vw, (max-width: 767px) 600px, (max-width: 991px) 354px, 460px" src="images/<?php echo $spezifischeSchokolade[0] . '.jpg'; ?>" srcset="images/<?php echo $spezifischeSchokolade[0] . '.jpg'; ?>" 500w, images/<?php echo $spezifischeSchokolade[0] . '.jpg'; ?>" 600w">
        <?php if( $spezifischeSchokolade[8] <= 0 ) { ?>      

          <div class="w-row">
            <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6">
              <div class="verfgbarkeit"></div>
            </div>
            <div class="w-col w-col-9 w-col-small-6 w-col-tiny-6">
              <div class="hellp">zur Zeit nicht Verfügbar, bitte kommen Sie später vorbei</div>
            </div>
          </div>
          <?php }else { ?>

          <div class="w-row">
            <div class="w-col w-col-3 w-col-small-6 w-col-tiny-6">
              <div class="ja verfgbarkeit"></div>
            </div>
            <div class="w-col w-col-9 w-col-small-6 w-col-tiny-6">
              <div class="hellp"><?php echo $spezifischeSchokolade[8]; ?> Stück verfügbar</div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="specificchocolaterightcolumn w-col w-col-6">
          <div class="productinformation">
            <div class="chocolatesize chocolatesizespecific">Art: <?php echo $spezifischeSchokolade[1]; ?></div>
            <div class="chocolatesize">Grösse: <?php echo $spezifischeSchokolade[2]; ?></div>
            <h4 class="pricetag pricetagspecific"><?php echo $spezifischeSchokolade[4]; ?>€<br><em>inkl.Mwst.</em></h4>
            <div class="shippingtag">zzgl. Versand und Bezahlkosten</div>
          </div>
          <div class="w-form">
            <form action="schokolade.php<?php echo "?id=" . $spezifischeSchokolade[0]; ?>" class="formspecific" data-name="Email Form" data-redirect="#" id="email-form" method="post" name="email-form" redirect="#">
              <input class="textfieldcheckout w-input" data-name="Anzahl" id="Anzahl" maxlength="256" name="Anzahl" placeholder="Anzahl" required="required" type="text">
              <input type="hidden" id="schokoID" name="schokoID" value="<?php echo $spezifischeSchokolade[0]; ?>"> 
              <input class="w-button warenkorblegen" data-wait="Beispielsweise in dne Warenkorb gelegt" type="submit" value="in den Warenkorb">
            </form>
            <?php
            echo '<p style="text-align:center;">' . $successfull . '</p>';
            ?>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-footer warenkorbfooter">
    <div class="w-container">
      <div class="w-row">
        <div class="made-column w-col w-col-6 w-col-medium-6 w-col-small-6">
          <div class="made-text">Made in Digitale Ökönomie</div>
        </div>
        <div class="keda-logo-column w-col w-col-6 w-col-medium-6 w-col-small-6">
          <div class="copyright-text">© 2016 SCHOKISCHENK @ UNI WIEN</div>
        </div>
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