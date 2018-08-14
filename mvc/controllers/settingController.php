<?php
session_start();
require_once('../models/settingModel.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    switch($_POST['route'])
    {
        case 'delete':
            deleteSettings($_POST['id']);
            break;
        case 'settings-create':
            createSettings($_POST);
            break;
        case 'update':
            editSettings($_POST);
            break;
        case 'site':
            updateSite($_POST);
            break;
        case 'pay':
            updatePay($_POST);
            break;
        case 'cont':
            updateCont($_POST);
            break;
    }
}
else
{
    switch($_GET['action'])
    {
        case 'show':
            showSettingss();
            break;
        case 'changesite':
            changeSite();
            break;
        case 'changepay':
            changePay();
            break;
        case 'changecont':
            changeCont();
            break;
        case 'update':
            updateSettings($_GET['id']);
            break;
    }
}

function validate($settings)
{
    $errors=array();
    if(strlen($settings['settingsname'])<=3)
        array_push($errors,'settingsname is too short');
    if(strlen($settings['password'])<6)
        array_push($errors,'password is too short');
    if($settings['password']!=$settings['confirm-password'])
        array_push($errors,'password and confirmation does not match');
    if(!filter_var($settings['email'], FILTER_VALIDATE_EMAIL))
        array_push($errors,'email is not valid');
    return $errors;
}

function showSettingss()
{
    $model=new SettingsModel();
    $settings=$model->all()[0];
    $_SESSION['allSettingss']=$settings;
    header('Location:../../?page=settings');
}

function deleteSettings($id)
{
    $model=new SettingsModel();

    $model->delete($id);
    $_SESSION['success']="settings deleted";

    showSettingss();
}
function createSettings($values)
{
    $settings=new Settings($values);
    $model=new SettingsModel();
    $model->insert($settings);
    $_SESSION['success']="settings created";

    showSettingss();
}
function updateSettings($id)
{
    $model=new SettingsModel();
    $settings=$model->find($id);
    $cmodel=new CategoryModel();
    $_SESSION['settingsToEdit']=$settings[0];
    header('Location:../../?page=settings-edit');
}
function editSettings($values)
{
    $settings=new Settings($values);
    $model=new SettingsModel();
    $id=$values['id'];
    unset($values['id']);
    unset($values['route']);
    unset($values['files']);
    $settings=array_values($values);
    $model->update($id,$settings);
    $_SESSION['success']="settings updated";

    showSettingss();
}
function updateSite($values)
{
    $model=new SettingsModel();
    $settings=$model->all()[0];
    for($i=0;$i<10;$i++)
{
if(isset($settings[$i]))
unset($settings[$i]);
}
    $settings['siteName']=$values['siteName'];
    $settings['siteDescription']=$values['siteDescription'];
    $settings['siteKeywords']=$values['siteKeywords'];
    $settings['welcomeMsg']=$values['welcomeMsg'];
    $settings['welcomeMsg2']=$values['welcomeMsg2'];
    $id=$settings['id'];
    unset($settings['id']);
    $model->update($id,array_values($settings));
    showSettingss();
}
function updatePay($values)
{
    $model=new SettingsModel();
    $settings=$model->all()[0];
    
for($i=0;$i<10;$i++)
{
if(isset($settings[$i]))
unset($settings[$i]);
}
    $settings['bank']=$values['bank'];
    $settings['email']=$values['email'];
    $settings['name']=$values['name'];
    $id=$settings['id'];
    unset($settings['id']);
    $model->update($id,array_values($settings));
    showSettingss();
}
function updateCont($values)
{
    $model=new SettingsModel();
    $settings=$model->all()[0];
    $settings['homeContent']=$values['homeContent'];
    $id=$settings['id'];
    unset($settings['id']);
for($i=0;$i<10;$i++)
{
if(isset($settings[$i]))
unset($settings[$i]);
}
    $model->update($id,array_values($settings));

    showSettingss();
}
function changeSite()
{
    $model=new SettingsModel();
    $settings=$model->all()[0];
    $_SESSION['settings']=$settings;
    header('Location:../../?page=changeSettings&type=site');
}
function changePay()
{
    $model=new SettingsModel();
    $settings=$model->all()[0];
    $_SESSION['settings']=$settings;
    header('Location:../../?page=changeSettings&type=pay');
}
function changeCont()
{
    $model=new SettingsModel();
    $settings=$model->all()[0];
    $_SESSION['settings']=$settings;
    header('Location:../../?page=changeSettings&type=cont');
}