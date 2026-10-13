<?= view('templates/header') ?>

<div style="max-width: 800px; margin: 40px auto; padding: 20px; font-family: Arial, sans-serif;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="color: #333;">Gestión de Cursos</h2>
        <a href="<?= base_url('cursos/crear') ?>" style="background-color: #0f5132; color: white; padding: 10px 15px; text-decoration: none; border-radius: 6px; font-weight: bold; font-size: 14px;">+ Nuevo Curso</a>
    </div>

    <?php if (session()->getFlashdata('exito')): ?>
        <div style="padding: 12px; margin-bottom: 20px; border: 1px solid #badbcc; border-radius: 6px; background-color: #d1e7dd; color: #0f5132; font-size: 14px;"><?= session()->getFlashdata('exito') ?></div>
    <?php endif; ?>

    <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border-radius: 8px; overflow: hidden;">
        <thead>
            <tr style="background-color: #63172a; color: white; text-align: left;">
                <th style="padding: 12px 15px;">ID</th>
                <th style="padding: 12px 15px;">Curso / Año</th>
                <th style="padding: 12px 15px;">División</th>
                <th style="padding: 12px 15px; text-align: center;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($cursos)): foreach($cursos as $c): ?>
            <tr style="border-bottom: 1px solid #e0e0e0;">
                <td style="padding: 12px 15px; color: #555;"><?= $c['id_curso'] ?></td>
                <td style="padding: 12px 15px; font-weight: 500; color: #333;"><?= esc($c['curso']) ?></td>
                <td style="padding: 12px 15px; color: #555;"><?= esc($c['division']) ?></td>
                <td style="padding: 12px 15px; text-align: center;">
                    <a href="<?= base_url('cursos/editar/'.$c['id_curso']) ?>" style="color: #007bff; text-decoration: none; font-weight: bold; margin-right: 15px; font-size: 14px;">Editar</a>
                    <a href="<?= base_url('cursos/eliminar/'.$c['id_curso']) ?>" onclick="return confirm('¿Seguro querés eliminar este curso?')" style="color: #dc3545; text-decoration: none; font-weight: bold; font-size: 14px;">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; else: ?>
            <tr>
                <td colspan="4" style="padding: 20px; text-align: center; color: #888;">No hay cursos registrados todavía.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= view('templates/footer') ?>
