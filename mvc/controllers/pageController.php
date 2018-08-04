<?php
session_start();
require_once('../models/pageModel.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    switch($_POST['route'])
    {
        case 'delete':
            deletePage($_POST['id']);
            break;
        case 'page-create':
            createPage($_POST);
            break;
        case 'pageRender':
            renderPage($_POST['pageId']);
            break;
        case 'update':
            editPage($_POST);
            break;
    }
}
else
{
    switch($_GET['action'])
    {
        case 'show':
            showPages();
            break;
        case 'update':
            updatePage($_GET['id']);
            break;
    }
}

function validate($page)
{
    $errors=array();
    if(strlen($page['pagename'])<=3)
        array_push($errors,'pagename is too short');
    if(strlen($page['password'])<6)
        array_push($errors,'password is too short');
    if($page['password']!=$page['confirm-password'])
        array_push($errors,'password and confirmation does not match');
    if(!filter_var($page['email'], FILTER_VALIDATE_EMAIL))
        array_push($errors,'email is not valid');
    return $errors;
}

function showPages()
{
    $model=new PageModel();
    $pages=$model->all();
    $_SESSION['allPages']=$pages;
    header('Location:../../?page=pages');
}

function deletePage($id)
{
    $model=new PageModel();

    $model->delete($id);
    $_SESSION['success']="page deleted";

    showPages();
}
function createPage($values)
{
    $page=new Page($values);
    $model=new PageModel();
    $model->insert($page);
    $_SESSION['success']="page created";

    showPages();
}
function updatePage($id)
{
    $model=new PageModel();
    $page=$model->find($id);
    $_SESSION['pageToEdit']=$page[0];
    header('Location:../../?page=page-edit');
}
function editPage($values)
{
    $page=new Page($values);
    $model=new PageModel();
    $id=$values['id'];
    unset($values['id']);
    unset($values['route']);
    unset($values['editordata']);
    unset($values['files']);
    $page=array_values($values);
    $model->update($id,$page);
    $_SESSION['success']="page updated";

    showPages();
}

function renderPage($id)
{
    $model=new PageModel();
    $page = $model->find($id);
    $page=$page[0];
    $_SESSION['pageInfo']=$page;
    header('Location:../../?pageName='.$page['name'].'&page=custm');
}