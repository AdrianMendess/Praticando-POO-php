<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aula 6 - controle remoto</title>
</head>

<body>
    <h1>Controle remoto</h1>
    <pre>
        <?php
        require_once 'ControleRemoto.php';

        $c1 = new ControleRemoto();
        $c1->ligar();
        $c1->maisVolume();
        print_r($c1);
        
        ?>
    </pre>
</body>

</html>