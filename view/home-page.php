<?php
    session_start();
    require_once '../app/connection.php';
    $connection = connection_db();
    $u_email = $_SESSION['user'];
    $sql = "SELECT u_names, u_first_surname FROM users_table WHERE u_email = '$u_email'";
    $data = mysqli_query($connection, $sql);
    while($show_data = mysqli_fetch_assoc($data)) {
        $user_names = $show_data['u_names'];
        $user_first_surname = $show_data['u_first_surname'];
    }
    if(isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <?php
                require_once '../app/config.php';
                require_once '../app/dependencies.php';
    ?>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Image and text -->
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="../raw/img/cloud_weather_cloudy_sky.svg"
                            width="30" height="30" class="d-inline-block align-top" alt="">
                        Bootstrap
                    </a>
                    <div class="text-right">
                        <a href="../control/logout.php">Salir</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="jumbotron text-center shadow bg-light">
                    <h1 class="display-4">Hola, <?php echo $user_names . ' ' . $user_first_surname;?> bienvenido!</h1>
                    <hr class="my-4">
                    <p>Esto es una aplicación que te permite, realizar muchas cosas, pero solo es un ejemplo. XD</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg m-4" href="#" role="button">Aprender más</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
    } else {
        header('location:../index.php');
    }
?>