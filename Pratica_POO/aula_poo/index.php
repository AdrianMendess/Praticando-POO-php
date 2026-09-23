<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aula 2</title>
</head>

<body>
    <?php
    require_once 'objeto.php';
    $c1 = new Caneta1;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;
    $c1->destampar();
    print_r($c1);
    echo '<br>';
    $c2 = new Caneta1;
    $c2->cor = "verde";
    $c2->carga = 50;
    $c2->tampar();
    print_r($c2);
    ?>
</body>

</html>