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
    require_once 'Livro.php';

    $Pessoa[0] = new Pessoa('Jãozinn', 16, 'Macho');
    $Pessoa[1] = new Pessoa('Joano', 19, 'Fêmea');

    $l1[0] = new Livro('Como ficar rico com PHP', 'Craudinho da ZÉZE', 500, $Pessoa[0]);
    print_r($l1[0]);
    ?>
    </pre>
</body>
</html>