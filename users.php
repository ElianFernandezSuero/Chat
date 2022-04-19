<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: chat2.php");
  }
?>
<?php include_once "chat2.php"; ?>
<body>

          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img style="position: relative;bottom: 891px;width: 60px;border-radius: 100%;left: 104px;z-index: 2;cursor: pointer;height: 60px;"src="php/images/<?php echo $row['img']; ?>" alt="">
          
    
  <script src="javascript/users.js"></script>

</body>
</html>
