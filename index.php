<?php
require_once 'Exportable.php';
require_once 'Recurso.php';
require_once 'Libro.php';
require_once 'Revista.php';
require_once 'Video.php';


$libro = new Libro("Aprendiendo PHP", "978-3-16-148410-0");
$revista = new Revista("Tech Monthly", 42);
$video = new Video("Curso de PHP", 120);

echo $libro->getDescripcion();
echo "<br/>";
echo $revista->getDescripcion();
echo "<br/>";
echo $video->getDescripcion();

echo "<h2> Exportación</h2>";
echo $libro->exportar();
echo "<br/>";
echo "<pre>";
echo $video->exportar();
echo "</pre>";