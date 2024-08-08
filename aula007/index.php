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
    require_once 'Lutador.php';
    require_once 'Luta.php';
    // Vetor de lutadores feito pela IA 
    $IA = array();
    $IA[0] = new Lutador('Erickzinn', 'Brazil', 60.08, 25, 1.72, 40, 0, 1);
    $IA[1] = new Lutador('Judito', 'Angola', 60.08, 25, 1.72, 40, 0, 1);

    $UEC = new Luta();
    $UEC->marcarLuta($IA[0], $IA[1]);
    $UEC->lutar();
    $IA[0]->status();
    $IA[1]->status();

    ?>
     </pre>
</body>
</html>