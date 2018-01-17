<?php
    require_once 'Aluno.php';
    
    class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa() {
            echo "<p>Bolsa Renovada</p>";
        }

        public function pagarMensalidade() {
            echo "<p>{$this->nome} é bolsista! Entao paga com desconto!</p>";
        }

        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($b) {
            $this->bolsa = $b;
        }
    }