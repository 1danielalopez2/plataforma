<?php 
echo "Si ve esto, porfavor de click <a href='../delete/index.php'>aqui</a> y coloque de nuevo los datos. Debe haber algun dato erroneo";
echo "<br><br><br><br>";
include '../conexion.php';
$stm = $conexion->prepare("
USE saoisoft;
CREATE TABLE tipo_usuario(id int, nombre varchar(255), PRIMARY KEY(id));
CREATE TABLE usuario(id int, nombres varchar(255), apellidos varchar(255), email varchar(255),tipo_usuario int, pass varchar(255),lugar_nacimiento varchar(255),fecha_nacimiento varchar(255),direccion varchar(255),telefono varchar(255),foto varchar(255),tipo_documento varchar(255),PRIMARY KEY(id), FOREIGN KEY(tipo_usuario) REFERENCES tipo_usuario(id));
CREATE TABLE relestudiantepadre(id int, estudiante int, padre int, madre int, PRIMARY KEY(id), FOREIGN KEY(estudiante) REFERENCES usuario(id), FOREIGN KEY(padre) REFERENCES usuario(id), FOREIGN KEY(madre) REFERENCES usuario(id));
CREATE TABLE salon(id int, nombre varchar(255), PRIMARY KEY(id));
CREATE TABLE materias(id int AUTO_INCREMENT, nombre varchar(255), PRIMARY KEY(id));
CREATE TABLE grado(id int, nombre varchar(255), PRIMARY KEY(id));
CREATE TABLE cursos(id int AUTO_INCREMENT, nombre varchar(255), materia int, grado int, PRIMARY KEY(id), FOREIGN KEY(materia) REFERENCES materias(id), FOREIGN KEY(grado) REFERENCES grado(id));
CREATE TABLE relprofesorcursos(id int, profesor int, cursos int, PRIMARY KEY(id), FOREIGN KEY(profesor) REFERENCES usuario(id), FOREIGN KEY(cursos) REFERENCES cursos(id));
CREATE TABLE relestudiantesalon(id int AUTO_INCREMENT, estudiante int, salon int, PRIMARY KEY(id), FOREIGN KEY(estudiante) REFERENCES usuario(id), FOREIGN KEY (salon) REFERENCES salon(id));
CREATE TABLE calificaciones(id int, curso int, estudiante int, documento_estudiante int, nota1 int, nota2 int, PRIMARY KEY(id), FOREIGN KEY(estudiante) REFERENCES usuario(id), FOREIGN KEY(curso) REFERENCES cursos(id));
CREATE TABLE datos_institucion(id int AUTO_INCREMENT, escudo longblob, nombre varchar(255), color1 varchar(255), color2 varchar(255), color3 varchar(255), descripcion longtext, email varchar(255), telefono int, PRIMARY KEY(id));
");
$stm -> execute();
if ($stm) {
	header('Location: main_config.php');
}
 ?>