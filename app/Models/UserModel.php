<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // Nombre real de tu tabla en la base de datos
    protected $table            = 'usuarios';

    // Tu clave primaria autoincrementable
    protected $primaryKey       = 'id_usuarios';

    protected $useAutoIncrement = true;

    // Tipo de retorno de las consultas
    protected $returnType       = 'array';

    protected $useSoftDeletes   = false;

    // ¡ESTA ES LA LÍNEA QUE TE FALTA O ESTÁ VACÍA!
    protected $allowedFields    = ['nombre', 'apellido', 'gmail', 'contraseña', 'tipo_usuario'];

    // Fechas automáticas desactivadas
    protected $useTimestamps    = false;
}
