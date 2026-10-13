<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AlumnoModel;
use App\Models\CursoModel;
use App\Models\FamiliaModel;

class Alumnos extends BaseController {
    public function index() {
        $db = \Config\Database::connect();
        $data['alumnos'] = $db->table('alumnos')
            ->select('alumnos.id_alumno, usuarios.nombre, usuarios.apellido, usuarios.gmail, cursos.curso, cursos.division')
            ->join('usuarios', 'usuarios.id_usuarios = alumnos.id_usuarios')
            ->join('cursos', 'cursos.id_curso = alumnos.id_curso', 'left')
            ->get()->getResultArray();
        return view('alumnos/index', $data);
    }

    public function crear() {
        $data['cursos'] = (new CursoModel())->findAll();
        $data['familias'] = (new FamiliaModel())->findAll();
        return view('alumnos/crear', $data);
    }

    public function guardar() {
        $userModel = new UserModel();
        $alumnoModel = new AlumnoModel();

        // 1. Crear el usuario base
        $id_usuario = $userModel->insert([
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'gmail' => $this->request->getPost('gmail'),
            'contraseña' => password_hash($this->request->getPost('contraseña'), PASSWORD_DEFAULT),
            'tipo_usuario' => 'alumno'
        ]);

        // 2. Vincular como alumno
        $alumnoModel->insert([
            'id_usuarios' => $id_usuario,
            'id_curso' => $this->request->getPost('id_curso') ?: null,
            'id_family' => $this->request->getPost('id_familia') ?: null
        ]);

        return redirect()->to('/alumnos')->with('exito', 'Alumno matriculado con éxito.');
    }

    public function eliminar($id) {
        $alumnoModel = new AlumnoModel();
        $alumno = $alumnoModel->find($id);
        if ($alumno) {
            $alumnoModel->delete($id);
            (new UserModel())->delete($alumno['id_usuarios']);
        }
        return redirect()->to('/alumnos')->with('exito', 'Alumno eliminado.');
    }
}
