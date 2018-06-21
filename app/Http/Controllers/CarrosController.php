<?php

namespace App\Http\Controllers;

class CarrosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function list()
    {
        $carros = ['Peugeot 207','Citroen C3', 'Fiat Punto'];
        return json_encode($carros);
    }

    //
}
