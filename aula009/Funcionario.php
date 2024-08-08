<?php 
require_once 'Pessoa.php';
class Fucionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function __construct($nome, $idade, $sexo) {
        // Chama o construtor da classe Pai
        parent::__construct($nome, $idade, $sexo);
    }
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($setor){
        $this->setor = $setor;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setTrabalhando(){
        $this->trabalhando = true;
    }
}
?>