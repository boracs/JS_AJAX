<?php

$fichero = 'peliculas.json';

//$fichero =  $_GET["fichero"];

if (file_exists($fichero)) {
	$output = file_get_contents($fichero);
	print ($output);
}
else {
	print("No existe el fichero");
}
?>

