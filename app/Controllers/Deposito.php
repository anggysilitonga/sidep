<?php

namespace App\Controllers;

use App\Models\M_deposito;


class Deposito extends BaseController
{
    public function index()
    {
        $deposito = new M_deposito();
        $res = $deposito->getDep()->getResultArray();
        $data = [
            'res' => $res,
        ];
        
        return view('deposito/depositoView', $data);
    }

    public function getdeposito()
    {
        $deposito = new M_deposito();
        $res = $deposito->getDep()->getResultArray();
        dd($res);
    }

    public function info()
    {
        return view('deposito/infoDepoView');
    }
}
