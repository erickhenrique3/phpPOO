<?php 
require_once 'Controller.php';
class ControleRemoto implements  Controller{
    
    // atributos
    private $ligado;
    private $volume;
    private $tocando;

    //metodos especiais
    public function __construct()
    {
        $this->volume = 50;
        $this->tocando = false;
        $this->ligado = false;
    }

    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($volume){
        $this->volume = $volume;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }


    public function ligar(){
       $this->setLigado(true);
    }
    public function desligar(){
      $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<p>Ligado....</p>". ($this->getLigado() ? "SIM":"NAO");
        echo "<p>Está tocando ? </p>". ($this->getTocando() ? 'SIM':"NAO");
        echo '<p>Volume..</p>'. ($this->getVolume() ? 'Sim': 'Não');
        for ($i=0; $i <= $this->getVolume(); $i+=10) { 
           echo '<p>|</p>';
        }
    }
    public function fecharMenu(){
        echo '<p>Fechando menu..</p>';
    }
    public function MaisVolume(){
        if($this->getVolume()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function MenosVolume(){
        if($this->getVolume()){
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0 ){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0 ){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
        
}
?>