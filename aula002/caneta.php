<!-- classe php abaixo (caneta) -->
<?php 
     class caneta {
       public $modelo;
       public $ponta;
       public $cor;
       public $carga;
       public $tampada;

       function rabiscar(){
				if($this->tampada == false){
					echo "<p>Error não pode rabiscar</p>";
					}else{
					 echo '<p>Estou rabiscando..</p>';
					}
       }
       function tampar(){
        $this->tampada == true;
       }
       function destampar(){
				$this->tampada == false;
       }

     }
    ?>