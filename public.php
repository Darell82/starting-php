<?php


class Personnage{// Commence par une Majuscule
        
        private $nom;//Propriété
        public $pv=100;
        public $atk=20;
        public $cri="fiojzedjeiozjp";

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function getNom(){
        return $this->nom;
        }
        public function regenere($pv=100){
            $this->pv += $pv;
        }
        

        public function attaque($perso){
            $this->crier();
            $perso ->pv -= $this->atk;
        }
        private function crier(){
            return $this->cri;
        }
    }

        $julien = new Personnage();
        $julien->setNom('julien');
        


        $Pierre = new Personnage();//Création d'un objet
        $Pierre->setNom('Pierre');
        $Pierre->pv=50;
        $Pierre->cri="Pierrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrreeeeeeeeee";


        $julien->attaque($Pierre);
        
        echo $Pierre->crier();


        $Pierre->regener(3);