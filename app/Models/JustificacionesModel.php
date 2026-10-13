<?php
namespace App\Models;
use CodeIgniter\Model;

class JustificacionesModel extends Model {
    protected $table            = 'justif_inasistencia'; // Sigue apuntando a tu tabla original
    protected $primaryKey       = 'id_justif';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['fecha', 'hora', 'estado', 'id_asist'];
}
