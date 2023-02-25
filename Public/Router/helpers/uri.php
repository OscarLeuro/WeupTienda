<?php


$uri = explode('/',$_SERVER['REQUEST_URI']);

function path(){

    $uri = explode('/',$_SERVER['REQUEST_URI']);


        if(isset($uri[3])){

                $path = '../';
            
                echo $path;} 
    
             else{
                   $path = '';
                   echo $path;
                 }


}


function path2($a){

    $uri = explode('/',$_SERVER['REQUEST_URI']);

    if(!isset($uri[3]))
    {echo $uri[2].'/'.$a;} 
    else 
     {echo '../'.$uri[2].'/'.$a; }



}


?>