<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>aula 002 POO</title>
</head>
<pre>
<body>
	<?php
	require_once 'caneta.php';
	$n1 = new Caneta();
	$n1->modelo = 'Bic changes';
	$n1->cor = 'Pretona';
	// $n1->ponta = 0; nao pode mudar porque é uma atributo private ou protected só pode mudar aqueles que é pulblic
	$n1->rabiscar();
	// $n1->tampar(); não irá funcionar porquer o metodo e protected  

	// Mas vc pode mudar um atributo privado caso o metodo seja pulblico exemplo abaixo-->>>

	// protected $tampada;
	// pulblic function tampar()
	// {
	// 	$this->tampada == true;
	// }


	var_dump($n1);

	
	?>
</body>
</pre>

</html>