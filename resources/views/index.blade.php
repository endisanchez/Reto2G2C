<!DOCTYPE html>
<html lang="eu">
<head>
<link rel="stylesheet" type="text/css" href="../resources/css/estilos.css">

<meta charset="utf-8"/>

<title>EuskoDenda</title>


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

<article>

  <table id="taula">
      <tr>
        <td>
          <h2><u>EuskoDenda</u></h2>
          <p>Bienvenido a EuskoDenda! En nuestra página podrás encontrar distintos productos de los supermercados de nuestra zona.</p>


          <p>Información:</p>
    <button type="button" class="collapsible">Informacion</button>
    <div class="content">
  <p >Nuestra página ofrece productos de distintos supermercados en los que destacan productos de la zona. </p>
</div>

<p>Horarios:</p>
    <button type="button" class="collapsible">Horarios</button>
    <div class="content">
  <p >Lunes-Sabado: 08:00-14:00 / 16:00-20:30
      <br>
      Domingos: 09:00-14:40
  </p>
</div>

        </td>
      </tr>
  </table>

</article>

<footer>
  <a href="http://www.facebook.com/%22%3E"><img src="./Imagenes/logofacebook.png" alt="logo" width="45px" height="45px" /><label style="color:white">Facebook</label><a>
  <a href="http://www.instagram.com/%22%3E"><img src="./Imagenes/logoinstagram.png" alt="logo" width="45px" height="45px" /><label style="color:white">Instagram</label><a>
  <a href="http://www.twitter.com/%22%3E"><img src="./Imagenes/logotwitter.png" alt="logo" width="45px" height="45px" /><label style="color:white">Twitter</label><a>
</footer>


<script>
    var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>

</html>
