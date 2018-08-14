<?php
session_start();
require_once('../models/analysisModel.php');
require_once('../models/analysisAnswerModel.php');
require_once('../models/userModel.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    switch($_POST['route'])
    {
        case 'delete':
            deleteAnalysis($_POST['id']);
            break;
        case 'analysis-create':
            createAnalysis($_POST);
            break;
        case 'analysisRender':
            renderAnalysis($_POST['analysisId']);
            break;
        case 'update':
            editAnalysis($_POST);
            break;
        case 'initialize':
            initializeAnalysis($_POST);
            break;
        case 'answer':
            answerAnalysis($_POST);
            break;
    }
}
else
{
    switch($_GET['action'])
    {
        case 'show':
            showAnalysiss();
            break;
        case 'update':
            updateAnalysis($_GET['id']);
            break;
        case 'initialize':
            initialize($_GET['id']);
            break;
        case 'pay':
            initializePay($_GET['id']);
            break;
        case 'purchase':
            purchase($_GET['id']);
            break;
        case 'answer':
            answer($_GET['id']);
            break;
        case 'stop':
            stop($_GET['id']);
            break;
        case 'close':
            close($_GET['id']);
            break;
        case 'view':
            viewAnswer($_GET['id']);
            break;
        case 'paid':
            paid($_GET['id']);
            break;
        case 'unpay':
            unpay($_GET['id']);
            break;
    }
}

function validate($analysis)
{
    $errors=array();
    if(strlen($analysis['analysisname'])<=3)
        array_push($errors,'analysisname is too short');
    if(strlen($analysis['password'])<6)
        array_push($errors,'password is too short');
    if($analysis['password']!=$analysis['confirm-password'])
        array_push($errors,'password and confirmation does not match');
    if(!filter_var($analysis['email'], FILTER_VALIDATE_EMAIL))
        array_push($errors,'email is not valid');
    return $errors;
}

function showAnalysiss()
{
    $model=new analysisModel();
    $analysiss=$model->all();
    $uModel=new userModel();
    $users=$uModel->all()[0];
    $theUsers=array();
    foreach($users as $user)
    {
        $theUsers[$users['id']]=$users['name'].' '.$users['secondName'];
    }
    $_SESSION['allAnalysis']=$analysiss;
    $_SESSION['users']=$theUsers;
    header('Location:../../?page=analysis-show');
}

function deleteAnalysis($id)
{
    $model=new analysisModel();

    $model->delete($id);
    $_SESSION['success']="analysis deleted";

    showAnalysiss();
}
function createAnalysis($values)
{
    echo 'will create';
    $data=$values;
    $data['user']=$_SESSION['logedinUser']['id'];
    $data['state']='pending';
    $data['price']=0;
    $analysis=new Analysis($data);
    $model=new analysisModel();
    $createdAnalysis = $model->insert($analysis);
    echo json_encode($analysis);
    uploadFile($createdAnalysis['id'],$_FILES["images"]);
    $_SESSION['success']="analysis created";
    header('Location:../../?page=profile&id='.$_SESSION['logedinUser']['id']);
    //showAnalysiss();
}
function updateAnalysis($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id);
    $_SESSION['analysisToEdit']=$analysis[0];
    header('Location:../../?page=analysis-edit');
}
function editAnalysis($values)
{
    $analysis=new Analysis($values);
    $model=new analysisModel();
    $id=$values['id'];
    unset($values['id']);
    unset($values['route']);
    unset($values['files']);
    $analysis=array_values($values);
    $model->update($id,$analysis);
    $_SESSION['success']="analysis updated";

    showAnalysiss();
}
function initialize($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $_SESSION['analysis']=$analysis;
    $path='../../storage/images/'.$analysis['id'];
    $files=scandir($path, 1);
    $_SESSION['images']=$files;
    //echo json_encode($files);exit();
    header('Location:../../?page=analysis-init');
}
function initializeAnalysis($values)
{
    //'set type=?,info=?,state=?,user=? where id=?'
    $id=$values['id'];
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $analysis['price']=$values['price'];
    $analysis['state']="waiting for payement";
    unset($analysis['id']);
    $analysis=array_values($analysis);
    $model->update($id,$analysis);
    showAnalysiss();
}
function initializePay($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $_SESSION['analysis']=$analysis;

    header('Location:../../?page=pay&for=analysis');
}
function purchase($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $analysis['state']='paid';
    unset($analysis['id']);
    $analysis=array_values($analysis);
    $model->update($id,$analysis);
    header('Location:../../?page=profile&id='.$_SESSION['logedinUser']['id']);
}
function answer($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $path='../../storage/images/'.$analysis['id'];
    $files=scandir($path, 1);
    $_SESSION['images']=$files;
    $_SESSION['analysis']=$analysis;
    header('Location:../../?page=answerAnalysis');
}
function stop($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $analysis['state']='stopped';
    unset($analysis['id']);
    $analysis=array_values($analysis);
    $model->update($id,$analysis);
    showAnalysiss();
}
function close($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $analysis['state']='closed';
    unset($analysis['id']);
    $analysis=array_values($analysis);
    $model->update($id,$analysis);
    showAnalysiss();
}
function answerAnalysis($values)
{
    $analysisAnswer=new AnalysisAnswer($values);
    $model=new analysisAnswerModel();
    $model->insert($analysisAnswer);
    $model=new analysisModel();
    close($values['analysis']);
    showAnalysiss();
}
function viewAnswer($id)
{
    $model=new analysisAnswerModel();
    $answers=$model->all();
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $aAnswers=array();
    foreach($answers as $answer)
    {
        if($answer['analysis']==$id)
        {
            array_push($aAnswers,$answer);
        }
    }
    $path='../../storage/images/'.$analysis['id'];
    $files=scandir($path, 1);
    $_SESSION['images']=$files;
    $_SESSION['analysis']=$analysis;
    $_SESSION['answers']=$aAnswers;
    header('Location:../../?page=viewAnswers');

}
function paid($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $analysis['state']='paid';
    unset($analysis['id']);
    $analysis=array_values($analysis);
    $model->update($id,$analysis);
    showAnalysiss();
}
function unpay($id)
{
    $model=new analysisModel();
    $analysis=$model->find($id)[0];
    $analysis['state']='waiting for payement';
    unset($analysis['id']);
    $analysis=array_values($analysis);
    $model->update($id,$analysis);
    showAnalysiss();
}


//helper functions
function uploadFile($analysisId,$file)
{
    $errors = array();
    $uploadedFiles = array();
    $extension = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
    $bytes = 1024;
    $KB = 1024;
    $totalBytes = $bytes * $KB*5;
    $UploadFolder = "../../storage/images/".$analysisId;
    makeDir($UploadFolder);
    $counter = 0;
    
    foreach($file["tmp_name"] as $key=>$tmp_name){
        $temp = $file["tmp_name"][$key];
        $name = $file["name"][$key];
        
        if(empty($temp))
        {
            break;
        }
        
        $counter++;
        $UploadOk = true;
        
        if($file["size"][$key] > $totalBytes)
        {
            $UploadOk = false;
            array_push($errors, $name." file size is larger than the 5 MB.");
        }
        
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        if(in_array($ext, $extension) == false){
            $UploadOk = false;
            array_push($errors, $name." is invalid file type.");
        }
        
        if(file_exists($UploadFolder."/".$name) == true){
            $UploadOk = false;
            array_push($errors, $name." file is already exist.");
        }
        
        if($UploadOk == true){
            move_uploaded_file($temp,$UploadFolder."/".$name);
            array_push($uploadedFiles, $name);
        }
    }
    
    if($counter>0)
    {
        if(count($errors)>0)
        {
            return $errors;
        }
        
        if(count($uploadedFiles)>0)
        {
            return true;
        }                               
    }
    else
    {
        return false;
    }
}
function makeDir($path)
{
     return is_dir($path) || mkdir($path);
}