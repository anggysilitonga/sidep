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
}