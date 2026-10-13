<?php
namespace App\Models;
use CodeIgniter\Model;

class CursoModel extends Model {
    protected $table            = 'cursos';
    protected $primaryKey       = 'id_curso';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['curso', 'division', 'id_preceptor'];
}
