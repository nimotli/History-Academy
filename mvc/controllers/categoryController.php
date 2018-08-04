<?php
session_start();
require_once('../models/categoryModel.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    switch($_POST['route'])
    {
        case 'delete':
            deleteCategory($_POST['id']);
            break;
        case 'category-create':
            createCategory($_POST);
            break;
        case 'categoryRender':
            renderCategory($_POST['categoryId']);
            break;
        case 'update':
            editCategory($_POST);
            break;
    }
}
else
{
    switch($_GET['action'])
    {
        case 'show':
            showCategorys();
            break;
        case 'update':
            updateCategory($_GET['id']);
            break;
    }
}

function validate($category)
{
    $errors=array();
    if(strlen($category['categoryname'])<=3)
        array_push($errors,'categoryname is too short');
    if(strlen($category['password'])<6)
        array_push($errors,'password is too short');
    if($category['password']!=$category['confirm-password'])
        array_push($errors,'password and confirmation does not match');
    if(!filter_var($category['email'], FILTER_VALIDATE_EMAIL))
        array_push($errors,'email is not valid');
    return $errors;
}

function showCategorys()
{
    $model=new categoryModel();
    $categorys=$model->all();
    $_SESSION['allCategories']=$categorys;
    header('Location:../../?page=categories');
}

function deleteCategory($id)
{
    $model=new categoryModel();

    $model->delete($id);
    $_SESSION['success']="category deleted";

    showCategorys();
}
function createCategory($values)
{
    $category=new Category($values);
    $model=new categoryModel();
    $model->insert($category);
    $_SESSION['success']="category created";

    showCategorys();
}
function updateCategory($id)
{
    $model=new categoryModel();
    $category=$model->find($id);
    $_SESSION['categoryToEdit']=$category[0];
    header('Location:../../?page=category-edit');
}
function editCategory($values)
{
    $category=new Category($values);
    $model=new categoryModel();
    $id=$values['id'];
    unset($values['id']);
    unset($values['route']);
    unset($values['files']);
    $category=array_values($values);
    $model->update($id,$category);
    $_SESSION['success']="category updated";

    showCategorys();
}
