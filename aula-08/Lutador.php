<?php
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }

        function getNome() {
            return $this->nome;
        }

        function getNacionalidade() {
            return $this->nacionalidade;
        }

        function getIdade() {
            return $this->idade;
        }

        function getAltura() {
            return $this->altura;
        }

        function getPeso() {
            return $this->peso;
        }

        function getCategoria() {
            return $this->categoria;
        }

        function getVitorias() {
            return $this->vitorias;
        }

        function getDerrotas() {
            return $this->derrotas;
        }

        function getEmpates() {
            return $this->empates;
        }

        function setNome($n) {
            $this->nome = $n;
        }

        function setNacionalidade($n) {
            $this->nacionalidade = $n;
        }

        function setIdade($i) {
            $this->idade = $i;
        }

        function setAltura($a) {
            $this->altura = $a;
        }

        function setPeso($p) {
            $this->peso = $p;
            $this->setCategoria();
        }

        private function setCategoria() {
            if($this->peso < 52.2) {
                $this->categoria = "Invalido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif($this->peso <= 83.9) {
                $this->categoria = "Médio";
            } elseif($this->peso<=120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Invalido";
            }

            
        }

        function setVitorias($v) {
            $this->vitorias = $v;
        }

        function setDerrotas($d) {
            $this->derrotas = $d;
        }

        function setEmpates($e) {
            $this->empates = $e;
        }

        public function apresentar() {
            echo "<p>Lutador: {$this->getNome()}</p>";
            echo "<p>Origem: {$this->getNacionalidade()}</p>";
            echo "<p>{$this->getIdade()}, anos</p>";
            echo "<p>{$this->getAltura()}, m de altura</p>";
            echo "<p>Pesando, {$this->getPeso()}, Kg da categoria {$this->getCategoria()}</p>";
            echo "<p>Ganhou: {$this->getVitorias()}</p>";
            echo "<p>Perdeu: {$this->getDerrotas()}</p>";
            echo "<p>Empatou: {$this->getEmpates()}</p>";
        }

        public function status() {
            echo "<p>{$this->getNome()}</p>";
            echo "<p>Pesando, {$this->getPeso()}, Kg</p>";
            echo "<p>Ganhou: {$this->getVitorias()}</p>";
            echo "<p>Perdeu: {$this->getDerrotas()}</p>";
            echo "<p>Empatou: {$this->getEmpates()}</p>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

    }