<?php

namespace App\Controllers;

use App\Models\M_deposito;
use App\Models\M_bunga;
use App\Models\M_fo;
use App\Models\M_cabang;


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
    public function simulasiDeposito()
    {
        $rate = new M_bunga();
        $dep = new M_deposito();
        $cab = new M_cabang();
        $jns_dep = $this->request->getPost("jns_dep");
        $nominal = $this->request->getPost("nominal");
        $jangka = $this->request->getPost("jangka");
        // dd($jns_dep, $nominal, $jangka);
        $simp = $dep->getIdSimpanan($jns_dep)->getResult();
        // dd($jangka);
        foreach ($simp as $key) {
            if ($jangka == '3') {
                $bungas = $rate->getByJns($key->id_simpanan+1)->getResultArray();
            }else if($jangka == '6') {
                $bungas = $rate->getByJns($key->id_simpanan+2)->getResultArray();
            }else if($jangka == '12') {
                $bungas = $rate->getByJns($key->id_simpanan+3)->getResultArray();
            }else if($jangka == '24') {
                $bungas = $rate->getByJns($key->id_simpanan+4)->getResultArray();
            } else {
                $bungas = $rate->getByJns($key->id_simpanan)->getResultArray();

            }
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
    
        $profit = $nominal*$bunga*($jangka/12); //keuntungan ketika dia nabung, bukan total saldo akhir seyeng
        $total = $profit + $nominal;
        // dd($profit, $total, $nominal, $bunga);
        function rupiah($angka){
           return "Rp " . number_format($angka,2,',','.');
        } 
        $cabang = $cab->getAll()->getResult();
        $data = [
            'simpanan' => 'Deposito',
            'nominal' => rupiah($nominal),
            'profit' => rupiah($profit),
            'jangka' => $jangka,
            'total' => rupiah($total),
            'cabang' => $cabang
        ];

        return view('tabungan/hasilSimulasiView', $data);
    }

    public function getFo()
    {
        $fo = new M_fo();
        $cab = new M_cabang();
        $id_cab = $this->request->getPost("id_cab");
        $cabang = $cab->getCab($id_cab)->getResultArray();
        $nama = $fo->getByCab($id_cab)->getResultArray();
        $data = [
            'cabang' => $cabang[0],
            'nama' => $nama
        ];
        // dd($data);
        return view('fo/infoFoView', $data);
    }
}
