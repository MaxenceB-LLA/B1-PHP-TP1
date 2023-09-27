<?php

		define( "TARIF_ADULTE" , 18 );
		define( "TARIF_REDUIT" , 15 );
		define( "NB_GROUPE" , 7 );
		
		echo "Saisir le nombre d'adultes :\n" ;
		$NB_Adultes = fgets( STDIN ) ;
		
		$Coef = $NB_Adultes / NB_GROUPE ;
		$Coef = floor($Coef) ;
		
		$Reduit = NB_GROUPE * $Coef ;
		
		$Plein = $NB_Adultes - $Reduit ;
		
		$Resultat = $Reduit * TARIF_REDUIT + $Plein * TARIF_ADULTE ;
		
		echo "Le coût total est de :" , $Resultat , " €\n" ;
		
		
