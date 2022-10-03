<!DOCTYPE html>
<?php
require 'functions.php';
//Define queienes tienen permiso en este archivo
$permisos = ['Administrador','Profesor'];
permisos($permisos);
//consulta las secciones
$secciones = $conn->prepare("select * from secciones");
$secciones->execute();
$secciones = $secciones->fetchAll();

//consulta de grados
$grados = $conn->prepare("select * from grados");
$grados->execute();
$grados = $grados->fetchAll();
?>
<html>
<head>
<title>Inicio | Registro de Notas</title>
    <meta name="description" content="Registro de Notas del Centro Escolar Profesor Lennin" />
    <link rel="stylesheet" href="css/style.css" />
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta name="description" content="Registro de Notas del Centro Escolar Profesor Lennin" />

</head>
<body>
<?php include("./Cabecera.php"); ?><br>

<div class="body">
    <div class="panel">
            <h4>Registro de Alumnos</h4>
            <form method="post" class="form" action="procesaralumno.php">
                <label>Nombres</label><br>
                <input type="text" required name="nombres" maxlength="45">
                <br>
                <label>Apellidos</label><br>
                <input type="text" required name="apellidos" maxlength="45">
                <br><br>
                <label>No de Lista</label><br>
                <input type="number" min="1" class="number" name="numlista">
                <br><br>
                <label>Sexo</label><br><input required type="radio" name="genero" value="M"> Masculino
                <input type="radio" name="genero" required value="F"> Femenino
                <br><br>
                <label>Grado</label><br>
                <select name="grado" required>
                    <?php foreach ($grados as $grado):?>
                        <option value="<?php echo $grado['id'] ?>"><?php echo $grado['nombre'] ?></option>
                    <?php endforeach;?>
                </select>
                <br><br>
                <label>Sección</label><br>

                    <?php foreach ($secciones as $seccion):?>
                        <input type="radio" name="seccion" required value="<?php echo $seccion['id'] ?>">Sección <?php echo $seccion['nombre'] ?>
                    <?php endforeach;?>

                <br><br>
                <button type="submit" name="insertar">Guardar</button> <button type="reset">Limpiar</button> <a class="btn-link" href="listadoalumnos.view.php">Ver Listado</a>
                <br><br>
                <!--mostrando los mensajes que recibe a traves de los parametros en la url-->
                <?php
                if(isset($_GET['err']))
                    echo '<span class="error">Error al almacenar el registro</span>';
                if(isset($_GET['info']))
                    echo '<span class="success">Registro almacenado correctamente!</span>';
                ?>

            </form>
        <?php
        if(isset($_GET['err']))
            echo '<span class="error">Error al guardar</span>';
        ?>
        </div>
</div>

</body>

</html>