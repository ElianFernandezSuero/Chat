<?php
include ("Config/config.php");

if($_POST) {
    $user = $_POST['lognom'];
    $contra = $_POST['logcontra'];

    $q = "SELECT * FROM user01 WHERE user = '". $user ."' AND pass = '". $contra ."' ";
    $query = mysqli_query($conn, $q);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['user'] = $row['user'];
        header('location:Homec/home.php');
    } else {
        echo "<script> alert('El nombre o la contraseña están incorrectos.'); </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link type=text/css rel=stylesheet href= styles.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&family=Inconsolata:wght@200&family=Inria+Sans:wght@300&family=Istok+Web&family=Poppins:wght@300&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&family=Sarabun:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
<body>
    <div id="FormularioCont">
        <div class="container-log">
            <h2 class="container_title">Iniciar Sesion</h2>
                <form action="" method="POST" class="container_form">
                    <label for="" class="container_label"></label>
                    <input name="lognom" type="text" class="container_input" placeholder="Usuario" >
                    <br>
                    <br>
                    <br>
                    <label for="" class="container_label"></label>
                    <input name="logcontra"type="password" class="container_input" placeholder="Contraseña">
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="LOG IN" id="boton1" style="width: 41.5%;" >
                </form>
                <a href="register.php"><label class="container-regis">Registrarse</label></a>

            </div>
    </div>
</body>
</html>