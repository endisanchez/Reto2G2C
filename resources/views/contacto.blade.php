<!DOCTYPE html>
<html lang="eu">
<head>
<link rel="stylesheet" type="text/css" href="../resources/css/estilos.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">


<title>EuskoDenda</title>

<script type="text/javascript">

  function nuevoDiv(){
    var cuerpo = document.getElementById("enviado");

    var nuevodiv = document.createElement("div");
    var textodiv = document.createTextNode("Se ha enviado correctamente!");

    nuevodiv.appendChild(textodiv);
    cuerpo.appendChild(nuevodiv);
    document.innerHTML = document.innerHTML + '</br>' + nuevodiv + '</br>';
  }

</script>
</head>


<body id="body" style="background-image: url('./Imagenes/fondoAlter.png');">
    <nav id="menu">
        <ul>
            <li><a href="index">HOME</a></li>
            <li><a href="productos">PRODUCTOS</a></li>
            <li><a href="contacto">CONTACTO</a></li></li>
            <li><a href="admin">ADMIN</a></li>
        </ul>
     </nav>

<div id="logoprincipal">
  <img id="logo" src="./Imagenes/logo.png" alt="logo" />
</div>

<article id="caja">

    <table id="taula">
        <tr>
          <td><h2><u>Contacto</u></h2>
            <br>
            <p>Para contactar con nosotros:</p>
            <p> Tlf : 683288932 </p>
         <p> Correo electronico: Euskodenda@gmail.com </p>
       <p> Nuestra Ubicacion:</p>

        <div class="cuerpo">
            <iframe width="560" height="315" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.356734041938!2d-1.973229484390462!3d43.327723681433866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a54177007815%3A0x1679d61a85de3bee!2sCalle%20Jose%20Miguel%20Barandiaran%2C%2020013%20San%20Sebasti%C3%A1n%2C%20Gipuzkoa%2C%20Espa%C3%B1a!5e0!3m2!1ses!2sus!4v1603364379370!5m2!1ses!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0" id="googlemaps"></iframe>
            </div>
            <br>
          </td>
        </tr>
    </table>
</article>
<footer>
  <a href="http://www.facebook.com"><img class="redes" src="./Imagenes/logofacebook.png" alt="logo" width="45px" height="45px" /><label style="color:white">Facebook</label><a>
  <a href="http://www.instagram.com"><img class="redes" src="./Imagenes/logoinstagram.png" alt="logo" width="45px" height="45px" /><label style="color:white">Instagram</label><a>
  <a href="http://www.twitter.com"><img class="redes" src="./Imagenes/logotwitter.png" alt="logo" width="45px" height="45px" /><label style="color:white">Twitter</label><a>
</footer>
</body>
</html>
