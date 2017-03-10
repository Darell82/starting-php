<?php

	
	class Formulaire{

		public function debut($methode, $action){
			echo '<form method="'.$methode.'" action="'.$action.'" >';
		}
	}