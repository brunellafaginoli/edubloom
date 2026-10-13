<?= view('templates/header') ?>

<div style="display: flex; justify-content: center; align-items: center; min-height: 70vh; font-family: Arial, sans-serif;">
    <div style="width: 100%; max-width: 400px; padding: 30px; border: 1px solid #e0e0e0; border-radius: 12px; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        
        <h3 style="margin-top: 0; margin-bottom: 24px; color: #333333; text-align: center; font-size: 24px; font-weight: 600;">Iniciar Sesión</h3>

        <?php if (session()->getFlashdata('error')): ?>
            <div style="padding: 12px; margin-bottom: 20px; border: 1px solid #f5c2c7; border-radius: 6px; background-color: #f8d7da; color: #842029; font-size: 14px;"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        
        <?php if (session()->getFlashdata('exito')): ?>
            <div style="padding: 12px; margin-bottom: 20px; border: 1px solid #badbcc; border-radius: 6px; background-color: #d1e7dd; color: #0f5132; font-size: 14px;"><?= session()->getFlashdata('exito') ?></div>
        <?php endif; ?>

        <!-- 1. Formulario con método POST hacia la ruta 'login' -->
        <form action="<?= base_url('login') ?>" method="POST">
            
            <div style="margin-bottom: 20px;">
                <!-- 1.1 CORRECCIÓN: name="gmail" e id="gmail" -->
                <label for="gmail" style="display: block; margin-bottom: 8px; font-weight: 500; color: #555555; font-size: 14px;">Correo Electrónico:</label>
                <input type="email" id="gmail" name="gmail" required placeholder="ejemplo@correo.com" style="width: 100%; padding: 10px 12px; border: 1px solid #cccccc; border-radius: 6px; box-sizing: border-box; font-size: 15px; transition: border-color 0.2s;">
            </div>
            
            <div style="margin-bottom: 24px;">
                <!-- 1.2 CORRECCIÓN: name="contraseña" e id="contraseña" -->
                <label for="contraseña" style="display: block; margin-bottom: 8px; font-weight: 500; color: #555555; font-size: 14px;">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required placeholder="Ingresa tu contraseña" style="width: 100%; padding: 10px 12px; border: 1px solid #cccccc; border-radius: 6px; box-sizing: border-box; font-size: 15px;">
            </div>
            
            <!-- 1.3 Botón para enviar el formulario -->
            <button type="submit" style="background-color:#63172a; color: white; padding: 12px; border: none; border-radius: 6px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold; transition: background-color 0.2s;">Ingresar</button>
            
        </form>
        
        <div style="margin-top: 20px; text-align: center; font-size: 14px; color: #666666;">
            <!-- 2. Enlace para redirigir a 'register' -->
            <p style="margin: 0;">¿No tienes una cuenta? <a href="<?= base_url('register') ?>" style="color: #007bff; text-decoration: none; font-weight: 500;">Regístrate aquí</a></p>
        </div>
    </div>
</div>

<?= view('templates/footer') ?>
