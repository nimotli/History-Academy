<?php
session_start();
require_once('../models/userModel.php');
require_once('../models/liveModel.php');
require_once('../models/liveMsgModel.php');
require_once('../models/userLiveModel.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    switch($_POST['route'])
    {
        case 'delete':
            deleteLive($_POST['id']);
            break;
        case 'live-create':
            createLive($_POST);
            break;
        case 'live-update':
            editLive($_POST);
            break;
        case 'msg':
            sendMsg($_POST);
            break;
        case 'refresh':
            refresh($_POST);
            break;
        case 'affect':
            affectt($_POST['live'],$_POST['user']);
    }
}
else
{
    switch($_GET['action'])
    {
        case 'show':
            showLives();
            break;
        case 'update':
            updateLive($_GET['id']);
            break;
        case 'stop':
            stopLive($_GET['id']);
            break;
        case 'live-start':
            startLive($_GET['id'],$_GET['as']);
            break;
        case 'present':
            present();
            break;
        case 'liveParts':
            presentLive($_GET['id']);
            break;
        case 'affect':
            affect($_GET['id'],$_GET['user']);
            break;
        case 'pay':
            initializePay($_GET['id']);
            break;
        case 'afct':
            affecting($_GET['id']);
            break;
    }
}

function validate($live)
{
    $errors=array();
    if(strlen($live['categoryname'])<=3)
        array_push($errors,'categoryname is too short');
    if(strlen($live['password'])<6)
        array_push($errors,'password is too short');
    if($live['password']!=$live['confirm-password'])
        array_push($errors,'password and confirmation does not match');
    if(!filter_var($live['email'], FILTER_VALIDATE_EMAIL))
        array_push($errors,'email is not valid');
    return $errors;
}
function present()
{
    $model=new liveModel();
    $lives=$model->all();
    $actualLives=array();

    foreach($lives as $live)
    {
        if($live['state']!='done')
            array_push($actualLives,$live);
    }

    $_SESSION['lives']=$actualLives;
    header('Location:../../?page=courses-l');
}
function showLives()
{
    $model=new liveModel();
    $lives=$model->all();
    $_SESSION['allLives']=$lives;
    header('Location:../../?page=lives-show');
}

function deleteLive($id)
{
    $model=new liveModel();

    $model->delete($id);
    $_SESSION['success']="live deleted";

    showLives();
}
function createLive($values)
{
    $date=$values['date'];
    $time=$values['time'];
    $date=$date.' '.$time;
    $values['date']=$date;
    unset($values['time']);
    $live=new Live($values);
    $model=new liveModel();

    $model->insert($live);
    $_SESSION['success']="live created";

    showLives();
}
function updateLive($id)
{
    $model=new liveModel();
    $live=$model->find($id)[0];
    $dateTime=explode(' ',$live['date']);
    $live['date']=$dateTime[0];$live['time']=$dateTime[1];
    $_SESSION['livetoEdit']=$live;
    header('Location:../../?page=live-edit');
}
function editLive($values)
{
    $date=$values['date'];
    $time=$values['time'];
    $date=$date.' '.$time;
    $values['date']=$date;
    unset($values['time']);
    $model=new liveModel();
    $id=$values['id'];
    unset($values['id']);
    unset($values['route']);
    unset($values['files']);
    $live=array_values($values);
    $model->update($id,$live);
    $_SESSION['success']="live updated";

    showLives();
}
function stopLive($id)
{
    $model=new liveModel();
    $live=$model->find($id)[0];
    $live['state']="done";
    
    $id=$live['id'];
    unset($live['id']);
    $live=array_values($live);
    $model->update($id,$live);
    $_SESSION['success']="live updated";

    //showLives();
}


function startLive($id,$as)
{
    $model=new liveModel();
    $live=$model->find($id)[0];
    $_SESSION['live']=$live;
    if($_SESSION['logedinUser']['admin']==1 && $as =='tutor')
        $as='tutor';
    else
        $as='student';
    $_SESSION['as']=$as;
    header('Location:../../?page=live');
}
function sendMsg($values)
{
    $liveMsg=new LiveMsg($values);
    $model=new liveMsgModel();
    $model->insert($liveMsg);
}
function refresh($values)
{
    $live=$values['live'];
    $lastMsgTutor=$values['lastMsgTutor'];
    $lastMsgStudent=$values['lastMsgStudent'];
    $ltm=$lastMsgTutor;
    $lsm=$lastMsgStudent;
    $data="";

    $model=new userModel();
    $tempusers=$model->all();
    $users=array();
    foreach($tempusers as $user)
    {
        $users[$user['id']]=$user['username'];
    }

    $liveMsgs=getLiveMsgs($live);
    foreach($liveMsgs as $msg)
    {
        if($msg['type']=='tutor')
        {
            if($msg['id']>$lastMsgTutor)
            {
                $data.=$msg['type'].'|'.$users[$msg['user']].'²'.$msg['msg'].'~';
                $ltm=$msg['id'];
            }
        }
        else
        {
            if($msg['id']>$lastMsgStudent)
            {
                $data.=$msg['type'].'|'.$users[$msg['user']].'²'.$msg['msg'].'~';
                $lsm=$msg['id'];
            }
        }
    }
    //'tutor*user1:fuck niggers~tutor*user1:fuck niggers~tutorMsg*12~studentMsg*23'
    $data.='tutorMsg|'.$ltm.'~studentMsg|'.$lsm;
    echo $data;
}


function getLiveMsgs($live)
{
    $model=new liveMsgModel();
    $alllives=$model->findLive($live);
    return $alllives;
}

function presentLive($id)
{
    $type="visit";
    $model=new liveModel();
    $live=$model->find($id)[0];
    $model=new userLiveModel();
    $userLives=$model->all();
    $cps=array();

    foreach($userLives as $userLive)
    {
        if($userLive['user']==$_SESSION['logedinUser']['id'])
        {
            if($userLive['live']==$id)
            {
                $type="baught";
            }
        }
    }
    $_SESSION['live']=$live;
    $_SESSION['liveId']=$id;
    if($type=='visit')
        header('Location:../../?page=liveContent');
    else
        startLive($id,'student');
}
function affectt($live,$us)
{
    $model=new userModel();
    $users=$model->all();
    $finaluser="";
    foreach($users as $user)
    {
        if($user['username']==$us)
        {
            $finaluser=$user['id'];
            break;
        }
    }

    $userLive=new UserLive(['user'=>$finaluser,'live'=>$live]);
    $model=new userLiveModel();
    $model->insert($userLive);
    showLives();
}
function affect($live,$user)
{
    $userLive=new UserLive(['user'=>$user,'live'=>$live]);
    $model=new userLiveModel();
    $model->insert($userLive);
    header('Location:../../?page=profile&id='.$_SESSION['logedinUser']['id']);
}
function initializePay($id)
{
    $model=new liveModel();
    $live=$model->find($id)[0];
    $_SESSION['live']=$live;

    header('Location:../../?page=pay&for=live');
}
function affecting($live)
{
    $model=new userModel();
    $users=$model->all();
    $model=new liveModel();
    $live=$model->find($live)[0];
    $_SESSION['live']=$live;
    header('Location:../../?page=affectuserLive');
}