<?php
require_once 'Controlador.php';

class ControleRemoto
{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;

    //metodos especiais
    function __contruct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    function getVolume()
    {
        return $this->volume;
    }
    function getLigado()
    {
        return $this->ligado;
    }
    function getTocando()
    {
        return $this->tocando;
    }
    
    function setVolume($v)
    {
        $this->volume = $v;
    }
    function setLigado($l)
    {
        $this->ligado = $l;
    }
    function setTocando($t)
    {
        $this->tocando = $t;
    }

    public function ligar()
    {
        $this->setLigado(true);
    }
    public function deligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "<br> Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br> Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 0; $i < $this->getVolume(); $i ++) {
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu() {
    echo "<br> Fechando menu ";
    }
    public function maisVolume() {
    if ($this->getLigado()){
        $this->setVolume($this->getVolume() + 5);
    }
    }
    public function menosVolume() {
    if($this->getLigado()){
    $this->setVolume($this->getVolume() - 5);
    }
    }
    public function ligarMudo() {
    if($this->getLigado() && $this->getVolume() > 0){
        $this->setVolume(0);
    }
    }
    public function desligarMudo() {
    if ($this->getLigado() && $this->getVolume() == 0){
        $this->setVolume(50);
    }
    }
    public function play() {
    if($this->getLigado() && !($this->getTocando())){
        $this->setTocando(true);
    }
    }
    public function pause() {
    if($this->getLigado() && $this->getTocando()){
        $this->setTocando(false);
    }
    }
}
