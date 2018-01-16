<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    //Metodos Especiais
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($v) {
        $this->volume = $v;
    }

    private function setLigado($l) {
        $this->ligado = $l;
    }

    private function setTocando($t) {
        $this->tocando = $t;
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        echo "<p>-----MENU-----</p>";
        echo "<br>Esta ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br> Esta tocando?: " . ($this->getTocando()?"SIM":"NÂO");
        echo "<br>Volume: " . $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
    }

    public function fecharMenu() {
        echo "<br>Fechando Menu...";
    }

    public function maisVolume() {
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play() {
        if($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}