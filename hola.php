<?php
// Autor: Rafa <rcasfer0805@g.educaand.es>
// Esto es un comentario
// El nombre por defecto es Mundo
require('./lib/holaMundo.php');
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>
