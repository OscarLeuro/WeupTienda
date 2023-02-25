<?php


class Route{




    static function view(){


        include 'header.php';

        /** Si no existe el parámetro V en la URL entonces me mostrará el Home  */

        if(!isset($_GET['v'])){

            include 'Public/Views/homeView.php';



        }
        else {

                if(isset($_GET['v'])){


                    $v = $_GET['v'];
                    
        
                    if($uri[2] == $v)
        
                    include 'Public/Views/'.$v.'View.php';  
                
                        }
        
                    if(  isset($uri[3])  ==$v){
        
        
                        include 'Public/Views/'.$uri[2].'View.php';  
        
        
                    }








                }

    }



}










?>