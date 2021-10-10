<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_user extends Model
{
    protected $table = 'user';
    
    public function cek_login($username, $password)
    {
    	$res = $this->query("SELECT * FROM user where username = '$username'");
    	return $res;
    }
}