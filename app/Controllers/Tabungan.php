<?php

namespace App\Controllers;

use App\Models\M_tabungan;
use App\Models\M_bunga;


class Tabungan extends BaseController
{

   
    public function index()
    {
        $tabungan = new M_tabungan();
        $res = $tabungan->getTab()->getResultArray();
        // dd($res);
        $data = [
            'res' => $res
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

    
    public function simulasiTabungan()
    { 
        function RpToInt($num)
        {
            $res = array();
            $arr = str_split($num);
            // $arr = ['R','p','.',' ','1','.','0','0','0']
            //$res = []
            foreach ($arr as $key ) {
                if (is_numeric($key)) {
                    $res[] = $key;
                    //$res = [1]
                    //$res = [1,0]
                    //$res = [1,0,0]
                    //$res = [1,0,0,0]
                    // echo $key;
                    // echo "<br>";
                    // var_dump(implode($res));
                }
            }
            return implode($res); //1000
        }
        $rate = new M_bunga();
        $tab = new M_tabungan();
        $jns_tab = $this->request->getPost("jns_tab");
        $nominal = RpToInt($this->request->getPost("nominal"));
        // die();
        $jangka = $this->request->getPost("jangka");
        $simp = $tab->getSimp($jns_tab)->getResult();
        // dd($simp[0]);
        foreach ($simp as $key) {
            $bungas = $rate->getByJns($key->id_simpanan)->getResultArray();
        }

        if ($nominal<100000) {
            $bunga = $bungas[0]['kat_1'];
        } else if ($nominal >= 100000 && $nominal <100000000) {
            $bunga = $bungas[0]['kat_2'];
        } else if ($nominal >= 100000000 && $nominal <500000000) {
            $bunga = $bungas[0]['kat_3'];
         }else if ($nominal >= 500000000 && $nominal <1000000000) {
            $bunga = $bungas[0]['kat_4'];
        } else if ($nominal >= 1000000000) {
            $bunga = $bungas[0]['kat_5'];
        }

        // var_dump($nominal, $bunga, $jangka);
        // die();

        $profit = $nominal*$bunga*($jangka*30/360); //keuntungan ketika dia nabung, bukan total saldo akhir ///jangka dalam per hari //konversi bulan ke hari
        $total = $profit + $nominal;
        function rupiah($angka){
           return "Rp " . number_format($angka,2,',','.');
        } 
        $data = [
            'nominal' => rupiah($nominal),
            'profit' => rupiah($profit),
            'jangka' => $jangka,
            'total' => rupiah($total),
            'simpanan' => 'Tabungan'
        ];

        return view('tabungan/hasilSimulasiView', $data);
    }

   
}
