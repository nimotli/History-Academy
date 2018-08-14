<?php
session_start();
require_once('pagesManager.php');
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
    'auto_reload'=>true,
]);
$errors=-1;
if(isset($_GET['error']))
{
    $errors=$_SESSION['errors'];
    unset($_SESSION['errors']);
}
$succes=-1;
if(isset($_SESSION['success']))
{
    $succes=$_SESSION['success'];
    unset($_SESSION['success']);
    //var_dump($succes);exit();
}
switch($page){

    //App Pages
    case 'home' :
        echo $twig->render('home.twig',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'pages'=>$pages,'sets'=>$sets]);
        break;
case 'custm' :
        $thePage=$_SESSION['pageInfo'];
        unset($_SESSION['pageInfo']);
        echo $twig->render('pageRenderer.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'pages'=>$pages,'page'=>$thePage]);
        break;
    case 'login':
        if($_SESSION['logedin'])
            header('Location:?page=home');
        else
            echo $twig->render('login.twig',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'pages'=>$pages]);
            
        break;
    case 'register':
        if($_SESSION['logedin'])
            header('Location:?page=home');
        else
            echo $twig->render('register.twig',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'pages'=>$pages]);
        break;
    case 'profile':
        if(isset($_SESSION['logedinUser']))
        {
            $accountData=$_SESSION['logedinUser'];
            if(isset($_SESSION['analysis']))
            {
                $analysis=$_SESSION['analysis'];
                unset($_SESSION['analysis']);
                $courses=$_SESSION['courses'];
                unset($_SESSION['courses']);
                $lives=$_SESSION['lives'];
                unset($_SESSION['lives']);
                echo $twig->render('profile.php',['errors'=>$errors,'succes'=>$succes,'session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'accountData'=>$accountData,'analysis'=>$analysis,'courses'=>$courses,'lives'=>$lives]);
            }
            else
            {
                header('Location:mvc/controllers/userController.php?action=sendProfile');
            }
        }
        else
        {
            header('Location:?page=login');
        }
        break;
    case 'pay':
        if(isset($_SESSION['logedinUser']))
        {
            if(isset($_GET['for']))
            {
                if($_GET['for']=='course')
                {
                    if(isset($_SESSION['course']))
                    {
                        $course=$_SESSION['course'];
                        unset($_SESSION['course']);
                        echo $twig->render('payforCourse.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'course'=>$course]);
                    }
                    else
                        header('Location:?page=profile&id='.$_SESSION['logedinUser']['id']);
                }
                else if($_GET['for']=='live')
                {
                    if(isset($_SESSION['live']))
                    {
                        $live=$_SESSION['live'];
                        unset($_SESSION['live']);
                        echo $twig->render('payforLive.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'live'=>$live]);
                    }
                    else
                        header('Location:?page=profile&id='.$_SESSION['logedinUser']['id']);
                }
                else if($_GET['for']=='analysis')
                {
                    if(isset($_SESSION['analysis']))
                    {
                        $analysis=$_SESSION['analysis'];
                        unset($_SESSION['analysis']);
                        echo $twig->render('payforAnalysis.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'analysis'=>$analysis]);
                    }
                    else
                        header('Location:?page=profile&id='.$_SESSION['logedinUser']['id']);
                }
            }
            else
            {
                header('Location:?page=home');
            }
        }
        else
        {
            header('Location:?page=login');
        }
        break;
    case 'failedPayment':
        echo $twig->render('failedPayment.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages]);
        break;
    case 'succededPayment':
        if(isset($_SESSION['item']))
        {
            $item=$_SESSION['item'];
            unset($_SESSION['item']);
            $amount=$_SESSION['amount'];
            unset($_SESSION['amount']);
            $type=$_SESSION['type'];
            unset($_SESSION['type']);
            echo $twig->render('succededPayment.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'item'=>$item,'amount'=>$amount,'type'=>$type]);
        }
        else
        {
            header('Location:?page=home');
        }
        break;
    case 'courses-p':
        if(isset($_SESSION['courses']))
        {
            $courses=$_SESSION['courses'];
            unset($_SESSION['courses']);
            $categories=$_SESSION['categories'];
            unset($_SESSION['categories']);
            echo $twig->render('courseMain.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'courses'=>$courses,'categories'=>$categories]);

        }
        else
        {
            header('Location:mvc/controllers/courseController.php?action=present');
        }
        break;
    case 'courses-l':
        if(isset($_SESSION['lives']))
        {
            $lives=$_SESSION['lives'];
            unset($_SESSION['lives']);
            echo $twig->render('livesMain.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'lives'=>$lives]);

        }
        else
        {
            header('Location:mvc/controllers/liveController.php?action=present');
        }
        break;
    case 'liveContent':
        if(isset($_SESSION['live']))
        {
            $live=$_SESSION['live'];
            unset($_SESSION['live']);
            echo $twig->render('live.content.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'live'=>$live]);
        }
        else
        {

        }
        break;
    case 'courseContent':
        if(isset($_SESSION['coursePart']))
        {
            $course=$_SESSION['course'];
            unset($_SESSION['course']);
            $courseParts=$_SESSION['coursePart'];
            unset($_SESSION['coursePart']);
            $type=$_SESSION['type'];
            unset($_SESSION['type']);
            echo $twig->render('course.content.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'courseParts'=>$courseParts,'type'=>$type,'course'=>$course]);
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
            echo $twig->render('course.coursePart.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'coursePart'=>$coursePart]);
        }
        else
        {
            header('Location:?page=home');
        }
        break;
    case 'analysis':
        echo $twig->render('analysis.create.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes]);
        break;
    case 'analysis-show':
        if(isset($_SESSION['allAnalysis']))
        {
            $analysis=$_SESSION['allAnalysis'];
            unset($_SESSION['allAnalysis']);
            $users=$_SESSION['users'];
            unset($_SESSION['users']);
            echo $twig->render('analysis.show.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'analysiss'=>$analysis,'users'=>$users]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'analysis-init':
        if(isset($_SESSION['analysis']))
        {
            $analysis=$_SESSION['analysis'];
            unset($_SESSION['analysis']);
            $images=$_SESSION['images'];
            unset($_SESSION['images']);
            echo $twig->render('analysis.init.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'analysis'=>$analysis,'images'=>$images]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'answerAnalysis':
        if(isset($_SESSION['analysis']))
        {
            $analysis=$_SESSION['analysis'];
            unset($_SESSION['analysis']);
            $images=$_SESSION['images'];
            unset($_SESSION['images']);
            echo $twig->render('analysis.answer.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'analysis'=>$analysis,'images'=>$images]);
        }
        else
            header('Location:?page=admin');
        break;
    case 'viewAnswers':
        if(isset($_SESSION['answers']))
        {
            $answers=$_SESSION['answers'];
            unset($_SESSION['answers']);
            $analysis=$_SESSION['analysis'];
            unset($_SESSION['analysis']);
            $images=$_SESSION['images'];
            unset($_SESSION['images']);
            echo $twig->render('analysis.answer.show.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'analysis'=>$analysis,'answers'=>$answers,'images'=>$images]);
        }
        else
            header('Location:?page=home');
        break;
    //Admin Pages
    case 'admin' :
        if(isset($_SESSION['logedinUser']) && $_SESSION['logedinUser']['admin']>0)
            echo $twig->render('admin.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes]);
        else
            header('Location:?page=home');
        break;
    case 'users':
        if(isset($_SESSION['allUsers']))
        {
            $users=$_SESSION['allUsers'];
            unset($_SESSION['allUsers']);
            echo $twig->render('users.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'users'=>$users]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
     case 'user-create':
        echo $twig->render('user.create.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes]);
        break;

    case 'pages':
        if(isset($_SESSION['allPages']))
        {
            $pages=$_SESSION['allPages'];
            unset($_SESSION['allPages']);
            echo $twig->render('pages.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'pages'=>$pages]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'page-create':
        echo $twig->render('page.create.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes]);
        break;
    case 'page-edit':
        $pageToEdit=$_SESSION['pageToEdit'];
        unset($_SESSION['pageToEdit']);
        echo $twig->render('page.edit.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'page'=>$pageToEdit]);
        break;
    case 'categories':
        if(isset($_SESSION['allCategories']))
        {
            $categories=$_SESSION['allCategories'];
            unset($_SESSION['allCategories']);
            echo $twig->render('categories.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'categories'=>$categories]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'category-create':
        echo $twig->render('category.create.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes]);
        break;
    case 'category-edit':
        $categoryToEdit=$_SESSION['categoryToEdit'];
        unset($_SESSION['categoryToEdit']);
        echo $twig->render('category.edit.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'category'=>$categoryToEdit]);
        break;
    case 'courses':
        if(isset($_SESSION['allCourses']))
        {
            $courses=$_SESSION['allCourses'];
            unset($_SESSION['allCourses']);
            $categories=$_SESSION['categories'];
            unset($_SESSION['categories']);
            echo $twig->render('courses.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'courses'=>$courses,'categories'=>$categories]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'course-create':
        $categories=$_SESSION['categories'];
        unset($_SESSION['categories']);
        echo $twig->render('course.create.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'categories'=>$categories]);
        break;
    case 'course-edit':
        $categories=$_SESSION['categories'];
        unset($_SESSION['categories']);
        $course=$_SESSION['courseToEdit'];
        unset($_SESSION['course']);
        echo $twig->render('course.edit.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'course'=>$course,'categories'=>$categories]);
        break;
    case 'coursesCourse':
        if(isset($_SESSION['courseParts']))
        {
            $courseParts=$_SESSION['courseParts'];
            unset($_SESSION['courseParts']);
            $courseId=$_SESSION['courseId'];
            unset($_SESSION['courseId']);
            echo $twig->render('course.content.show.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'courseParts'=>$courseParts,'courseId'=>$courseId]);
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
            echo $twig->render('course.content.create.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>-1,'pages'=>$pages,'courseId'=>$courseId]);
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
            echo $twig->render('course.content.edit.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'coursePart'=>$coursePart,'courseId'=>$courseId]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'settings':
        if(isset($_SESSION['allSettingss']))
        {
            $settings=$_SESSION['allSettingss'];
            unset($_SESSION['allSettingss']);
            echo $twig->render('setting.show.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'setting'=>$settings]);
        }
        else
            header('Location:?page=admin');
        break;
    case 'changeSettings':
        if(isset($_SESSION['settings']))
        {
            $settings=$_SESSION['settings'];
            unset($_SESSION['settings']);
            if($_GET['type']=='site')
            {
                echo $twig->render('settings.siteinfo.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'setting'=>$settings]);
            }
            else if ($_GET['type']=='pay')
            {
                echo $twig->render('settings.payinfo.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'setting'=>$settings]);
            }
            else
            {
                echo $twig->render('settings.continfo.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'setting'=>$settings]);
            }
        }
        else
        {
            header('Location:?page=admin');
        }
        break;

    case 'lives-show':
        if(isset($_SESSION['allLives']))
        {
            $lives=$_SESSION['allLives'];
            unset($_SESSION['allLives']);
            echo $twig->render('lives.show.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'lives'=>$lives]);
        }
        else
        {
            header('Location:mvc/controllers/liveController.php?action=show');
        }
        break;
    case 'live-create':
        echo $twig->render('live.create.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes]);
        break;
    case 'live-edit':
        if(isset($_SESSION['livetoEdit']))
        {
            $live=$_SESSION['livetoEdit'];
            unset($_SESSION['livetoEdit']);
            echo $twig->render('live.edit.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'live'=>$live]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'live':
        if(isset($_SESSION['live']))
        {
            $live=$_SESSION['live'];
            unset($_SESSION['live']);
            $as=$_SESSION['as'];
            unset($_SESSION['as']);
            echo $twig->render('live.live.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'live'=>$live,'as'=>$as,'user'=>$_SESSION['logedinUser']]);
        }
        else
        {
            header('Location:?page=home');
        }
        break;
    case 'affectuserLive':
        if(isset($_SESSION['live']))
        {
            $live=$_SESSION['live'];
            unset($_SESSION['live']);
            echo $twig->render('live.adduser.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'live'=>$live]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'affectuserCourse':
        if(isset($_SESSION['course']))
        {
            $course=$_SESSION['course'];
            unset($_SESSION['course']);
            echo $twig->render('course.adduser.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'course'=>$course]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
    case 'user-edit':
        if(isset($_SESSION['user']))
        {
            $user=$_SESSION['user'];
            unset($_SESSION['user']);
            echo $twig->render('user.edit.php',['session'=>$_SESSION,'sets'=>$sets,'errors'=>$errors,'succes'=>$succes,'user'=>$user]);
        }
        else
        {
            header('Location:?page=admin');
        }
        break;
}



?>
