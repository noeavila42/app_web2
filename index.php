<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
        .header img {
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Contenedor de imágenes en la parte superior -->
    <div class="header">
        <img src="iteshu.png" >
        <h1>Bienvenido al departamento de becas "ITESHU"</h1>
        <img src="LOGO-VERTICAL-TECNM.png" >
    </div>

    <form action="alimenticia.html" method="POST">
        <button type="submit">Beca Alimenticia</button>
    </form>

    <form action="aprovechamiento.html" method="POST">
        <button type="submit">Beca de Aprovechamiento</button>
    </form>

    <form action="egel.html" method="POST">
        <button type="submit">Beca para EGEL</button>
    </form>

    <form action="trabajadores_e_hijos.html" method="POST">
        <button type="submit">Trabajadores e Hijos</button>
    </form>


    <form action="inicio_secion_admin.html" method="POST">
        <button type="submit">ADMIN</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
