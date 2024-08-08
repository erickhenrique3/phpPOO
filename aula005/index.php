<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<pre>
<body>
    <?php 
    require_once 'ContaBanco.php';

    $p1 = new ContaBanco;
    $p1->abrirConta('cc');
    $p1->setDono("JASMINO CREUSO");
    $p1->setNumConta(245);
    $p1->depositar(450);
    $p1->pagarMensal();

    // $p2->fecharConta();


    $p2 = new ContaBanco;
    $p2->abrirConta('cp');
    $p2->setDono("CREUSA");
    $p2->setNumConta(709);
    $p2->depositar(150);
    $p2->pagarMensal();

    // $p2->fecharConta();

   print_r($p1);
   print_r($p2);
    ?>
</body>
</pre>
</html>