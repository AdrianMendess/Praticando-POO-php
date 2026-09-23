<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 3</title>
</head>
<body>
    <pre>
        <?php 
    require_once 'object.php';

    $c3 = new Caneta2;
    $c3->modelo = "BIC cristal";
    $c3->cor = "Azul";
    // $c3->ponta = 0.5;
    // $c3->carga = 99;
    $c3->rabiscar();
    $c3->destampar();
    print_r($c3);
    ?>

    </pre>
</body>
</html>