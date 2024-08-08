<?php 
class Caneta{
    public $modelo;
    private $ponta;
    private $cor;
    public $tampada;
 // O metodo construstor serar carregado toda vez que esse objeto ser criado ou seja e tipo o mounted do vue js 
    public function __construct($m, $c, $p) // metodo construtor por padrao tem q ser __construct() ou o nome da classe (Caneta) no caso ;
    {
       $this->modelo = $m;
       $this->cor = $c;
       $this->ponta = $p;
       $this->tampar();
    }

    public function tampar(){
        return $this->tampada = true;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        return $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        return $this->ponta = $p;
    }

}
?>