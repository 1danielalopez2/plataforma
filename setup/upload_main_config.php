<?php 

include '../conexion.php';

//Datos institucion
$nombre = $_POST['nombre'];
$lema = $_POST['lema'];
$cargarEscudo = ($_FILES['escudo']['tmp_name']);
$escudo = addslashes(file_get_contents($cargarEscudo));
$color1 = $_POST['color1'];
$color2 = $_POST['color2'];
$color3 = $_POST['color3'];
$direccion = $_POST['direccion'];
$email_ins = $_POST['email_ins'];
$telefono_ins = $_POST['telefono_ins'];
//Datos administrador
$tipo_documento = $_POST['tipo_documento'];
$id = $_POST['id'];
$nombres_admin = $_POST['nombres_admin'];
$apellidos_admin = $_POST['apellidos_admin'];
$email_admin = $_POST['id'];
$pass_admin = $_POST['pass_admin'];
$direccion_admin = $_POST['direccion_admin'];
$telefono_admin = $_POST['telefono_admin'];
$date_admin = $_POST['date_admin'];
$cargarFoto = ($_FILES['foto_admin']['tmp_name']);

$folder = "../usuarios";

mkdir($folder);

$folder2 = $folder . "/" . $id;
mkdir($folder2);

$nombre_imagen = $_FILES['foto_admin']['name'];
$tipo_imagen= $_FILES['foto_admin']['type'];
$tamano_imagen = $_FILES['foto_admin']['size'];

$carpeta_destino =$folder2;
move_uploaded_file($_FILES['foto_admin']['tmp_name'], $carpeta_destino."/".$id.".jpg");
$foto_admin = "usuarios/".$id.".jpg";

include 'colortable.php';

$sq = $conexion -> prepare("INSERT INTO datos_institucion(escudo, nombre, color1, color2, color3, descripcion, email, telefono) VALUES ('$escudo', '$nombre', '$color1', '$color2', '$color3', '$lema', '$email_ins', '$telefono_ins')");
$sq->execute();

$sq2 = $conexion->prepare("INSERT INTO tipo_usuario(nombre) VALUES('administrador')");
$sq2 -> execute();

$sq3 = $conexion->prepare("INSERT INTO usuario(id, nombres, apellidos, email, tipo_usuario, pass, lugar_nacimiento, fecha_nacimiento, direccion, telefono, foto, tipo_documento) VALUES('$id','$nombres_admin','$apellidos_admin', '$email_admin',0, '$pass_admin', 'asd', '$date_admin', '$direccion_admin', '$telefono_admin', '$foto_admin', '$tipo_documento')");
$sq3 -> execute();

header('Location: ../');
 ?>