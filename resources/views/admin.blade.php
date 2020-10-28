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


	@foreach($admins as $item)
		<table id="taula">
  			<tr>
    			<td>{{$item->imagen}}</td>
				<td>

					{{$item->nombre}} 
					<br><br> 
					
					{{$item->descripcion}}
				</td>
				<td>
					<button>
						<a href="{{ route('gestion', $item)}}">
							Editar
						</a>
					</button>
				</td>
				<td><form action="quitar" method="post">
						<input type="submit" value="Borrar"/>
					</form>
				</td>
  			</tr>

		</table>
		@endforeach()


<table id="taula">
<tr>
<td><div id="register">

		<h1>Introduze un nuevo producto</h1>
			<form action= "meter-datos.php" method="POST">
				<label>Nombre: </label>
					<input type="text" name="nombre"/><br><br>
				<label>Descripcion: </label>
					<input type="text" name="descripcion"/><br><br>
				<label>Imagen </label>
					<input type="text" name="imagen"/><br><br>
				<label>videos o enlaces: </label>
					<input type="text" name="enlaces_videos"/><br><br>
           	 <input type="submit" value="Añadir producto"/>
			</form>
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

</body>
</html>
