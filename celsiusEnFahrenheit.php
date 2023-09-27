<?php
		
		echo "Saisir la température (en Celsius) :\n" ;
		$temp = fgets( STDIN ) ;
		
		$resultat = 1.8 * $temp + 32 ;
		
		echo "Resultat de la conversion : " , $resultat , " Fahrenheit.\n" ;
?>
