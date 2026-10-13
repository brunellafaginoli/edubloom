<?= view('templates/header') ?>

<div style="display: flex; justify-content: center; align-items: center; min-height: 70vh; font-family: Arial, sans-serif;">
    <div style="width: 100%; max-width: 400px; padding: 30px; border: 1px solid #e0e0e0; border-radius: 12px; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
       
        <h3 style="margin-top: 0; margin-bottom: 24px; color: #333333; text-align: center; font-size: 24px; font-weight: 600;">Registro de Usuario</h3>

        <?php if (session()->getFlashdata('errores')): ?>
            <div style="padding: 12px; margin-bottom: 20px; border: 1px solid #f5c2c7; border-radius: 6px; background-color: #f8d7da; color: #842029; font-size: 14px;">
                <ul style="margin: 0; padding-left: 20px;">
                <?php foreach (session()->getFlashdata('errores') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- 1. Formulario con método POST hacia la ruta 'register' -->
        <form action="<?= base_url('register') ?>" method="POST">
           
            <div style="margin-bottom: 20px;">
                <!-- 1.1 Campo para ingresar el nombre -->
                <label for="nombre" style="display: block; margin-bottom: 8px; font-weight: 500; color: #555555; font-size: 14px;">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?= old('nombre') ?>" required placeholder="Tu nombre" style="width: 100%; padding: 10px 12px; border: 1px solid #cccccc; border-radius: 6px; box-sizing: border-box; font-size: 15px;">
            </div>

            <div style="margin-bottom: 20px;">
                <!-- 1.2 Campo para ingresar el apellido -->
                <label for="apellido" style="display: block; margin-bottom: 8px; font-weight: 500; color: #555555; font-size: 14px;">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="<?= old('apellido') ?>" required placeholder="Tu apellido" style="width: 100%; padding: 10px 12px; border: 1px solid #cccccc; border-radius: 6px; box-sizing: border-box; font-size: 15px;">
            </div>

            <div style="margin-bottom: 20px;">
                <!-- 1.3 CORRECCIÓN: name="gmail" e id="gmail" -->
                <label for="gmail" style="display: block; margin-bottom: 8px; font-weight: 500; color: #555555; font-size: 14px;">Correo Electrónico:</label>
                <input type="email" id="gmail" name="gmail" value="<?= old('gmail') ?>" required placeholder="ejemplo@correo.com" style="width: 100%; padding: 10px 12px; border: 1px solid #cccccc; border-radius: 6px; box-sizing: border-box; font-size: 15px;">
            </div>
           
            <div style="margin-bottom: 24px;">
                <!-- 1.4 CORRECCIÓN: name="contraseña" e id="contraseña" -->
                <label for="contraseña" style="display: block; margin-bottom: 8px; font-weight: 500; color: #555555; font-size: 14px;">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required placeholder="Crea una contraseña" style="width: 100%; padding: 10px 12px; border: 1px solid #cccccc; border-radius: 6px; box-sizing: border-box; font-size: 15px;">
            </div>
           
            <!-- 1.5 Botón para enviar el formulario -->
            <button type="submit" style="background-color:#63172a ; color: white; padding: 12px; border: none; border-radius: 6px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold;">Registrarse</button>
           
        </form>
       
        <div style="margin-top: 20px; text-align: center; font-size: 14px; color: #666666;">
            <!-- 2. Enlace para redirigir a 'login' si el usuario ya tiene cuenta -->
            <p style="margin: 0;">¿Ya tienes una cuenta? <a href="<?= base_url('login') ?>" style="color: #007bff; text-decoration: none; font-weight: 500;">Inicia sesión aquí</a></p>
        </div>
    </div>
</div>

<?= view('templates/footer') ?>
