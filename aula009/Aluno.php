<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matri;
    private $curso;

    public function __construct($nome, $idade, $sexo, $matricula) {
        // Chama o construtor da classe Pai
        parent::__construct($nome, $idade, $sexo);
        $this->matri = $matricula;
    }
    public function cancelarMatri(){
        $this->matri = false;
    }
    public function getMatri(){
        return $this->matri;
    }
    public function setMatri($matri){
        $this->matri = $matri;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso){
        $this->curso = $curso;
    }
}
?>