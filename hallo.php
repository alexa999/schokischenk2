<?php

$mani = array('hallo', "wie", "geht", "es", "dir");


foreach( $mani as $singlemani ) {
	echo $singlemani;
	break;
}

for( $i = 0; $i < count( $mani ) ; $i++ ) {
	echo $mani[$i];
} 

?>