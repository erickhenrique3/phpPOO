<?php 
require_once 'Pessoa.php';
class Professor extends Pessoa {
    private $salario;
    private $especialidade;

    public function __construct($nome, $idade, $sexo) {
        // Chama o construtor da classe Pai
        parent::__construct($nome, $idade, $sexo);
    }
    public function receberAumento($aumento){
        $this->salario += $aumento;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }
}
?>