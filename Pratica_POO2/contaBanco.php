<?php

class ContaBanco
{
    //atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // metodos especiais
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function setNumConta($n)
    {
        $this->numConta = $n;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setTipo($t)
    {
        $this->tipo = $t;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setDono($d)
    {
        $this->dono = $d;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setStatus($st)
    {
        $this->status = $st;
    }

    public function getStatus()
    {
        return $this->status;
    }


    //metodos 
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CPP") {
            $this->setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com dinheiro</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " fechada com sucesso!</p>";
        }
    }

    public function depositar($v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p> Deposito de R$ $v na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Impossivel depositar</p>";
        }
    }

    public function sacar($v)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>saldo insufuciente</p>";
            }
        } else {
            echo "<p>impossivel sacar</p>";
        }
    }

    public function pagarMensal()
    {
        $v = 0;
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CPP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada da conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Problemas com a conta</p>";
        }
    }
}
