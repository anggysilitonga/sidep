<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_giro extends Model
{
    protected $table = 'giro';
    
    public function getGiro()
    {
        $res = $this->query("SELECT * FROM giro");
        return $res;
    }

    public function getIdSimpanan($id)
    {
        return $this->query("SELECT id_simpanan FROM `giro` WHERE id_giro = $id");

    }
}