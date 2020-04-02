<?php
extract($_REQUEST);
//$nombre=$_POST['nombre'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Recibiendo</title>
</head>
<body>
<strong>Recibiendo datos del formulario</strong><br>Ir al inicio <a href="index.php">Aquí</a>
<table width="100%" border="5" >
	<tr >
		<td>Nombre y apellido</td>
		<td><?=$nombre.", ".$apellido?>
		</td>
	</tr>
	<tr>
		<td>fecha de nacimiento</td>
		<td><?=$fecha_nac?></td>
		
	</tr>
	<tr>
		<td>tel&eacute;fono</td>
		<td></td>

		
	</tr>
	<tr>
		<td>G&eacute;nero</td>
		<td></td>
		
	</tr>
	<tr>
		<td>Profesi&oacute;n</td>
		<td>
		</td>

		
	</tr>
<tr>
	<td> Actividades recreativas</td>
	<td>
	Beisbol: <?=$beisbol?>
	</td>


</tr>
<tr>
	<td><strong>Direcci&oacute;n</strong></td>
	<td>
		
	</td>
</tr>
<tr>
	<td><strong>Color de ojos</strong></td>
	<td>
		
	</td>
</tr>
<tr>
	<td>Password</td>
	<td></td>
</tr>
<tr>
	<td>Correo</td>
	<td></td>
</tr>
<tr>
	<td>URL</td>
	<td></td>
</tr>
<tr>
	<td><strong>Foto</strong></td>
	<td></td>
</tr>
<tr>
	<td><strong>list de datalist</strong></td>
	<td>
	</td>
</tr>




</table>
</body>
</html>

<?php
include("../clasedb.php");
extract($_REQUEST);

class PersonasControlador
{
	
	static function controlador($operacion){
		$persona=new PersonasControlador();
	switch ($operacion) {
		case 'index':
			$persona->index();
			break;
		case 'registrar':
			//$persona->registrar();
			break;
		case 'guardar':
			//$persona->guardar();
			break;
		case 'modificar':
			//$persona->modificar();
			break;
		case 'actualizar':
			//$persona->actualizar();
			break;
		case 'eliminar':
			//$persona->eliminar();
			break;
		default:
			?>
				<script type="text/javascript">
					alert("No existe la ruta");
					window.location="PersonasControlador.php?operacion=index";
				</script>
			<?php
			break;
	}//cierre del switch
}//cierre de la funcion controlador
}//cierre de la clase PersonasControlador



?>





























