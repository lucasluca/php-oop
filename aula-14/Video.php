<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo,$avaliacao,$views,$curtidas,$reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    public function like() {
        $this->curtidas ++;
    }

    public function pause() {
        $this->reproduzindo = false;
    }

    public function play() {
        $this->reproduzindo = true;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($t) {
        $this->titulo = $t;
    }

    public function setAvaliacao($a) {
        $media = ($this->avaliacao + $a)/$this->views;
        $this->avaliacao = $media;
    }

    public function setViews($v) {
        $this->views = $v;
    }

    public function setCurtidas($c) {
        $this->curtidas = $c;
    }

    public function setReproduzindo($r) {
        $this->reproduzindo = $r;
    }
}
