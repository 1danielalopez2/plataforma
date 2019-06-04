<?php 

include 'conexion.php';

if(isset($conexion)){
	//echo "No hay problemas";
}else{
	header('Location: setup/');
}
$st = $conexion -> prepare("SELECT * FROM datos_institucion");
$st -> execute();
$fila = $st -> fetch();

 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Inicio</title>
 	<link rel="stylesheet" href="styles/main.css">
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 	<link rel="image/x-icon" href="Finallogo.png">
 </head>
 <style>
 	 .header{
	 	background-color: <?php echo $fila['color1'] ?>;
	 }
 </style>
 <body>
 	<form action="#" method="POST">
 	<div class="contenedor">
 		<div class="header">
 			<div class="logo">
 				<img src="data:image/jpg;base64,<?php echo base64_encode($fila['escudo']); ?>">
 				<div class="nombre"><?php echo $fila['nombre']; ?></div>
 			</div>
 			<div class="login">
 					<div class="username">Usuario:<input type="text" name="username"></div>
 					<div class="password">Contraseña:<input type="password" name="password"></div>
 					<div class="submitdiv"> <input type="submit" value="Ingresar"></div>
 			</div>
 		</div>
 		<div class="main">
 			<h1>Bienvenido a SAOI-Soft CO.</h1>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur qui adipisci enim tempore nulla, neque autem ab sit culpa aut maiores, ipsum quos hic molestias asperiores nam tempora fugiat?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus vitae id est nemo non, ab ut optio dolorum, quod corrupti veritatis placeat quis, consectetur beatae minima ipsa et officiis! Illum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius atque illum est magni delectus ex, veniam quia repellendus quod voluptates quos reprehenderit repudiandae quis perferendis nisi sed corporis deserunt. Nulla.</p>
 			<hr style="color: #C80909">
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate accusantium laborum a culpa architecto hic ad, eius, corrupti cumque voluptates dolor, laboriosam dignissimos deleniti suscipit omnis ex alias! Ullam, quo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quos consectetur nisi eveniet neque minima vitae. Natus sequi aperiam, eius, quas voluptatum blanditiis in adipisci aliquam maxime? Voluptas, eveniet. Dolorem!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptates a dolorum itaque quis, neque reprehenderit, vel ipsa soluta alias excepturi, aperiam dolore cumque porro laborum error doloremque quo quisquam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quia, similique, quos, quasi eligendi error voluptas dolore dolorum adipisci hic atque velit provident quas nulla ea ut voluptates deserunt ipsa.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae omnis nihil debitis iusto animi! Impedit magni ad, doloribus, repudiandae voluptate magnam? Dolor fuga, beatae eligendi dolore repudiandae omnis maiores necessitatibus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, dicta, in. Dignissimos odit reprehenderit laboriosam, veniam nihil quia hic perspiciatis nam. Minima, cum. Placeat odit modi doloribus autem nemo beatae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ducimus cum necessitatibus quisquam iure, aliquam doloremque soluta perspiciatis nobis quasi. Perferendis laboriosam molestiae non, tenetur magnam ipsum modi deserunt autem!</p>
 		</div>
 		<div class="footer">
 			
 		</div>
 	</div>
 	</form>
 </body>
 </html>