<?php
namespace App\Models;
use CodeIgniter\Model;

class AdministradoresModel extends Model {
    protected $table            = 'administradores';
    protected $primaryKey       = 'id_admin';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_usuarios'];
}
