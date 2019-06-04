<?php 

include '../conexion.php';
$st = $conexion -> prepare("SELECT * FROM datos_institucion");
$st -> execute();
$fila = $st -> fetch();

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administrador inicial</title>
	<link rel="stylesheet" href="../styles/main_app.css">
	<link rel="image/x-icon" href="../Finallogo.png">
</head>
<style type="text/css">
	 .header{
	 	background-color: <?php echo $fila['color1'] ?>;
	 }
	 .aside{
	 	background-color: <?php echo $fila['color2'] ?>;
	 }
	 .aside hr{
	 	color: <?php echo $fila['color3'] ?>;
	 }
	 .header .separador{
		color: <?php echo $fila['color3'] ?>;
	}
</style>
<body>
	<div class="contenedor">
		<div class="header">
			<div class="izq">
				<div class="logo">
					<img src="data:image/jpg;base64,<?php echo base64_encode($fila['escudo']); ?>">
				</div>
				<div class="busqueda">
					<input type="text">
					<input type="submit" value="🔎">
				</div>
			</div>
			
			<div class="botones">
				<button>Jose Bermudez</button>
				<span class="separador">|</span>
				<button>Inicio</button>
				<span class="separador">|</span>
				<button>Mi salon</button>
				<span class="separador">|</span>
				<button>Tareas</button>
				<span class="separador">|</span>
				<button>🔔</button>
				<span class="separador">|</span>
				<button onclick="menu_show()" id="menu_btn1">▼</button>
				<button onclick="menu_hide()" id="menu_btn2">▲</button>
				<span class="espacio">    </span>
			</div>
		</div>
		<div class="body">
			<div class="aside">
				<h4>Jose Bermudez</h4><br>
				<hr>
				<h4>Yo</h4>
				<button onclick="mifuncion()">👨Mi perfil</button>
				<button>🧾Modificar mi informacion</button>
				<hr>
				<h4>Funciones</h4>
				<button>🎓Nuevo estudiante</button>
				<button>🎓Nuevo profesor</button>
				<button>🎓Nueva materia</button>
				<button>🎓Nuevo curso</button>
				<button>📧Enviar correos a usuarios</button>
				<button>📚Ver todas las bases de datos</button>
				<hr>
				<h4>Pagina principal</h4>
				<button>✏️Modificar pagina</button>
				<button>🛠️Opciones de la plataforma</button>
			</div>
			<div class="main">
				<div class="menu" id="menu">
					<button>Mi perfil</button>
					<button>Configuracion</button>
					<button>Cerrar sesión</button>
				</div>
				<h1>Bienvenido administrador</h1><br>
				<p>Aqui encuentra sus funciones:</p><br>
				<li>Nuevo estudiante</li>
				<li>Nuevo profesor</li>
				<li>Nueva materia</li>
				<li>Nuevo curso</li>
				<li>Ver bases de datos</li>
			</div>
		</div>
	</div>
<script type="text/javascript">
	function mifuncion(){
		location.href ="https://www.google.com/";
	}
	function menu_show(){
		document.getElementById('menu').style.display = 'block';
		document.getElementById('menu_btn1').style.display = 'none';
		document.getElementById('menu_btn2').style.display = 'inline';
	}
	function menu_hide(){
		document.getElementById('menu').style.display = 'none';
		document.getElementById('menu_btn1').style.display = 'inline';
		document.getElementById('menu_btn2').style.display = 'none';
	}
</script>
</body>
</html>