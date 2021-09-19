<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_fo extends Model
{
    protected $table = 'fo';
    
    public function getFo()
    {
        $res = $this->query("SELECT * FROM fo");
        return $res;

    }

    public function getByCab($id)
    {
        return $this->query("SELECT * FROM fo WHERE id_cabang = $id");
    }
}