<?php

class Usuario
{
    private $nome;
    private $idade;
    private $email;
    private $logado;
    private $situacao;

    public function __construct($no, $em, $log, $idade)
    {
        $this->nome = $no;
        $this->email = $em;
        $this->logado = $log;
        $this->setIdade($idade);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($n)
    {
        $this->nome = $n;
    }

    public function getLogado()
    {
        return $this->logado;
    }
    public function setLogado($l)
    {
        $this->logado = $l;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($e)
    {
        $this->email = $e;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($i)
    {
        $this->idade = $i;
        $this->setSituacao();
    }

    public function getSituacao()
    {
        return $this->situacao;
    }
    public function setSituacao()
    {
        if ($this->idade >= 18) {
            $this->situacao = "Maior de idade";
        } else {
            $this->situacao = "Menor de idade";
        };
    }


    public function logar()
    {
        $this->setLogado(true);
        echo "Usuário {$this->nome} fez login com sucesso!<br>";
    }

    public function exibirPerfil()
    {
        $status = $this->logado ? "Ativo" : "Desconectado";
        echo "Nome: {$this->nome} | Email: {$this->email} | Idade: {$this->idade} | Situação: {$this->situacao} | Status: {$status}<br>";
    }

     
}
