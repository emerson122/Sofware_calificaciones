<!DOCTYPE html>
<?php
require 'functions.php';
$permisos = ['Administrador', 'Profesor', 'Padre'];
permisos($permisos);

?>
<html>

<head>
    <title>Inicio | Registro de Notas</title>

</head>

<body>
    <?php include("./Cabecera.php"); ?><br>


    <div class="body">
        <div class="panel">
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="https://images.vexels.com/media/users/3/157272/isolated/preview/e6d8b2a22f0f860af01343af96e94a8a-libros-apilados-vector.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Software de Calificaciones - Programación con Cachi :)
                </a>
            </nav>
            <?php
            if (isset($_GET['err'])) {
                echo '<h3 class="error text-center">ERROR: Usuario no autorizado</h3>';
            }
            ?>
            <hr>
            <h2 class="text-center"><br><a href="https://www.youtube.com/channel/UCH_e2jYPcA4Oq32f2c-796A">SUSCRIBETE A <br>PROGRAMACIÓN CON CACHI</a></h2>
            <br>
            <center><img src="https://images.vexels.com/media/users/3/157272/isolated/preview/e6d8b2a22f0f860af01343af96e94a8a-libros-apilados-vector.png" width="200px" height="200px"></center>
        </div>
    </div>
</body>
<?php include("./footer.php"); ?>

</html>