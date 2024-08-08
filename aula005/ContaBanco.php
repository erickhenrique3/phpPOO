<?php 
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $saldo;
    private $status;
    private $dono;

    public function abrirConta($t){
    $this->setTipo($t);
    $this->status = true;
     //p (poupança ou c de corrente)
    if($t == 'cc'){
        $this->saldo = 50;
    }else if($t == 'cp'){
        $this->saldo = 150;
    }
    }
    public function fecharConta(){
        if($this->saldo > 0){
            echo '<p> Conta com dinheiro não pode sacar :(!</p>';
        }else  if($this->saldo < 0){
            echo '<p>Você nao pode fechar a conta devendo nela :(!</p>';
        }
        $this->status = false;
       
    }
    public function depositar($v){
          if($this->status == true){
            $this->saldo = $this->saldo + $v;
          }else{
            echo '<p>Impossivel depositar com o status falso</p>';
          }
    }
    public function sacar($v){
           if($this->status == true){
               if($this->saldo >= $v){
                $this->saldo = $this->saldo - $v;
               }else{
                echo '<p>Saldo insuficiente</p>';
               }
           }else {
            echo '<p>Impossivel sacar um conta fechada :(</p>';
           }
    }
    public function pagarMensal(){
        if($this->getTipo() == 'cc'){
            $v = 12;
        } else{
            $v = 24;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        }else {
            echo '<p>Probelmas com a conta. Não posso cobrar !!</p>';
        }
    }

    

   

    // metodos especiais abaixo  



    public function __construct()
    {
        $this->status = false;
        $this->saldo = 0;
    }

    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($n){
        return $this->numConta = $n;
    }

    public function getTipo(){
      return $this->tipo;
    }
    public function setTipo($t){
        return $this->tipo = $t;
    }

    public function getSaldo(){
     return $this->saldo;
    }
    public function setSaldo($s){
        return $this->saldo = $s;
    }


    public function getStatus(){
       return $this->status;
    }
    public function setStatus($st){
        return $this->status = $st;
    }

    public function getDono(){
         return $this->dono;
    }
    public function setDono($d){
        return $this->dono = $d;
    }

}
?>