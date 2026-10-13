<?php
namespace App\Models;
use CodeIgniter\Model;

class AlumnoModel extends Model {
    protected $table            = 'alumnos';
    protected $primaryKey       = 'id_alumno';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_usuarios', 'id_curso', 'id_familia'];
}
