<?php
namespace App\Models;
use CodeIgniter\Model;

class PreceptoresModel extends Model {
    protected $table            = 'preceptores';
    protected $primaryKey       = 'id_preceptor';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_usuarios', 'id_admin'];
}
