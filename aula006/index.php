<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Projeto controle Remoto</h1>
    <?php 
    require_once 'controleRemoto.php';
    $n = new ControleRemoto;
    $n->ligar();
    $n->abrirMenu();

    ?>
</body>
</html>