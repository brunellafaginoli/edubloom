<?= view('templates/header') ?>

<div class="row my-5">
    <div class="col text-center">
        <?php if (!session()->get('isLoggedIn')): ?>
            <h1 style="font-size: 48px; margin-bottom: 5px; font-weight: 800; color: #000; letter-spacing: 1px;">
        BIENVENIDO A EDUBLOOM
    </h1>
    <p style="font-size: 18px; font-weight: bold; margin-top: 0; color: #000; letter-spacing: 0.5px; text-align:center">
        INICIÁ SESIÓN O REGISTRATE PARA COMENZAR
    </p>
        <?php endif; ?>
    </div>
</div>

<?= view('templates/footer') ?>
<div style="text-align: center;">
</div>