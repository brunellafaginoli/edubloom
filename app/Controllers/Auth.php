<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    // 1. REGISTRO DE USUARIO
    public function register()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        return view('auth/register');
    }

    // 2. PROCESO DE REGISTRO DE USUARIO
    public function processRegister()
    {
        // CORRECCIÓN: Ahora valida contra la tabla "usuarios" y el campo "gmail"
        $rules = [
            'nombre'     => 'required|min_length[2]',
            'apellido'   => 'required|min_length[2]',
            'gmail'      => 'required|valid_email|is_unique[usuarios.gmail]',
            'contraseña' => 'required|min_length[8]'
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errores', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        // CORRECCIÓN: Los nombres de los campos coinciden con tu estructura SQL
        $userModel->insert([
            'nombre'       => $this->request->getPost('nombre'),
            'apellido'     => $this->request->getPost('apellido'),
            'gmail'        => $this->request->getPost('gmail'),
            'contraseña'   => password_hash(
                $this->request->getPost('contraseña'),
                PASSWORD_DEFAULT
            ),
            'tipo_usuario' => 'client' // Cambiado de 'role' a 'tipo_usuario'
        ]);

        return redirect()
            ->to('/login')
            ->with('exito', 'Registro completado. Ahora podés iniciar sesión.');
    }

    // 3. INICIO DE SESIÓN DE USUARIO
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }

        return view('auth/login');
    }

    // 4. PROCESO DE INICIO DE SESIÓN
    public function processLogin()
    {
        $userModel = new UserModel();

        // CORRECCIÓN: Captura los inputs correctos del formulario
        $gmail = $this->request->getPost('gmail');
        $contraseña = $this->request->getPost('contraseña');

        // CORRECCIÓN: Busca por la columna 'gmail'
        $user = $userModel
            ->where('gmail', $gmail)
            ->first();

        // CORRECCIÓN: Verifica con la columna 'contraseña' e 'id_usuarios'
        if ($user && password_verify($contraseña, $user['contraseña'])) {

            session()->set([
                'id'         => $user['id_usuarios'],
                'nombre'     => $user['nombre'],
                'apellido'   => $user['apellido'],
                'gmail'      => $user['gmail'],
                'role'       => $user['tipo_usuario'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Correo o contraseña incorrectos.');
    }

    // 5. CIERRE DE SESIÓN
    public function logout()
    {
        session()->destroy();

        return redirect()
            ->to('/')
            ->with('exito', 'Sesión cerrada correctamente.');
    }
}

