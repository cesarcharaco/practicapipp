<!DOCTYPE html>
<html>
<head>
	<title>Formulario Ecuación</title>
</head>
<body>
<form name="form" action="recibir_variables.php" method="post">
<table>
	<tr>
		<th colspan="2">Formulario</th>
	</tr>
	<tr>
		<td>Variable a Buscar</td><td>
			<input type="radio" checked="checked" name="variable" title="Seleccione si busca el valor de X" value="1"> X &nbsp;&nbsp;&nbsp;
			<input type="radio"  name="variable" title="Seleccione si busca el valor de Y" value="2"> Y
		</td>
	</tr>
	<tr>
		<td>Valor de la Otra variable</td><td>
			<input type="number" required="required" name="var2" title="Ingrese el valor de la otra variable">
		</td>
	</tr>
	<tr>
		<td><input type="submit" name="enviar" value="enviar"></td>
		<td><input type="reset" name="limpiar" value="limpiar"></td>
	</tr>
</table>
</form>
</body>
</html>