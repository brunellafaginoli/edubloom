<?php
namespace App\Models;
use CodeIgniter\Model;

class FamiliaModel extends Model {
    protected $table            = 'familias';
    protected $primaryKey       = 'id_familia';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nro_telefono', 'parentesco', 'nro_casa', 'barrio', 'calle', 'gmail', 'id_preceptor'];
}
