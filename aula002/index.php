<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 002 POO</title>
</head>
<body>
    <?php 
    require_once 'caneta.php';  // Inclui o arquivo 'caneta.php'
    $n1 = new Caneta();         // Cria uma nova instância da classe Caneta
    $n1->cor = 'azul';
    $n1->ponta = 0.5;
    $n1->modelo = 'Bic';
    $n1->tampada = true;
    $n1->carga = '50%';

    $n1->tampar();
    $n1->rabiscar();
    print_r($n1);

    echo "<br>";

    $n2 = new Caneta();        
    $n2->cor = 'Preto';
    $n2->ponta = 0.9;
    $n2->modelo = 'Erickzinnn';
    $n2->tampada = true; 
    $n2->carga = '0%';

    
    print_r($n2);
    ?>
</body>
</html>