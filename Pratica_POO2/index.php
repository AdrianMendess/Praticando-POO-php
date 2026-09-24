<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Aula 5</title>
</head>
<body>
    <pre>
        <?php
    require_once 'ContaBanco.php';
    $p1 = new ContaBanco();
    $p2 = new ContaBanco();
    
    $p1->abrirConta("CC");
    $p1->setDono("Adrian");
    $p1->setNumConta(1111);
    
    $p2->abrirConta("CPP");
    $p2->setDono("Maria");
    $p2->setNumConta(2222);
    
    $p1->depositar(300);
    $p2->depositar(400);
    
    $p1->sacar(338);
    $p2->sacar(630);

    $p1->pagarMensal();
    $p2->pagarMensal();

    $p1->fecharConta();
    $p2->fecharConta();

    print_r($p1);
    print_r($p2);
    
    ?>
    </pre> 
</body>
</html>