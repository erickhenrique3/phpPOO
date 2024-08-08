<!-- classe php abaixo (caneta) -->
<?php
class caneta
{
	public $modelo;
	private $ponta;
	public $cor;
	protected $carga;
	protected $tampada;

	 public function rabiscar()
	{
		if ($this->tampada == false) {
			echo "<p>Error não pode rabiscar</p>";
		} else {
			echo '<p>Estou rabiscando..</p>';
		}
	}
	 private function tampar()
	{
		$this->tampada == true;
	}
	private function destampar()
	{
		$this->tampada == false;
	}
}
?>