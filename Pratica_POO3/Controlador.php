<?php 
interface Controlador { 
    public function ligar(); // metodos dentro de uma interface ja sao abstratas
    public function desligar();
    public function abrirMenu();
    public function fecharMenu ();
    public function maisVolume ();
    public function menosVolume ();
    public function ligarMudo ();
    public function desligarMudo();
    public function play();
    public function pause ();
}
