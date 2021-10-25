<?php

namespace App\Controllers;
use App\Models\M_tabungan;
use App\Models\M_giro;
use App\Models\M_deposito;
use App\Models\M_bunga;


// use App\Models\M_gsiro;


class Bunga extends BaseController
{
    public function index()
    {
        return view('bunga/bungaTabunganView');
    }

    public function bungaTabungan()
    {
        $tabungan = new M_tabungan();
        $res = $tabungan->getTab()->getResultArray();
        $data = [
            'res' => $res,
        ];
        return view('bunga/bungaTabunganView', $data);
    }

    public function bungaGiro()
    {
        $giro = new M_giro();
        $res = $giro->getGiro()->getResultArray();
        $data = [
            'res' => $res,
        ];
        return view('bunga/bungaGiroView', $data);
    }

    public function getBunga()
    {
        $bunga = new M_bunga();
        $tab = new M_tabungan();
        $id_tab = $this->request->getPost('id_tab');
        $id_simp = $tab->getSimp($id_tab)->getResultArray();
        $res = $bunga->getByJns($id_simp[0]['id_simpanan'])->getResultArray();
        $data = [
            'res' => $res,
            'id_bunga' => $res[0]['id_bunga']
        ];
        return view('bunga/bungaDetView', $data);
    }
    public function getBungaGiro()
    {
        $bunga = new M_bunga();
        $giro = new M_giro();
        $id_giro = $this->request->getPost('id_giro');
        $id_simp = $giro->getIdSimpanan($id_giro)->getResultArray();
        $res = $bunga->getByJns($id_simp[0]['id_simpanan'])->getResultArray();
        $data = [
            'res' => $res,
            'id_bunga' => $res[0]['id_bunga']
        ];
        // dd($res);
        return view('bunga/bungaDetView', $data);
    }

    public function editBunga($id)
    {
        $bunga = new M_bunga();
        $res = $bunga->getByJns($id)->getResultArray();
        $data = [
            'res' => $res
        ];
        return view('bunga/editBungaView', $data);
    }

    public function updateBunga($id_bunga)
    {
        $bunga = new M_bunga();
        $kat_1 = $this->request->getPost('kat_1');
        $kat_2 = $this->request->getPost('kat_2');
        $kat_3 = $this->request->getPost('kat_3');
        $kat_4 = $this->request->getPost('kat_4');
        $kat_5 = $this->request->getPost('kat_5');

        $kat_1 = $kat_1/100;
        $kat_2 = $kat_2/100;
        $kat_3 = $kat_3/100;
        $kat_4 = $kat_4/100;
        $kat_5 = $kat_5/100;
        $up = $bunga->updateE($id_bunga, $kat_1,$kat_2, $kat_3, $kat_4, $kat_5);
        $res = $bunga->getById($id_bunga)->getResultArray();
        $data = [
            'res' => $res,
            'id_bunga' => $id_bunga
        ];

        return view('bunga/bungaDetView', $data);
    }
}
    