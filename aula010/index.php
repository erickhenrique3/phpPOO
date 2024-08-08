<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    require_once 'Visitante.php';

    
    $p1 = new Bolsista();
    $p1->setNome('Jão');
    $p1->setIdade(45);
    $p1->setSexo('Macho');
    $p1->setCurso('Costureiro');
    $p1->setBolsa(50);
    $p1->setMatri(true);
    $p1->pagarMensalidade();

    $p2 = new Aluno();
    $p2->setNome('Valdinei');
    $p2->setIdade(45);
    $p2->setSexo('Macho');
    $p2->setCurso('Carpiteiro');
    $p2->setMatri(true);


  


    print_r($p1);
    print_r($p2);
    ?>
      </pre>
</body>
</html>