<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aula 02 - POO</title>
</head>

<body>
    <?php
    class Caneta1
    {
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar()
        {
            if ($this->tampada == true) {
                echo "<p>ERRO! Não pode rabiscar!</p>";
            } else {
                echo "<p>rabiscado...</p>";
            }
        }
        function tampar() 
        {
            $this->tampada = true;
        }
        function destampar()
        {
            $this->tampada = false;
        }
    }

    ?>
</body>

</html>