<!DOCTYPE html>
<html lang="en">

<head>
    <title>teste 4</title>
</head>

<body>
    <pre>
        <?php
        require_once 'Usuarios.php';
    $u = array();
    $u[0] = new Usuario("Ronaldo","ronaldofen@gmail.com", false, 67);
    $u[1] = new Usuario("Adrian","adrianmendes@gmail.com", true, 18);
    $u[0]->exibirPerfil();
    $u[1]->exibirPerfil();
    ?>
    </pre>
</body>

</html>