<?php
/**
 * Created by PhpStorm.
 * User: cabrera
 * Date: 21/06/18
 * Time: 23:35
 */

namespace App\Repository;


class CarrosRepository
{
    private $carros = ['Peugeot 207','Citroen C3', 'Fiat Punto'];
    public function list()
    {
        return $this->carros;
    }

    public function get($id)
    {
        $carro = ($this->carros[$id])?? null;
        return ['carro'=>$carro];
    }
}