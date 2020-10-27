<!DOCTYPE html>
<html lang="eu">
<head>
<link rel="stylesheet" type="text/css" href="../resources/css/estilos.css">

<meta charset="utf-8"/>

<title>EuskoDenda</title>
</head>


<body id="body">
    <nav id="menu">
          <ul>
              <li><a href="index.php">HOME</a></li>
              <li><a href="productos.php">PRODUCTOS</a></li>
              <li><a href="contacto.php">CONTACTO</a></li></li>
              <li><a href="admin">ADMIN</a></li>
          </ul>
     </nav>

<div id="logoprincipal">
  <img src="./Imagenes/logo.png" alt="logo" />
</div>

<article>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descipcion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($productos as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->descripcion}}</td>
    </tr>
  @endforeach()
  </tbody>
</table>

</article>

<footer>
  <a href="http://www.facebook.com"><img src="./Imagenes/logofacebook.png" alt="logo" width="45px" height="45px" /><label style="color:white">Facebook</label><a>
  <a href="http://www.instagram.com"><img src="./Imagenes/logoinstagram.png" alt="logo" width="45px" height="45px" /><label style="color:white">Instagram</label><a>
  <a href="http://www.twitter.com"><img src="./Imagenes/logotwitter.png" alt="logo" width="45px" height="45px" /><label style="color:white">Twitter</label><a>
</footer>

</body>

</html>
