<?php

namespace App\Controllers;

use App\Models\M_giro;
use App\Models\M_bunga;


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
        $giro = new M_giro();
        $res = $giro->getGiro()->getResultArray();
        $data = [
            'res' => $res,
        ];
        return view('giro/infoGiroView', $data);
    }

    public function getInfo()
    {
        $giro = new M_giro();
        $res = $giro->getGiro()->getResultArray();
        
        $id_tab = $this->request->getPost('id_tab');
        $desc = $giro->getInfo($id_tab)->getRow();
        
        $data = [
            'res' => $res,
            'desc' => $desc,
            'id_tab' => $id_tab
        ];
        return view('giro/infoGiroView', $data);
    }

    public function simulasiGiro()
    {
        function RpToInt($num)
        {
            $res = array();
            $arr = str_split($num);
            foreach ($arr as $key ) {
                if (is_numeric($key)) {
                    $res[] = $key;
                }
            }
            return implode($res); //1000
        }
        $bunga = new M_bunga();
        $giro = new M_giro();
        $id_giro = $this->request->getPost("id_giro");
        $nominal = RpToInt($this->request->getPost("nominal"));
        $jangka = $this->request->getPost("jangka");
        $simp = $giro->getIdSimpanan($id_giro)->getResult();

        // foreach ($simp as $key) {
        //     if ($jangka == '3') {
        //         $bungas = $bunga->getByJns($key->id_simpanan+1)->getResultArray();
        //     }else if($jangka == '6') {
        //         $bungas = $bunga->getByJns($key->id_simpanan+2)->getResultArray();
        //     }else if($jangka == '12') {
        //         $bungas = $bunga->getByJns($key->id_simpanan+3)->getResultArray();
        //     }else if($jangka == '24') {
        //         $bungas = $bunga->getByJns($key->id_simpanan+4)->getResultArray();
        //     } else {
        //         $bungas = $bunga->getByJns($key->id_simpanan)->getResultArray();
        //     }
        // }

        foreach ($simp as $key) {
            $bungas = $bunga->getByJns($key->id_simpanan)->getResultArray();
        }

        if ($nominal<5000000) {
            $bunga = 0;
        } else if ($nominal >= 5000000 && $nominal <100000000) {
            $bunga = $bungas[0]['kat_1'];
        } else if ($nominal >= 100000000 && $nominal <250000000) {
            $bunga = $bungas[0]['kat_2'];
        }else if ($nominal >= 250000000 && $nominal <500000000) {
            $bunga = $bungas[0]['kat_3'];
        } else if ($nominal >= 500000000 && $nominal <1000000000) {
            $bunga = $bungas[0]['kat_4'];
        } else if ($nominal >= 1000000000) {
            $bunga = $bungas[0]['kat_5'];
        }
    
        // $profit = $nominal*$bunga*($jangka/12); //keuntungan ketika dia nabung, bukan total saldo akhir seyeng
        $profit = $nominal*$bunga*($jangka*30/360); //keuntungan ketika dia nabung, bukan total saldo akhir seyeng
        $total = $profit + $nominal;
        // dd($profit, $total, $nominal, $bunga);
        function rupiah($angka){
           return "Rp " . number_format($angka,2,',','.');
        } 

        $data = [
            'simpanan' => 'Giro',
            'nominal' => rupiah($nominal),
            'profit' => rupiah($profit),
            'jangka' => $jangka,
            'total' => rupiah($total),
 

        ];

        return view('tabungan/hasilSimulasiView', $data);
    }
}
