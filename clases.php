<?php

/*
interface IFigura
{
    function area();
    function get();
}
*/

abstract class Figura
{

    abstract function area();
    /*
    private $msg = 'Hola figura';*/
    //llamar comportamientos
    function toStrig()
    {
        return 'Hola figura';
    }
};

//class Cuadrado implements IFigura
class Cuadrado extends Figura
{
    private int $arista;

    function __construct(int $arista)
    {
        $this->arista = $arista;
    }

    function setArista(int $value)
    {
        $this->arista = $value;
    }

    function getArista(): int
    {
        return $this->arista;
    }
    function area(): int
    {
        return pow($this->arista, 2);
    }
};

class Triangulo extends Figura {
    private int $base;
    private int $altura;

    function __construct(int $base, int $altura)
    {
        $this->base = $base;
        $this->altura = $altura;

    }

    function get(string $pop){
        return $this ->{$pop};
    }

    function set(string $prop, int $value){
        $this -> {$prop} = $value;
    }

    function area()
    {
        return ($this->base * $this->altura) /2;
    }

}
$cuadrado = new Cuadrado(25);
echo "El area del cuadrado de 25*25 es :" . $cuadrado->area();
echo '<br>';

$triangulo = new Triangulo(25, 10);
echo "El area del triangulo es :" . $triangulo->area();
echo '<br>';

//imprimir
$triangulo -> set('base', 50);
echo $triangulo-> get('base');