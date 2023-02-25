<?php 

$uri = explode('/',$_SERVER['REQUEST_URI']);

if($_GET['v'] == $uri[2].'/oscarleuro'){

    echo 'estos son los datos de Óscar Leuro';


}

?>


<h1>Los Usuarios</h1>

<a href="<?php path2('oscarleuro') ?>">Oscar Leuro</a>

