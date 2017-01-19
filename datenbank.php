<?php
$servername = "localhost";
$username = "root";
$password = "root";
$datenbank = "schokischenk";
$conn = mysqli_connect( $servername, $username, $password, $datenbank );

if( !$conn ) { 
	die( 'Konnte keine Verbindung aufbauen' . mysqli_connect_error() );
}

?>
