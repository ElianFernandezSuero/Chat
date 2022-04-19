<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: Homec/home.php");
  }
?>
<?php include_once "Homec/home.php"; ?>
<body>

          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          
          <div class="usuarioimg ">
          <img style="position: relative;bottom: 891px;width: 55px;border-radius: 100%;left: 104px;z-index: 2;cursor: pointer;border-top-width: 20px;margin-top: 3px;margin-left: 5px;" src="php/images/1650224994a.jpg" alt=""></div>
          <div class="wrapper">
          

  <script src="javascript/users.js"></script>

</body>
</html>
