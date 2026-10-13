<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edubloom</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #F7F4EB;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header-bordo {
            background-color: #5A1827;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
        }
        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
            font-weight: bold;
            font-size: 24px;
            letter-spacing: 1px;
            text-decoration: none;
            color: white;
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .btn-nav {
            background-color: #722435;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 4px;
            border: 1px solid rgba(255,255,255,0.2);
        }
        .btn-nav:hover {
            background-color: #8A2E42;
        }
        .btn-logout {
            background-color: #dc3545;
            border: 1px solid #dc3545;
        }
        .btn-logout:hover {
            background-color: #bd2130;
        }
        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .welcome-user {
            color: #F7F4EB;
            font-size: 14px;
            font-weight: 500;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- ENCABEZADO BORDO -->
    <header class="header-bordo">
        <a href="<?= base_url('/') ?>" class="logo-section">
            <img src="<?= base_url('images/logo.png') ?>" alt="Logo" style="height: 40px; width: 40px; border-radius: 50%;" />
            EDUBLOOM
        </a>
        <div class="nav-links">
            <?php if (session()->get('isLoggedIn')): ?>
                <!-- Enlaces del CRUD (Visibles solo al iniciar sesión) -->
                <a href="<?= base_url('usuarios') ?>" class="btn-nav">Usuarios</a>
                <a href="<?= base_url('cursos') ?>" class="btn-nav">Cursos</a>
                
                <!-- Mensaje de bienvenida y botón de salida -->
                <span class="welcome-user">Hola, <?= esc(strtok(session()->get('nombre') ?? '', ' ')) ?>!</span>
                <a href="<?= base_url('logout') ?>" class="btn-nav btn-logout">Salir</a>
            <?php else: ?>
                <!-- Botones públicos -->
                <a href="<?= base_url('register') ?>" class="btn-nav">Registrarte</a>
                <a href="<?= base_url('login') ?>" class="btn-nav">Ingresar</a>
            <?php endif; ?>
        </div>
    </header>

    <!-- Inicio del contenedor principal -->
    <main class="main-content">
