<?php

namespace App\Models;

use CodeIgniter\Model;

class WalkModel extends Model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    protected $table            = 'walks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['starting_point'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
// 
    protected array $casts = [];
    protected array $castHandlers = [];

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

    function create_walk($data) {
        $this->db->query("INSERT INTO walks (starting_point) VALUES ('$data[starting_point]');");
    }

    function get_all_walks() {
        $query = $this->db->query("SELECT * FROM walks;");
        $result = $query->getResult();      
        return $result;
    }
}
