<?php 
require_once "Pessoa.php";
require_once "Pulblicação.php";
class Livro implements Pulblicação{
    private $titulo;
    private $autor;
    private $totalPag;
    private $pageAtual;
    private $leitor;
    private $aberto;

    public function detalhes(){

    }
    public function __construct($titulo, $autor, $totalPag, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPag = $totalPag;
        $this->leitor = $leitor;
        $this->pageAtual = 0;
        $this->aberto = false;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getTotalPag(){
        return $this->totalPag;
    }
    public function setTotalPag($totalPag){
        $this->totalPag = $totalPag;
    }
    public function getPageAtual(){
        return $this->pageAtual;
    }
    public function setPageAtual($pageAtual){
        $this->pageAtual = $pageAtual;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }
    public function abrir(){
      $this->aberto = true;
    }
	public function fechar(){
        $this->aberto  =  false;
    }
	public function folhear($p){
        if($p > $this->totalPag){
            $this->pageAtual = 0;
        }else{
            $this->pageAtual= $p;
        }
    }
	public function avancarPag(){
        $this->pageAtual ++;
    }
	public function voltarPag(){
        $this->pageAtual --;
    }
}
?>