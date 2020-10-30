<!DOCTYPE html>
<html lang="eu">
<head>
<link rel="stylesheet" type="text/css" href="../resources/css/estilos.css"/>

<meta name="csrf-token" content="{{ csrf_token() }}">
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
  <img src="{{ asset('Imagenes/logo.png') }}" alt="logo" />
</div>

<article>
  <form method="post" action ="{{ route('prodTiendas') }}" name="formulario">
    @csrf

    <select name="seleccionarTienda">
      @foreach($tiendas as $tienda)
        <option value="{{$tienda->id}}">{{$tienda->nombre}}</option>
      @endforeach()
    </select>

    <input type='submit' value="Seleccionar" name="botonForm">

  </form>

  <table id ="taula">
    <tr>
      <th>Nombre</th>
      <th>Descipcion</th>
      <th>Imágen</th>
      <th>Enlace</th>
    </tr>
  @if(!isset($productosTienda))
    @foreach($productos as $item)
      <tr>
        <td>{{$item->nombre}}</td>
        <td>{{$item->descripcion}}</td>
        <td><img src="./Imagenes/{{$item->imagen}}" width="200px"/></td>
        <td><a href="{{$item->enlaces_videos}}">{{$item->descripcion}}</a></td>
      </tr>
    @endforeach()
  @else
    @foreach($prodTienda as $prod)
      <tr>
        <td>{{$prod->nombre}}</td>
        <td>{{$prod->descripcion}}</td>
        <td><img src="./Imagenes/{{$prod->imagen}}" width="200px"/></td>
        <td><a href="{{$item->enlaces_videos}}">{{$prod->descripcion}}</a></td>
      </tr>
    @endforeach()
  @endif()
</table>

</article>

<footer>
  <a href="http://www.facebook.com"><img src="{{ asset('Imagenes/logoFacebook.png') }}" alt="logo" width="45px" height="45px" /><label style="color:white">Facebook</label><a>
  <a href="http://www.instagram.com"><img src="{{ asset('Imagenes/logoInstagram.png') }}" alt="logo" width="45px" height="45px" /><label style="color:white">Instagram</label><a>
  <a href="http://www.twitter.com"><img src="{{ asset('Imagenes/logoTwitter.png') }}" alt="logo" width="45px" height="45px" /><label style="color:white">Twitter</label><a>
</footer>

</body>

</html>
