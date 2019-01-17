<?php

interface Auto
{
    const MOTOR = " tiene motor\n";

    public function arrancar();
}
trait Personas
{
    public function cuantasPersonas()
    {
        echo 'El vehiculo tiene capacidad para '.$this->capacidad." personas.\n";
    }
}
class Moto implements Auto
{
    use Personas;
    public $ruedas = 2;
    public $capacidad = 2;
    public $nombre = 'La moto';

    public function arrancar()
    {
        echo $this->nombre." arranca\n";
    }

    public function cuantasRuedas()
    {
        echo 'El vehiculo tiene '.$this->ruedas." ruedas.\n";
    }
}
class Coche extends Moto
{
    public $ruedas = 4;
    public $capacidad = 4;
    public $nombre = 'El coche';
}

$moto = new Moto();
echo $moto->nombre.$moto::MOTOR."\n";
$moto->arrancar();
$moto->cuantasRuedas();
$moto->cuantasPersonas();
$coche = new Coche();
echo $coche->nombre.$coche::MOTOR."\n";
$coche->arrancar();
$coche->cuantasRuedas();
$coche->cuantasPersonas();
