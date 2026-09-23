<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Aula 02 - POO</title>
</head>

<body>
    <?php
    class Caneta2
    {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar()
        {
            if ($this->tampada == true) {
                echo "<p>ERRO! Não pode rabiscar!</p>";
            } else {
                echo "<p>rabiscado...</p>";
            }
        }
        public function tampar()  // o método está dando acesso ao atributo "tampada" que está privado
        {
            $this->tampada = true; 
        }
        public function destampar()
        {
            $this->tampada = false;
        }
    }

    ?>
</body>

</html>