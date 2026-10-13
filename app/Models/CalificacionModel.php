<?php
namespace App\Models;
use CodeIgniter\Model;

class CalificacionModel extends Model {
    protected $table            = 'calificaciones';
    protected $primaryKey       = 'id_calif';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['tipo_calif', 'origen', 'id_docente', 'id_alumno', 'id_materia'];
}
