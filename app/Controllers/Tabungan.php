<?php

namespace App\Controllers;

use App\Models\M_tabungan;


class Tabungan extends BaseController
{
    public function index()
    {
        $tabungan = new M_tabungan();
        $res = $tabungan->getTab()->getResultArray();
        // dd($res);
        $data = [
            'res' => $res,
        ];
        
        return view('tabungan/tabunganView', $data);
    }

    public function getTabungan()
    {
        $tabungan = new M_tabungan();
        $res = $tabungan->getTab()->getResultArray();
        dd($res);
    }

    public function info()
    {
        $tabungan = new M_tabungan();
        $res = $tabungan->getTab()->getResultArray();
        // dd($res);
        $data = [
            'res' => $res,
        ];
        return view('tabungan/infoTabView', $data);
    }

    public function getInfo()
    {
        $tabungan = new M_tabungan();
        $res = $tabungan->getTab()->getResultArray();
        
        $id_tab = $this->request->getPost('id_tab');
        $desc = $tabungan->getInfo($id_tab)->getRow();
        
        $data = [
            'res' => $res,
            'desc' => $desc
        ];
        return view('tabungan/infoTabView', $data);


    }
}
