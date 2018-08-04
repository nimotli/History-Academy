<?php
session_start();
require("vendor/autoload.php");
require_once('pagesManager.php');

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

//error & success handling 
$errors=array();
if(isset($_GET['error']))
{
    $errors=$_SESSION['errors'];
    unset($_SESSION['errors']);
}
$succes=-1;
if(isset($_SESSION['succes']))
{
    $succes=$_SESSION['succes'];
    unset($_SESSION['succes']);
}

//Routing actions

switch($page){

    //App Pages
    case 'home' :
        echo $twig->render('home.twig',['session'=>$_SESSION,'errors'=>$errors,'pages'=>$pages]);
        break;
    case 'custm' :
        $thePage=$_SESSION['pageInfo'];
        unset($_SESSION['pageInfo']);
        echo $twig->render('pageRenderer.php',['session'=>$_SESSION,'errors'=>$errors,'pages'=>$pages,'page'=>$thePage]);
        break;
    case 'login':
        if($_SESSION['logedin'])
            header('Location:?page=home');
        else
            if(count($errors)!=0)
                echo $twig->render('login.twig',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'pages'=>$pages]);
            else
                echo $twig->render('login.twig',['session'=>$_SESSION,'errors'=>-1,'pages'=>$pages]);
        break;
    case 'register':
        if($_SESSION['logedin'])
            header('Location:?page=home');
        else
            if(count($errors)!=0)
                echo $twig->render('register.twig',['session'=>$_SESSION,'errors'=>$errors,'pages'=>$pages]);
            else                
                echo $twig->render('register.twig',['session'=>$_SESSION,'errors'=>-1,'pages'=>$pages]);
        break;
    case 'courses-p':
        if(isset($_SESSION['courses']))
        {
            $courses=$_SESSION['courses'];
            unset($_SESSION['courses']);
            $categories=$_SESSION['categories'];
            unset($_SESSION['categories']);
            echo $twig->render('courseMain.php',['session'=>$_SESSION,'errors'=>-1,'pages'=>$pages,'courses'=>$courses,'categories'=>$categories]);

        }
        else
        {
            header('Location:mvc/controllers/courseController.php?action=present');
        }
        break;
    
    case 'courseContent':
        if(isset($_SESSION['coursePart']))
        {
            $courseParts=$_SESSION['coursePart'];
            unset($_SESSION['coursePart']);
            echo $twig->render('course.content.php',['session'=>$_SESSION,'errors'=>-1,'pages'=>$pages,'courseParts'=>$courseParts]);
        }
        else
        {
            header('Location:?page=home');
        }
        break;
    case 'coursePart':
        if(isset($_SESSION['coursePart']))
        {
            $coursePart=$_SESSION['coursePart'];
            unset($_SESSION['coursePart']);
            echo $twig->render('course.coursePart.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'coursePart'=>$coursePart]);
        }
        else
        {
            header('Location:?page=home');
        }
        break;
    //Admin Pages
    case 'admin' :
        echo $twig->render('admin.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes]);
        break;
    case 'users':
        if(isset($_SESSION['allUsers']))
        {
            $users=$_SESSION['allUsers'];
            unset($_SESSION['allUsers']);
            echo $twig->render('users.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'users'=>$users]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
     case 'user-create':
        echo $twig->render('user.create.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes]);
        break;

    case 'pages':
        if(isset($_SESSION['allPages']))
        {
            $pages=$_SESSION['allPages'];
            unset($_SESSION['allPages']);
            echo $twig->render('pages.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'pages'=>$pages]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'page-create':
        echo $twig->render('page.create.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes]);
        break;
    case 'page-edit':
        $pageToEdit=$_SESSION['pageToEdit'];
        unset($_SESSION['pageToEdit']);
        echo $twig->render('page.edit.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'page'=>$pageToEdit]);
        break;
    case 'categories':
        if(isset($_SESSION['allCategories']))
        {
            $categories=$_SESSION['allCategories'];
            unset($_SESSION['allCategories']);
            echo $twig->render('categories.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'categories'=>$categories]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'category-create':
        echo $twig->render('category.create.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes]);
        break;
    case 'category-edit':
        $categoryToEdit=$_SESSION['categoryToEdit'];
        unset($_SESSION['categoryToEdit']);
        echo $twig->render('category.edit.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'category'=>$categoryToEdit]);
        break;
    case 'courses':
        if(isset($_SESSION['allCourses']))
        {
            $courses=$_SESSION['allCourses'];
            unset($_SESSION['allCourses']);
            $categories=$_SESSION['categories'];
            unset($_SESSION['categories']);
            echo $twig->render('courses.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'courses'=>$courses,'categories'=>$categories]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'course-create':
        $categories=$_SESSION['categories'];
        unset($_SESSION['categories']);
        echo $twig->render('course.create.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'categories'=>$categories]);
        break;
    case 'course-edit':
        $categories=$_SESSION['categories'];
        unset($_SESSION['categories']);
        $course=$_SESSION['courseToEdit'];
        unset($_SESSION['course']);
        echo $twig->render('course.edit.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'course'=>$course,'categories'=>$categories]);
        break;
        case 'coursesCourse':
        if(isset($_SESSION['courseParts']))
        {
            $courseParts=$_SESSION['courseParts'];
            unset($_SESSION['courseParts']);
            $courseId=$_SESSION['courseId'];
            unset($_SESSION['courseId']);
            echo $twig->render('course.content.show.php',['session'=>$_SESSION,'errors'=>-1,'pages'=>$pages,'courseParts'=>$courseParts,'courseId'=>$courseId]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'addCoursePart':
        if(isset($_SESSION['courseId']))
        {
            $courseId=$_SESSION['courseId'];
            unset($_SESSION['courseId']);
            echo $twig->render('course.content.create.php',['session'=>$_SESSION,'errors'=>-1,'pages'=>$pages,'courseId'=>$courseId]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'coursePart-edit':
        if(isset($_SESSION['coursePart']))
        {
            $coursePart=$_SESSION['coursePart'];
            unset($_SESSION['coursePart']);
            $courseId=$_SESSION['courseId'];
            unset($_SESSION['courseId']);
            echo $twig->render('course.content.edit.php',['session'=>$_SESSION,'errors'=>$errors,'succes'=>$succes,'coursePart'=>$coursePart,'courseId'=>$courseId]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;

}



?>