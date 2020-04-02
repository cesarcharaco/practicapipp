<?php
extract($_REQUEST);
$cont=0;
for ($i=2; $i < $num1; $i++) { 
	if ($num1%$i==0) {
		$cont++;
	}
}
if ($cont==0) {
	//es primo
	if ($num2%2==0 && $num2>0) {
		# es par positivo
		$producto=$num1*$num2;
		echo "El producto entre el primo y el par positivo es: ".$producto."</br>";

		for ($i=1; $i < 5; $i++) { 
			for ($j=1; $j < 5; $j++) { 
				$producto+=$i*$j;
			}
		}
		echo "El acumulativo de $i * $j en el producto anterior es: ".$producto;

	} else {
		# no es par positivo
		?>
		<script type="text/javascript">
			alert("El segundo numero debe ser par positivo");
			window.location="formulario_numeros.php";
		</script>
		<?php
	}
	
}else{

	//no es primo
	?>
		<script type="text/javascript">
			alert("El primer numero debe ser primo");
			window.location="formulario_numeros.php";
		</script>
		<?php
}
?>