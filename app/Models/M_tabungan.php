<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_tabungan extends Model
{
    protected $table = 'tabungan';
    
    public function getTab()
    {
        $res = $this->query("SELECT * FROM tabungan");
        return $res;

    }

    public function getInfo($id_tab)
    {
        return $this->query("SELECT deskripsi FROM `tabungan` WHERE id_tab = $id_tab");
    }
}