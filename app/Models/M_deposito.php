<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_deposito extends Model
{
    protected $table = 'deposito';
    
    public function getDep()
    {
        $res = $this->query("SELECT * FROM deposito");
        return $res;
    }

    public function getIdSimpanan($id_tab)
    {
        return $this->query("SELECT id_simpanan FROM `deposito` WHERE id_dep = $id_tab");
    }

}