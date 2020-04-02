<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<a href="PersonasControlador.php?operacion=index">Listar Personas</a><br>
<a href="../index.php">Inicio</a><br>
<form action="PersonasControlador.php" method="post" name="formulario">

<table>
	<tr>
		<td colspan="2">Registro de Personas:</td>
		
	</tr>
	<tr>
		<td>Nombres:</td><td><input type="text" name="nombres" id="nombres" placeholder="Ej: Martin José" title="Ingrese sus nombres"></td>

	</tr>
	<tr>
		<td>Apellidos:</td><td><input type="text" name="apellidos" id="apellidos" placeholder="Ej: Perez Salcedo" title="Ingrese sus apellidos"></td>
		
	</tr>
	<tr>
		<td>Cédula:</td><td><input type="number" name="cedula" id="cedula" placeholder="Ej: 12345678" title="Ingrese sus cédula"></td>
		
	</tr>
	<tr>
		<td>
			<input type="hidden" name="operacion" value="guardar">
			<input type="submit" name="enviar" value="Enviar"></td>
	</tr>
</table>
</form>
</body>
</html>