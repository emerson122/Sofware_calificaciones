<?php
//arreglo con mensajes que puede recibir
$messages = [
    "1" => "Credenciales incorrectas",
    "2" => "No ha iniciado sesión"
];

if (isset($_GET['err']) && is_numeric($_GET['err']) && $_GET['err'] > 0 && $_GET['err'] < 3)
    echo '<span class="error">' . $messages[$_GET['err']] . '</span>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet" />

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="./css/styles_login.css" />

    <title>Página Principal</title>
</head>

<body>
    <!-- Backgrounds -->

    <div id="login-bg" class="container-fluid">
        <div class="bg-img"></div>
        <div class="bg-color"></div>
    </div>
    <div class="container" id="login">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="login">
                    <h1>Inicio de Sesión</h1>
                    <hr />
                    <form method="post" class="form" action="login_post.php">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Nombre del Usuario" name="username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresar Contraseña" name="password" />
                        </div>

                        <br />
                        <button type="submit" class="btn btn-lg btn-block btn-success">
                            Ingresar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>