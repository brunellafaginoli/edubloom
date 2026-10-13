<?php
namespace App\Models;
use CodeIgniter\Model;

class AsistenciaModel extends Model {
    protected $table            = 'asistencias';
    protected $primaryKey       = 'id_asist';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['fecha', 'hora', 'estado', 'id_preceptor'];
}
