<?php 

/*COMPREENDER O TAL DO AUTOLOAD COM NAMESPACES ALELUIA*/
define('CLASS_DIR','src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

//O autoloader identifica as pastas e subpastas e classes pelo namespace setado
$teste = new SON\Teste;
echo "<br>";
$conta = new SON\Conta\Conta;


?>