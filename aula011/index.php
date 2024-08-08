<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimofrismo sobreposição</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'Mamifero.php';
    require_once 'Reptil.php';

    $m = new Mamifero();
    $m->setPeso(24);
    $m->setIdade(4);
    $m->setMembros(2);
    $m->setCorpelo('Azul');
    $m->locomover();
    print_r($m);

    $r = new Reptil();
    $r->setPeso(42);
    $r->setIdade(14);
    $r->setmembros(6);
    $r->setCorEscama('Branco');
    $r->locomover();
    print_r($r);
    ?>
     </pre>
</body>
</html>