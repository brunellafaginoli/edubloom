<?= view('templates/header') ?>

<div style="display: flex; justify-content: center; align-items: center; min-height: 80vh; font-family: Arial, sans-serif;">
    <div style="width: 100%; max-width: 400px; padding: 30px; border: 1px solid #e0e0e0; border-radius: 12px; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        
        <h3 style="margin-top: 0; margin-bottom: 24px; color: #333333; text-align: center; font-size: 24px; font-weight: 600;">Crear Nuevo Curso</h3>

        <?php if (session()->getFlashdata('errores')): ?>
            <div style="padding: 12px; margin-bottom: 20px; border: 1px solid #f5c2c7; border-radius: 6px; background-color: #f8d7da; color: #842029; font-size: 14px;">
                <ul style="margin: 0; padding-left: 20px;">
                <?php foreach (session()->getFlashdata('errores') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('cursos/guardar') ?>" method="POST">
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 500; font-size: 14px;">Año / Curso:</label>
                <input type="text" name="curso" value="<?= old('curso') ?>" required placeholder="Ej: 1er Año, 2do Año" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 500; font-size: 14px;">División:</label>
                <input type="text" name="division" value="<?= old('division') ?>" required placeholder="Ej: A, B, Única" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 500; font-size: 14px;">Asignar Preceptor (Opcional):</label>
                <select name="id_preceptor" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; background-color: white;">
                    <option value="">-- Sin Preceptor Asignado --</option>
                    <?php if(!empty($preceptores)): foreach($preceptores as $p): ?>
                        <option value="<?= $p['id_preceptor'] ?>" <?= old('id_preceptor') == $p['id_preceptor'] ? 'selected' : '' ?>>Preceptor ID: <?= $p['id_preceptor'] ?></option>
                    <?php endforeach; endif; ?>
                </select>
            </div>

            <button type="submit" style="background-color: #0f5132; color: white; padding: 12px; border: none; border-radius: 6px; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold;">Guardar Curso</button>
            <a href="<?= base_url('cursos') ?>" style="display: block; text-align: center; margin-top: 15px; color: #666; text-decoration: none; font-size: 14px;">Cancelar</a>
        </form>
    </div>
</div>

<?= view('templates/footer') ?>
