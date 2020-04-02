<?php 

extract($_REQUEST);

if ($variable==1) {
	# buscando el valor de X
	$result=((2*pow($var2,3))-2)/4;
	echo "El valor de X es: ".$result;
} else {
	#buscar el valor de Y
	$result=pow((4*$var2 + 2)/2,1/3);
	echo "El valor de Y es: ".$result;
}






?>


