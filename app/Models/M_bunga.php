<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_bunga extends Model
{
    protected $table = 'bunga';
    
    public function getBunga()
    {
        $res = $this->query("SELECT * FROM bunga");
        return $res;
    }

    public function getById($id)
    {
        return $this->query("SELECT * FROM bunga WHERE id_bunga = $id");
    }

    public function getByJns($jns)
    {
        return $this->query("SELECT * FROM bunga WHERE id_simpanan = $jns");
    }

    public function updateE($id, $kat_1, $kat_2, $kat_3, $kat_4, $kat_5)
    {
        return $this->query("UPDATE bunga set kat_1 = $kat_1, kat_2 = $kat_2, kat_3 = $kat_3, kat_4 = $kat_4, kat_5 = $kat_5  WHERE id_simpanan = $id");
    }
}