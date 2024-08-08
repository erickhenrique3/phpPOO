<?php
require_once 'Aluno.php'; 
class Bolsista extends Aluno{
    private $bolsa;
    public function renovarBolsa(){
      echo 'Aluno'. $this->getNome() . 'renovou sua bolsa! :) ';
    }
		public function pagarMensalidade()
		{
			echo $this->getNome() . ' é bolsista, então paga 70% de desconto!! <br>';
		}
		public function getBolsa(){
			return $this->bolsa;
		}
		public function setBolsa($bolsa){
			$this->bolsa = $bolsa;
		}


}
?>