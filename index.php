<?php
require("vendor/autoload.php");


//Routing
$page='home';

if(isset($_GET['page']))
{
    $page=$_GET['page'];
}

//Template rendering

$loader=new Twig_Loader_Filesystem(__DIR__.'/mvc/views');
$twig=new Twig_Environment($loader, [
    'cache' => __DIR__.'/etc',
    'auto_reload' => true
]);

switch($page){

    case 'home' :
        echo $twig->render('home.twig',['root'=>__DIR__]);
        break;
    case 'login':
        echo $twig->render('login.twig',['root'=>__DIR__]);
        break;
    case 'register':
        echo $twig->render('register.twig',['root'=>__DIR__]);
        break;

}



?>