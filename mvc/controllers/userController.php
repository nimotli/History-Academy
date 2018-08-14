<?php
session_start();
require_once('../models/userModel.php');
require_once('../models/courseModel.php');
require_once('../models/userCourseModel.php');
require_once('../models/analysisModel.php');
require_once('../models/userLiveModel.php');
require_once('../models/liveModel.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    switch($_POST['route'])
    {
        case 'register':
            register();
            break;
        case 'login':
            login($_POST['username'],$_POST['password']);
            break;
        case 'delete':
            deleteUser($_POST['id']);
            break;
        case 'user-create':
            createUser($_POST);
            break;
        case 'user-update':
            updateUser($_POST);
            break;
    }
}
else
{
    switch($_GET['action'])
    {
        case 'logout':
            logout();
            break;
        case 'show':
            showUsers();
            break;
        case 'edit':
            edit($_GET['id']);
            break;
        case 'sendProfile';
            sendProfile();
            break;
    }
}

function register()
{
    $errors=validate($_POST);
    
    if(count($errors) > 0)
    {
        $_SESSION['errors']=$errors;
        header('Location:../../?page=register&error=1');
    }
    else
    {
        $user=new user($_POST);
        $model=new UserModel();
        $addedUser = $model->insert($user);
        $_SESSION['logedin']=true;
        $_SESSION['logedinUser']=$addedUser[0];
        header('Location:../../?page=home');
    }
}

function login($username,$password)
{
    $model=new UserModel();
    $users=$model->all();
    //var_dump($users);exit();
    $willConnect=false;
    $id;
    foreach($users as $user)
    {
        //var_dump($users);
        if($user['username']==$username)
        {
            if(password_verify($password,$user['password']))
            {
                $willConnect=true;
                $id=$user['id'];
                break;
            }
        }
    }
    if($willConnect)
    {
        $connectedUser=$model->find($id);
        $_SESSION['logedin']=true;
        $_SESSION['logedinUser']=$connectedUser[0];
        header('Location:../../?page=home');
    }
    else
    {
        $_SESSION['errors']=['اسم المستخدم أو كلمة المرور غير صحيح'];
        header('Location:../../?page=login&error=1');
    }
}

function logout()
{
    $_SESSION['logedin']=false;
    $_SESSION['logedinId']=-1;
    unset($_SESSION['logedinUser']);
    header('Location:../../?page=home');
}

function validate($user)
{
    $errors=array();
    if(strlen($user['username'])<=3 )
        array_push($errors,'اسم المستخدم قصير');
    if(!checkUsernameUnique($user['username']))
        array_push($errors,'اسم المستخدم مكرر');
    if(strlen($user['password'])<6)
        array_push($errors,'كلمة المرور قصيرة');
    if($user['password']!=$user['confirm-password'])
        array_push($errors,'كلمة المرور لا تطابق تأكيد كلمة المرور ');
    if(!filter_var($user['email'], FILTER_VALIDATE_EMAIL))
        array_push($errors,'البريد الإلكتروني خطأ');
    return $errors;
}

function showUsers()
{
    $model=new UserModel();
    $users=$model->all();
    $_SESSION['allUsers']=$users;
    header('Location:../../?page=users');
}

function deleteUser($id)
{
    $model=new UserModel();

    $model->delete($id);
    $_SESSION['success']="user deleted";

    showUsers();
}
function createUser($values)
{
    $type=$values['type'];
    array_slice($values,-count($values),count($values)-2);
    $user=new user($values);
    $model=new UserModel();
    $addedUser = $model->insert($user);
    $addedUser=$addedUser[0];
    $addedUser['admin']=$type;
    $id=$addedUser['id'];
    unset($addedUser['id']);
    $model->update($id,array_values($addedUser));
    $_SESSION['success']="user created";

    showUsers();
}
function sendProfile()
{
    if(isset($_SESSION['logedinUser']))
    {
        $accountData=$_SESSION['logedinUser'];
        $model=new analysisModel();
        $allAnalysis=$model->all();
        $model=new userCourseModel();
        $userCourses=$model->all();
        $model=new courseModel();
        $ownedCourses=array();

        foreach($userCourses as $userCourse)
        {
            if($userCourse['user']==$_SESSION['logedinUser']['id'])
            {
                $course=$model->find($userCourse['course'])[0];
                array_push($ownedCourses,$course);
            }
        }

        $anals=array();
        foreach($allAnalysis as $analysis)
        {
            if($analysis['user']==$accountData['id'])
            {
                array_push($anals,$analysis);
            }
        }

        $model=new userLiveModel();
        $userLives=$model->all();
        $model=new liveModel();
        $ownedLives=array();
        foreach($userLives as $live)
        {
            if($live['user']==$_SESSION['logedinUser']['id'])
            {
                array_push($ownedLives,$model->find($live['live'])[0]);
            }
        }

        $_SESSION['analysis']=$anals;
        $_SESSION['courses']=$ownedCourses;
        $_SESSION['lives']=$ownedLives;

        header('Location:../../?page=profile');
    }
    else
    {
        header('Location:../../?page=login');
    }
}

function checkUsernameUnique($username)
{
    $model=new UserModel();
    $users=$model->all();
    foreach($users as $user)
    {
        if($user['username']==$username)
            return false;
    }
    return true;
}
function edit($id)
{
    $model=new UserModel();
    $users=$model->find($id)[0];
    $_SESSION['user']=$users;
    header('Location:../../?page=user-edit');
}
function updateUser($values)
{
    $id=$values['id'];
    unset($values['id']);
    unset($values['route']);
    $model=new UserModel();

    $model->update($id,array_values($values));
    showUsers();
}