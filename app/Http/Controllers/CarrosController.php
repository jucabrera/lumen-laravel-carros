<?php

namespace App\Http\Controllers;
use App\Repository\CarrosRepository;
use Illuminate\Http\Request;


class CarrosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;
    public function __construct(CarrosRepository $repository)
    {
        $this->repository=$repository;
    }

    public function list()
    {
        $carros = $this->repository->list();
        return json_encode($carros);
    }

    public function insert(Request $request)
    {
        $data = $request->all();
        echo __METHOD__;
        return ;
    }

    public function get($id)
    {

        return json_encode($this->repository->get($id));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $id = $request;
        echo __METHOD__;
        return ;
    }

    public function delete()
    {
        echo __METHOD__;
        return ;
    }

    //
}
