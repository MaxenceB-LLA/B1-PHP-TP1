<?php
		
		define( "TARIF_ADULTES" , 17 );
		
		echo "Saisir le nombre d'adultes :\n" ;
		$NB_Adultes = fgets( STDIN ) ;
		
		$resultat = TARIF_ADULTES * $NB_Adultes ;
		
		echo "Le coût total est de: " , $resultat , " €\n" ;
?>

