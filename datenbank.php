<?php
/* Lokal
$servername = "localhost";
$username = "root";
$password = "root";
$datenbank = "schokischenk";
*/
$servername = "a0849065.mysql.univie.ac.at";
$username = "a0849065";
$password = "datenbank1";
$datenbank= "a0849065";
$conn = mysqli_connect( $servername, $username, $password, $datenbank );

if( !$conn ) { 
	die( 'Konnte keine Verbindung aufbauen' . mysqli_connect_error() );
}
?>
