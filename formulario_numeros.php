
<!DOCTYPE html>
<html>
<head>
	<title>Formulario de números</title>
	<script type="text/javascript" src="jquery-1.12.4.min.js"></script>
</head>
<body>
<form action="recibir_numeros.php" name="form" method="POST">
	<table>
		<tr>
			<th colspan="2">Números --><input type="button" name="add" id="add" value="ADD" style="background-color: #A80FE0"></th>
		</tr>
		<tr>
			<td>Número Primo</td>
			<td>
				<input type="number" name="num1" id="num1" required="required" title="Ingrese un número primo">
			</td>
		</tr>
		<tr>
			<td>Par Positivo</td>
			<td>
				<input type="number" name="num2" required="required" title="Ingrese un número par positivo">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<table id="otros_campos">
					
				</table>
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

<script type="text/javascript">
	console.log('cesar characo');
	/*$("#num1").on('keyup',function(event){
		var valor1=event.target.value;
		console.log(valor1);
	});*/
	var i=1;
	$("#add").on('click',function(event){

		$("#otros_campos").append('<tr id="f1'+i+'"><td>Número Primo</td><td><input type="number" name="num1" id="num1" required="required" title="Ingrese un número primo"></td></tr><tr id="f2'+i+'"><td>Par Positivo</td><td><input type="number" name="num2" required="required" title="Ingrese un número par positivo"><input type="button" name="delete" id="delete" style="background-color: red; color:white;" value="DELETE" onclick="eliminar_campos('+i+')"></td></tr>');

		i++;
	});
	function eliminar_campos(i) {
		var nombre_f1="#f1";
		var num="";
		//---
		var num_f1=i;
		num=num_f1.toString();
		var f1=nombre_f1.concat(num);
		$(""+f1+"").empty();

		//------------------
		var nombre_f2="#f2";
		var num2="";
		//---
		var num_f2=i;
		num2=num_f2.toString();
		var f2=nombre_f2.concat(num2);
		$(""+f2+"").empty();
	}
</script>








