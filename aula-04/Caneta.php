<?php 
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    function __construct($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPonta(){
        return $this->ponta;
    }

    function setModelo($m) {
        $this->modelo = $m;
    }

    function setCor($c) {
        $this->cor = $c;
    }

    function setPonta($p) {
        $this->ponta = $p;
    }

    public function rabiscar() {
        if ($this->tampada == true){
            echo "<p>Não posso rabiscar pois estou tampado</p>";
        }
        else{
            echo "<p>Estou rabiscando...</p>";
        }

    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;        
    }
}


