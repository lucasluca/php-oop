<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($t, $a, $tot, $l){
            $this->titulo = $t;
            $this->autor = $a;
            $this->totPaginas = $tot;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $l;
        }

        public function detalhes() {
            echo "<p>Livro {$this->titulo} escrito por {$this->autor}</p>";
            echo "<p>Paginas: {$this->totPaginas} pagina atual {$this->pagAtual}</p>";
            echo "<p>Sendo lido por {$this->leitor->getNome()}</p>";
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getTotPaginas(){
            return $this->totPaginas;
        }

        public function getPagAtual(){
            return $this->pagAtual;
        }

        public function getAberto(){
            return $this->aberto;
        }

        public function getLeitor(){
            return $this->leitor;
        }

        public function setTitulo($t) {
            $this->titulo = $t;
        }

        public function setAutor($a) {
            $this->autor = $a;
        }

        public function setTotPaginas($t) {
            $this->totPaginas = $t;
        }

        public function setPagAtual($p) {
            $this->pagAtual = $p;
        }

        public function setAberto($a) {
            $this->aberto = $a;
        }

        public function setLeitor($l) {
            $this->leitor = $l;
        }

        public function abrir() {
            $this->aberto = true;
        }

        public function fechar() {
            $this->aberto = false;
        }

        public function folhear($p) {
            if($p>$this->totPaginas) {
                $this->pagAtual = 0;
            }
            else {
                $this->pagAtual = $p;
            }
        }

        public function avancarPag() {
            $this->pagAtual++;
        }

        public function voltarPag() {
            $this->pagAtual--;
        }


    }