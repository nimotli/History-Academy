<?php
session_start();
require_once('../models/userModel.php');
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
        if($user['username']=$username)
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
        $_SESSION['errors']=['username and password did not match'];
        header('Location:../../?page=login&error=1');
    }
}

function logout()
{
    $_SESSION['logedin']=false;
    $_SESSION['logedinId']=-1;
    header('Location:../../?page=home');
}

function validate($user)
{
    $errors=array();
    if(strlen($user['username'])<=3)
        array_push($errors,'username is too short');
    if(strlen($user['password'])<6)
        array_push($errors,'password is too short');
    if($user['password']!=$user['confirm-password'])
        array_push($errors,'password and confirmation does not match');
    if(!filter_var($user['email'], FILTER_VALIDATE_EMAIL))
        array_push($errors,'email is not valid');
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