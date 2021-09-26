<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_cabang extends Model
{
    protected $table = 'cabang';
    
    public function getAll()
    {
        $res = $this->query("SELECT * FROM cabang");
        return $res;

    }

    public function getCab($id)
    {
        return $this->query("SELECT nama_cabang FROM cabang WHERE id_cabang = $id");
    }
}