<?php 

/*COMPREENDER O TAL DO AUTOLOAD COM NAMESPACES ALELUIA*/
define('CLASS_DIR','src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

//O autoloader identifica as pastas e subpastas e classes pelo namespace setado

?>

<!--Estrutura padrão do HTML-->
<html>
    <head>
        <!-- Não esquece o tal do META -->
        <meta charset="utf-8">
        <title>Página de Estudo</title>
    </head>
    <body>
        <!-- HTML5 -->
        
        <!-- Topo -->
        <header>
            <h1>Menu</h1>
            
            <!-- Preciso pegar dinamicamente o menu pelo Admin-->
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
                <li>Item 4</li>
            </ul>
        </header>
        
        <!-- Conteúdo Central -->
        
        <!-- Preciso pegar dinamicamente o conteúdo central pelo Admin-->
        <section>
            <p>Conteúdo Index</p>
        </section>
        
        <!-- Rodapé -->
        <footer>
            <p>Todos os direitos reservados</p>
        </footer>      
    </body>
</html>