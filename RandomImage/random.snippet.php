<?php
$snippetPath = $modx->config['base_path'] . 'assets/snippets/imgRandom/';
$pathFiles = $modx->config['base_path'] . 'assets/files/';
include_once($snippetPath.'imgRandom.php');

//Llamar al objeto
//variable para decirle en que folder debe de buscar
$dir = (isset($dir))? $dir : 'banners';

$swf = new imgRandom($pathFiles.$dir);

return $swf->getImg();
?>