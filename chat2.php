
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link type="text/css" rel="stylesheet" href="styleschat.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&amp;family=Inconsolata:wght@200&amp;family=Inria+Sans:wght@300&amp;family=Istok+Web&amp;family=Sarabun&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/chat.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&amp;family=Inconsolata:wght@200&amp;family=Inria+Sans:wght@300&amp;family=Istok+Web&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&family=Hind+Siliguri:wght@500&family=Inconsolata:wght@200&family=Inria+Sans:wght@300&family=Istok+Web&family=Poppins:wght@300&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&family=Sarabun:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <body>
<a href="php/logout.php?logout_id=833924743" class="logout"><</a>

<div id="Contenedorchat" style="margin-top: 0px;">
        <div id="chatslateralesopen">
        <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
            
            <br>
            <br>
            <br>

            <div class="wrapper">
      <section class="users">
        
      <div class="search" style="
    margin-bottom: 0px;
">
  
        <input type="text" src="" placeholder="Buscar grupo..." style="width: 400px;height: 50px;outline: none;background: #222327;padding-left: 20px;border: 0;color: white;font-family: 'Fira Sans', sans-serif;font-size: 16px;margin-top: 3px;padding-top: 0px;" class=""><button class="active" style="display: none;"><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">
    
        </div>
            
            </div>
        </div>
        
        </div>

    </div>
    <script src="javascript/users.js"></script>
    <script src="javascript/chat.js"></script>

</section></div></body></html>