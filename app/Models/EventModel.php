<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'dataevents';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nim','name','email','phone','instansi','idEvents','status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function check_email($email,$id){
        $this->select("*");
        $this->where(['email' => $email, 'idEvents' => $id]);
        $query = $this->get();
		return $query->getRowArray();
    }
    public function listing(){
		$this->select('*');
		$this->orderBy("id", "ASC");
		$query = $this->get();
		return $query->getResultArray();
    }
    public function add($data){
      $this->save($data);
    }
}
