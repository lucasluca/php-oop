<?php 
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function __construct() {

        }

        public function getDesafiado() {
            return $this->desafiado;
        }

        public function getDesafiante() {
            return $this->desafiante;
        }

        public function getRounds() {
            return $this->rounds;
        }

        public function getAprovada() {
            return $this->aprovada;
        }

        public function setDesafiado($d) {
            $this->desafiado = $d;
        }

        public function setDesafiante($d) {
            $this->desafiante = $d;
        }

        public function setRounds($r) {
            $this->rounds = $r;
        }

        public function setAprovada($a) {
            $this->aprovada = $a;
        }

        public function marcarLuta() {

        }

        public function Lutar() {

        }
    }