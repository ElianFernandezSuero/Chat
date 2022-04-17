<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link type=text/css rel=stylesheet href= styles.css> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&family=Inconsolata:wght@200&family=Inria+Sans:wght@300&family=Istok+Web&family=Sarabun&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/chat.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,300&family=Inconsolata:wght@200&family=Inria+Sans:wght@300&family=Istok+Web&display=swap" rel="stylesheet">
</head>
<body>
    
<!-- Js -->
    <script type="text/javascript">
		var comet = new AjaxPush('modulos/lis.php', 'modulos/msgchat.php');
		var n = new Function("return (Math.random()*190).toFixed(0)");

		var c = "rgb(" + n() + ", " + n() + "," + n() + ")";
		var template = "<strong style=' color: font-family: 'Poppins', sans-serif; background: #333; color: #fff; border-radius: 18px 18px 0 18px; "+ c +" '>" + 'Elian' + "</strong>: ";

		comet.connect(function(data) { $("#history").append(data.message) + "<br>"; });

		var send = function() {
			comet.doRequest({ message: template + $("#message").val() + "<br>" }, function(){
				$("#message").val('').focus();
			})
		}
	</script>
<!-- Js -->

        <div id="Contenedorchat">
        <div id="chatslaterales">
            <img src="iconos/Ellipse1.png" alt="usuario" id="iconusuario" style="cursor: pointer;">
            <img src="iconos/Menu.png" alt="abremenu"id="iconmenu"style="cursor: pointer;">
            <br>
            <img src="iconos/Buscar.png" alt="Buscador de grupos"id="iconbuscar"style="cursor: pointer;">
            <img src="iconos/Ellipse2.png" alt="Grupo"id="iconusuario2"style=" cursor: pointer;">
            <img src="iconos/Ellipse2.png" alt="Grupo"id="iconusuario2"style=" cursor: pointer;">
            <img src="iconos/Ellipse2.png" alt="Grupo"id="iconusuario2"style=" cursor: pointer;">
            <img src="iconos/Ellipse2.png" alt="Grupo"id="iconusuario2"style=" cursor: pointer;">
        </div>
        <div id="history" style="margin-left: 150px; margin-top: 0px; position:relative; top:20%; min-height: 500px; max-height: 500px; overflow-y: auto;"></div>
        
        <div id="titulodgrupo">

        </div>

        <form action="" style="position: relative;bottom: 12.5;bottom: 14%;">
        <div id="contenedordetexto">
            <div id="inputs" style="padding-left: 90px;width: 100%;padding-bottom: 7px;">
                
                <img src="iconos/adjunto1.svg" alt="insertar SVG con la etiqueta image" style="margin-left: 16px;"> 

                <img src="iconos/emoji1.svg" alt="insertar SVG con la etiqueta image" style="margin-left: 18px; margin-right: 18px;">

                <input type="text" autofocus="" autocomplete="off" placeholder=" Escribe tu mensaje..." id="message" style="outline: none; position:relative; bottom: 50%; padding-left: 20px; border: 0px; width: 80%; height: 60%;margin-left: ;border-radius:10px;bottom: 11px; background: #2E2F34; color:#DCDCDC; font-family: 'Sarabun', sans-serif; font-size: 16px;">
                
                <img src="iconos/enviar.svg" onclick="send()" onkeyup="Enviar" type="submit" id="Buscar" alt="insertar SVG con la etiqueta image" style="margin-left: 16px; margin-top:18px; cursor: pointer;">
            </div>
        </div>
        </form>

    </div>
</body>
</html>