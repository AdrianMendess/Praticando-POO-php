<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula 4</title>
</head>

<body>
    <pre>

        <?php
        require_once 'caneta.php';

        $c4 = new Caneta ("BIC", "Azul", 0.5);
        $c5 = new Caneta ("FC", "Preta", 0.5);
        print_r($c4);
        print_r($c5);
    ?>
</pre>
</body>

</html>