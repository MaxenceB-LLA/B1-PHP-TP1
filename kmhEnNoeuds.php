<?php
		
		define( "CONV_KM_ND" , 1.852 );
		
		echo "Saisir la vitesse (en Km/h) :\n" ;
		$vitesse = fgets( STDIN ) ;
		
		$resultat = $vitesse / 1.852 ;
		
		echo "Resultat de la conversion : " , $resultat , " noeuds\n" ;
?>
