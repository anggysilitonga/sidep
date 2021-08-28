<?php

namespace App\Controllers;

use App\Models\M_giro;


class Giro extends BaseController
{
    public function index()
    {
        $giro = new M_giro();
        $res = $giro->getGiro()->getResultArray();
        $data = [
            'res' => $res,
        ];
        
        return view('giro/giroView', $data);
    }

    public function getDataGiro()
    {
        $giro = new M_giro();
        $res = $giro->getGiro()->getResultArray();
        dd($res);
    }

    public function info()
    {
        return view('giro/infoGiroView');
    }
}
