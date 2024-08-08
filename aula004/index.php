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
    require_once 'caneta.php';
    $c1 = new caneta("Ericzinn", "Preto do malll", 100.09);
    // $c1->setModelo("BIC");
    // $c1->setPonta(1.9);
    // print "Eu tenho uma cante do modelo  {$c1->getModelo()} e com a ponta {$c1->getPonta()}."

    print_r($c1);

    ?>
</body>
</pre>
</html>