<?php

$numeros = array();
for ($i=0; $i <=15 ; $i++){
	$numeros[]=rand(1,1000);
}

foreach ($numeros as $key => $numeros ){
	if ($numeros%2==0) {
		echo 'A posiçao é: '.$key. 'os numeros sao: '.$numeros.' par';
	}
	else
	{
		echo 'A posiçao é: '.$key.'os numeros: '.$numeros.'impar';
	}
	echo "<br>";
}
?>