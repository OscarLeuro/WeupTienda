<?php


class Route{




    static function view(){


        include 'header.php';

        if(!isset($_GET['v'])){

            include 'Public/Views/homeView.php';



        }
        else {
            
            $v = $_GET['v'];

            include 'Public/Views/'.$v.'View.php';  }

    }



}










?>