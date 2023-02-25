<?php



function active($url){


    $uri = explode('/',$_SERVER['REQUEST_URI']);


        if($uri[2] == $url){


            echo 'active';


        }

    
}



?>