<!DOCTYPE html>
<html lang="eu">
<head>
<link rel="stylesheet" type="text/css" href="../../resources/css/estilos.css">

<meta charset="utf-8"/>

<title>EuskoDenda</title>
</head>


<body id="body">
    <nav id="menu">
          <ul>
              <li><a href="../index">HOME</a></li>
              <li><a href="../productos">PRODUCTOS</a></li>
              <li><a href="../contacto">CONTACTO</a></li></li>
              <li><a href="../admin">ADMIN</a></li>
          </ul>
     </nav>

<div id="logoprincipal">
  <img src="./../Imagenes/logo.png" alt="logo" />
</div>

<article>

<table id="taula">
    <tr>
    <td><div id="register">
    
            <h1>Editar producto</h1>
                    <label>Id: </label>
                        <input type="text"  value="{{$prod->id}}"  readonly="readonly"/><br><br>
                    <label>Nombre: </label>
                        <input type="text" value="{{$prod->nombre}}"/><br><br>
                    <label>Descripcion: </label>
                        <input type="text" value="{{$prod->descripcion}}"/><br><br>
                    <label>Imagen: </label>
                        <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
                            <input type="file" name="imagen1" />
                            <input type="submit" name="subir-imagen" value="Enviar imagen" />
                        </form><br><br>
                    <label>Enlaces y videos: </label>
                        <input type="text" value="{{$prod->enlaces_videos}}"/><br><br>
                    <input type="submit" value="Añadir producto"/>
        </div>
    </td>
    </tr>
</table>

</article>

<footer>
  <a href="http://www.facebook.com/%22%3E"><img src="./../Imagenes/logofacebook.png" alt="logo" width="45px" height="45px" /><label style="color:white">Facebook</label><a>
  <a href="http://www.instagram.com/%22%3E"><img src="./../Imagenes/logoinstagram.png" alt="logo" width="45px" height="45px" /><label style="color:white">Instagram</label><a>
  <a href="http://www.twitter.com/%22%3E"><img src="./../Imagenes/logotwitter.png" alt="logo" width="45px" height="45px" /><label style="color:white">Twitter</label><a>
</footer>

</body>
</html>