<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Edubloom</title>
    <style>
        /* Reseteo básico para asegurar que no haya márgenes rebeldes */
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        /* Contenedor principal: le damos un espacio abajo para que el footer no tape el contenido al hacer scroll */
        main {
            padding-bottom: 80px;
            box-sizing: border-box;
        }

        /* ==========================================
           PIE DE PÁGINA FIJO ABAJO Y AL 100% DE ANCHO
           ========================================== */
        .footer-bordo {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%; /* Ocupa toda la pantalla de lado a lado */
            z-index: 9999; /* Se asegura de quedar por encima de cualquier fondo */
           
            background-color: #4a121a; /* Tono bordo */
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            font-size: 15px;
            font-weight: bold;
           
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            padding: 18px 20px;
            box-sizing: border-box;
        }

        /* Bloques de información (texto + icono lateral) */
        .footer-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Icono de barra con círculos al lado de los textos */
        .custom-icon {
            width: 2px;
            height: 24px;
            background-color: #ffffff;
            position: relative;
        }

        .custom-icon::before,
        .custom-icon::after {
            content: '';
            position: absolute;
            width: 5px;
            height: 5px;
            background-color: #ffffff;
            border-radius: 50%;
            left: -1.5px;
        }
        .custom-icon::before { top: -2px; }
        .custom-icon::after { bottom: -2px; }

        /* Líneas divisorias grandes que separan las secciones */
        .footer-divider {
            width: 2px;
            height: 40px;
            background-color: #ffffff;
            position: relative;
        }

        /* Círculos en los extremos de las líneas divisorias */
        .footer-divider::before,
        .footer-divider::after {
            content: '';
            position: absolute;
            width: 6px;
            height: 6px;
            background-color: #ffffff;
            border-radius: 50%;
            left: -2px;
        }
        .footer-divider::before { top: -3px; }
        .footer-divider::after { bottom: -3px; }
    </style>
</head>
<body>

    <main>
        <!-- Coloca aquí el contenido del centro de tu página (ej. Bienvenido a Edubloom) -->
    </main>

    <!-- PIE DE PÁGINA BORDO -->
    <footer class="footer-bordo">
        <div class="footer-divider"></div>

        <div class="footer-item">
            <span>@intitutotecnicoriotercero</span>
        </div>
       
        <div class="footer-divider"></div>
       
        <div class="footer-item">
            <span>2 de abril 1175</span>
        </div>
       
        <div class="footer-divider"></div>
       
        <div class="footer-item">
            <span>03571-643828</span>
        </div>
       
        <div class="footer-divider"></div>
    </footer>

</body>
</html>
