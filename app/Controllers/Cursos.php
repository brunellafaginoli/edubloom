<?php

namespace App\Controllers;

use App\Models\CursoModel;
use App\Models\PreceptoresModel;

class Cursos extends BaseController
{
    // Mostrar listado de cursos
    public function index()
    {
        $cursoModel = new CursoModel();
        // Traemos los cursos (puedes unir tablas más adelante para ver el preceptor)
        $data['cursos'] = $cursoModel->findAll();
        return view('cursos/index', $data);
    }

    // Formulario para crear un curso
    public function crear()
    {
        $preceptorModel = new PreceptoresModel();
        // Traemos los preceptores para poder asignarlos en un select del formulario
        $data['preceptores'] = $preceptorModel->findAll();
        return view('cursos/crear', $data);
    }

    // Guardar en la BD
    public function guardar()
    {
        $rules = [
            'curso'    => 'required|min_length[1]',
            'division' => 'required|min_length[1]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errores', $this->validator->getErrors());
        }

        $cursoModel = new CursoModel();
        $cursoModel->insert([
            'curso'        => $this->request->getPost('curso'),
            'division'     => $this->request->getPost('division'),
            'id_preceptor' => $this->request->getPost('id_preceptor') ?: null // Si viene vacío lo guarda como NULL
        ]);

        return redirect()->to('/cursos')->with('exito', 'Curso creado con éxito.');
    }

    // Formulario para editar
    public function editar($id)
    {
        $cursoModel = new CursoModel();
        $preceptorModel = new PreceptoresModel();

        $data['curso'] = $cursoModel->find($id);
        $data['preceptores'] = $preceptorModel->findAll();

        if (!$data['curso']) {
            return redirect()->to('/cursos')->with('error', 'El curso no existe.');
        }

        return view('cursos/editar', $data);
    }

    // Actualizar en la BD
    public function actualizar($id)
    {
        $rules = [
            'curso'    => 'required|min_length[1]',
            'division' => 'required|min_length[1]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errores', $this->validator->getErrors());
        }

        $cursoModel = new CursoModel();
        $cursoModel->update($id, [
            'curso'        => $this->request->getPost('curso'),
            'division'     => $this->request->getPost('division'),
            'id_preceptor' => $this->request->getPost('id_preceptor') ?: null
        ]);

        return redirect()->to('/cursos')->with('exito', 'Curso actualizado con éxito.');
    }

    // Eliminar de la BD
    public function eliminar($id)
    {
        $cursoModel = new CursoModel();
        $cursoModel->delete($id);
        return redirect()->to('/cursos')->with('exito', 'Curso eliminado correctamente.');
    }
}
