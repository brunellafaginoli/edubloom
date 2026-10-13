<?php
namespace App\Controllers;
use App\Models\MateriaModel;
use App\Models\CursoModel;

class Materias extends BaseController {
    public function index() {
        $db = \Config\Database::connect();
        $data['materias'] = $db->table('materias')
            ->select('materias.*, cursos.curso, cursos.division')
            ->join('cursos', 'cursos.id_curso = materias.id_curso', 'left')
            ->get()->getResultArray();
        return view('materias/index', $data);
    }

    public function crear() {
        $cursoModel = new CursoModel();
        $data['cursos'] = $cursoModel->findAll();
        return view('materias/crear', $data);
    }

    public function guardar() {
        $materiaModel = new MateriaModel();
        $materiaModel->insert([
            'nombre'   => $this->request->getPost('nombre'),
            'id_curso' => $this->request->getPost('id_curso')
        ]);
        return redirect()->to('/materias')->with('exito', 'Materia guardada.');
    }

    public function eliminar($id) {
        $materiaModel = new MateriaModel();
        $materiaModel->delete($id);
        return redirect()->to('/materias')->with('exito', 'Materia eliminada.');
    }
}
