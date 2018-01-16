<?php 
    require_once 'Lutador.php';

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

        public function marcarLuta($l1, $l2) {
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
                echo "<p>Luta marcada</p>";
            }else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function Lutar() {
            if($this->aprovada) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                
                switch($vencedor) {
                    case 0: //Empate
                        echo "<p>Empate! </p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    
                    case 1: //Desafiado vence
                        echo "<p>{$this->desafiado->getNome()} venceu a luta! </p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;

                    case 2: //Desafiante Vence
                        echo "<p>{$this->desafiado->getNome()} venceu a luta! </p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                }
            }else {
                echo "<p>A Luta não pode acontecer</p>";
            }
        }
    }