<?php 
class Lutador{
///atributos
private $nome;
private $nacionalidade;
private $peso;
private $idade;
private $altura;
private $categoria;
private $vitorias;
private $empates;
private $derrotas;


//metodos especiais
public function __construct($no,$na,$pe,$id,$al,$vi,$em,$de)
{
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->setPeso($pe);
    $this->idade = $id;
    $this->altura = $al;
    $this->vitorias = $vi;
    $this->empates = $em;
    $this->derrotas = $de;
}
public function getNome(){
    return $this->nome;
}
private function setNome($no){
   $this->nome = $no;
}
private function getNacionalidade(){
    return $this->nacionalidade;
}
private function setNacionalidade($na){
    $this->nacionalidade = $na;
}
private function getPeso(){
    return $this->peso;
}
private function setPeso($pe){
    $this->peso = $pe;
    $this->setCategoria();
}
private function getIdade(){
    return $this->idade;
}
private function setIdade($id){
    $this->idade = $id;
}
private function getAltura(){
    return $this->altura;
}
private function setAltura($al){
    $this->altura = $al;
}
public function getCategoria(){
    return $this->categoria;
}
private function setCategoria(){
    if($this->peso < 52.2){
        $this->categoria = "Invalido" ;
    }else if($this->peso <= 70.3){
        $this->categoria = "Leve";
    }else if($this->peso <= 83.9){
        $this->categoria = "Medio";
    }else if($this->peso <= 102.2){
        $this->categoria = "Pesado";
    }else{
        $this->categoria = "Invalido";
    }
}
private function getVitorias(){
    return $this->vitorias;
}
private function setVitorias($vi){
    $this->vitorias - $vi;
}
private function getEmpates(){
    return $this->empates;
}
private function setEmpates($em){
    $this->empates = $em;
}
private function getDerrotas(){
   return $this->derrotas;
}
private function setDerrotas($de){
    $this->derrotas = $de;
}
//metodos
public function apresentar(){
 echo "<p>------------------</p>";
 echo "<p> Chegou a hora do lutador(a) " . $this->getNome();
 echo " Vem diretamente do " . $this->getNacionalidade();
 echo " Tem " . $this->getIdade(). ' anos ';
 echo "<br> E pesa " . $this->getPeso() . "Kg";
 echo "<br> Ele tem " . $this->getVitorias() . " Vitorias ". "E tem " . $this->getEmpates(). ' empates ' .  $this->getDerrotas() . ' derrotas';
}
public function status(){
    echo "<p>------------------</p>";
    echo "<p>" . $this->getNome() . "é um peso " . $this->getCategoria();
    echo " é ja ganhou " . $this->getVitorias() . " vezes";
    echo " é perdeu " . $this->getDerrotas() . " E " . $this->getEmpates() . " empates";
}
public function ganharLuta(){
  $this->setVitorias($this->getVitorias() + 1);
}
public function empatarLuta(){
 $this->setEmpates($this->getEmpates() + 1);
}
public function perderLuta(){
 $this->setDerrotas($this->getDerrotas() + 1);
}
}
?>