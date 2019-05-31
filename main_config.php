<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Configuracion inicial</title>
	<link rel="stylesheet" href="styles/config.css">
	<link rel="stylesheet" href="styles/botones.css">
	<link rel="stylesheet" href="styles/main.css">
</head>
<style>
	body{
		background-image: url(https://previews.123rf.com/images/malven/malven1405/malven140500114/28632430-resumen-textura-de-tela-%C3%A1spera-para-los-fondos-del-color-blanco.jpg);
		background-size: 30%;
	}
	.formulario{
		text-align: left;
		padding: 30px;
		box-sizing: border-box;
	}
	input{
		margin-bottom: 20px;
		height: 30px;
		padding: 10px;
		box-sizing: border-box;
	}
</style>
<body>
	<div class="contenedor">
		<div class="formulario" style="width: 100%;">
			<form action="">
			<h1>Datos institucion</h1>
			<h2>Datos basicos:</h2>
			<label for="nombre">Nombre de la institucion:</label>
			<input type="text" name="nombre">
			<label for="lema">Coloque una descripcion para su institucion o el PEI:</label>
			<input type="text" name="lema">
			<label for="escudo">Coloque el escudo de su institucion.:</label>
			<input type="file" name="escudo">
			<h3>Colores</h3>
			<label>Coloque la dirección de la institucion:</label>
			<input type="text" name="direccion">
			<label>Coloque el email de contacto de la institucion: </label>
			<input type="email" name="email_ins">
			<label>Coloque el telefono de la institucion: </label>
			<input type="text" name="telefono_ins">
			<hr>
			<h2>Datos administrador:</h2>
			<label>Tipo de documento:</label>
			<select name="tipo_documento">
				<option value="Cedula">Cedula de ciudadania</option>
				<option value="TI">Tarjeta de identidad</option>
			</select><br><br>
			<label>Coloque el documento del administrador:</label>
			<input type="text" name="id">
			<label>Coloque nombres del administrador:</label>
			<input type="text" name="nombres_admin">
			<label>	Coloque apellidos del administrador:</label>
			<input type="text" name="apellidos_admin">
			<label>Coloque email del administrador:</label>
			<input type="email" name="nombres_admin">
			<label>Coloque contraseña del administrador:</label>
			<input type="password" name="pass_admin" id="pass">
			<label>Confirme contraseña del administrador:</label>
			<input type="password" name="pass_admin_2" id="pass_2" onfocusout="myFunction()">
			<span id="span"></span>
			<br><br><br>
			<label>Direccion:</label>
			<input type="text" name="direccion_admin" >
			<label>Coloque fecha de nacimiento del administrador:</label>
			<input type="date" name="date_admin">
			<label>Coloque foto del administrador.:</label>
			<input type="file" name="foto_admin">
			</form>
		</div>
	</div>
<script>
	var span = document.getElementById('span');
	var pass = document.getElementById('pass');
	var pass_2 = document.getElementById('pass_2');
	function myFunction(){
		if (pass.value == pass_2.value) {
			span.style.color = 'green';
			span.innerHTML = 'Correcto';
		}else{
			span.style.color = 'red';
			span.innerHTML = 'No coinciden las contraseñas';
		}
	}	
</script>
</body>
</html>