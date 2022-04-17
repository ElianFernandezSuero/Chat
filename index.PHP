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
    <link type=text/css rel=stylesheet href= styles2.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&family=Inconsolata:wght@200&family=Inria+Sans:wght@300&family=Istok+Web&family=Poppins:wght@300&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&family=Sarabun:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
<body>
<div class="wrapper">
    <section class="form login" style="
    position: relative;
    margin-left: 730px;
    top: 300px;
">
      <h2 style="
    margin-left: 130px;
">Inicia sesion</h2>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          
          <input type="text" class="container_input" name="email" placeholder="Ingresa tu email" required="" style="
    width: 400px;
    border-bottom-width: 20px;
    margin-bottom: 20px;
    outline: none;
">
        </div>
        <div class="field input">
          
          <input type="password" class="container_input" name="password" placeholder="Ingresa tu contraseña" required="" style="
    width: 400px;
    margin-bottom: 20px;
    outline: none;
">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input id="boton1" type="submit" name="submit" value="Ingresa" style="
    width: 420px;
">
        </div>
      </form>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>
</html>