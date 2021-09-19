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

    public function getByJns($jns)
    {
        return $this->query("SELECT * FROM bunga WHERE id_simpanan = $jns");
    }
}