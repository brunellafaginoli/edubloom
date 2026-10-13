<?php
namespace App\Models;
use CodeIgniter\Model;

class NotificacionModel extends Model {
    protected $table            = 'notificaciones';
    protected $primaryKey       = 'id_noti';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['fecha', 'hora', 'id_preceptor'];
}
