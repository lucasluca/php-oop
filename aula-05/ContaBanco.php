<?php
class ContaBanco {

    public $numConta;
    protected $tipo;
    private $saldo;
    private $dono;
    private $status;

    function __construct() {
        $this->status = false;
        $this->saldo = 0;
        echo "<p>Conta criada com sucesso</p>";
    }

    function getNumConta(){
        return $this->numConta;
    }

    function getTipo(){
        return $this->tipo;
    }

    function getSaldo(){
        return $this->saldo;
    }

    function getStatus(){
        return $this->status;
    }

    function getDono(){
        return $this->dono;
    }

    function setNumConta($num){
        $this->numConta = $num;
    }

    function setTipo($tipo){
        $this->tipo = $tipo;
    }

    function setSaldo($saldo){
        $this->saldo += $saldo;
    }

    function setStatus($status){
        $this->status = $status;
    }

    function setDono($dono){
        $this->dono = $dono;
    }

    public function abrirConta($t) {

        $this->setTipo($t);
        $this->setStatus(true);

        if($this->tipo == "cc") {
            $this->setSaldo(50);
        }else {
            $this->setSaldo(150);
        }

    }

    public function fecharConta() {
        if($this->getSaldo() == 0) {
            $this->status = false;
            echo "<p>Conta de {$this->dono} fechada com sucesso</p>";
        }
        if($this->getSaldo() > 0){
            echo "Favor sacar o valor de {$this->saldo}";
        }
        if($this->getSaldo() < 0) {
            echo "Favor pagar a divida de {$this->saldo}";
        }
        
    }

    public function depositar($d) {
        if($this->getStatus()){
            $this->setSaldo($d);
            echo "<p>Deposito de {$d} autorizado na conta de {$this->getDono()}</p>";
        }else {
            echo "Impossivel depositar porque e conta esta fechada";
        }
    }

    public function sacar($d) {
        if($this->getStatus()){
            if($this->getSaldo() > $d){
                $this->saldo -= $d;
                echo "<p>Saque de {$d} autorizado na conta de {$this->getDono()}</p>";
            }else{
                echo "Saldo insuficiente";
            }
        }else {
            echo "A conta nao esta ativa";
        }
    }

    public function pagarMensal() {
        if($this->getStatus()){

            if($this->getTipo() == "cc"){
                $this->saldo -= 12;
                echo "<p>Mensalidade de 12 debitada na conta de {$this->getDono()}</p>";
            }else {
                $this->saldo -= 20;
                echo "<p>Mensalidade de 20 debitada na conta de {$this->getDono()}</p>";
            }

        } else{
            echo "A conta ainda nao esta aberta";
        }
        
    }
}