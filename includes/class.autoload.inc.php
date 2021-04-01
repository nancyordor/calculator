<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URL'];
    //having issues with the path directory
    if (strpos($url, 'includes') !== false){
        $path = '../classes/';
    }
    else {
        $path = 'classes/';
    } 
    $extension = '.class.php';

    require_once $path.$className.$extension;
    }

?>