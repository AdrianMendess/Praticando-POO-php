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

        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        $c->maisVolume();
        $c->abrirMenu();


        ?>
    </pre>
</body>

</html>