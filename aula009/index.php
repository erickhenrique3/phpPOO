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
    require_once 'Professor.php';
    require_once 'Funcionario.php';
    
    $p1 = new Pessoa('Jão',45,'Macho'); 
    $p2 = new Aluno('Cleberton',12,'Macho', true);
    $p3 = new Professor('Jailson',42,'Macho');
    $p4 = new Fucionario('Maria rastaferi',19,'Femea');

    // $p1->setNome('Jão');
    // $p1->setIdade(45);
    // $p1->setSexo('Macho');

    // $p2->setNome('Cleberton');
    // $p2->setIdade(24);
    // $p2->setCurso('Costureiro');
    // $p2->setSexo('Macho');
    // $p2->setMatri(true);

    // $p3->setNome('Jailson');
    // $p3->setIdade(42);
    // $p3->setSexo('Macho');
    // $p3->setSalario(5000);
    // $p3->setEspecialidade('Matematico');

    // $p4->setNome('Kiko amando');

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    ?>
      </pre>
</body>
</html>