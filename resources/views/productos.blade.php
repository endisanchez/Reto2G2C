<!DOCTYPE html>
<html lang="eu">
<head>
<link rel="stylesheet" type="text/css" href='{{ asset("css/estilos.css") }}'/>

<meta charset="utf-8"/>

<title>EuskoDenda</title>
</head>

<body id="body">
  <nav id="menu">
    <ul>
        <li><a href="index">HOME</a></li>
        <li><a href="productos">PRODUCTOS</a></li>
        <li><a href="contacto">CONTACTO</a></li></li>
        <li><a href="admin">ADMIN</a></li>
    </ul>
</nav>

<div id="logoprincipal">
  <img src="./Imagenes/logo.png" alt="logo" />
</div>

<article>

  <select id="desptiendas">

  </select>

  <table id ="taula">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Descipcion</th>
      <th>Imágen</th>
      <th>Enlace</th>
    </tr>
  @foreach($productos as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->descripcion}}</td>
      <td><img src="./Imagenes/{{$item->imagen}}" width="200px"/></td>
      <td><a href="{{$item->enlaces_videos}}">{{$item->descripcion}}</a></td>
    </tr>
  @endforeach()
</table>

</article>

<footer>
  <a href="http://www.facebook.com"><img src="./Imagenes/logofacebook.png" alt="logo" width="45px" height="45px" /><label style="color:white">Facebook</label><a>
  <a href="http://www.instagram.com"><img src="./Imagenes/logoinstagram.png" alt="logo" width="45px" height="45px" /><label style="color:white">Instagram</label><a>
  <a href="http://www.twitter.com"><img src="./Imagenes/logotwitter.png" alt="logo" width="45px" height="45px" /><label style="color:white">Twitter</label><a>
</footer>

</body>

</html>
