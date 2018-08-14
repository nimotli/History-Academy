<?php
session_start();
require_once('../../vendor/autoload.php');
require_once('../models/courseModel.php');
require_once('../models/userCourseModel.php');
require_once('../models/analysisModel.php');
require_once('../models/liveModel.php');
require_once('../models/userLiveModel.php');
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\PaymentExecution;
$conf=require_once('../../config.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    switch($_POST['route'])
    {
        case 'register':
            register();
            break;
    }
}
else
{
    switch($_GET['action'])
    {
        case 'pay':
            createPayment($_GET['type'],$_GET['id'],$apiContext);
            break;
        case 'exec':
            executePayment($_GET['type'],$_GET['id'],$apiContext);
            break;
    }
}

function createPayment($type,$id,$apiContext)
{
    

    $payer = new Payer();
    $payer->setPaymentMethod("paypal");

    $item1 = new Item();
    $amount = new Amount();
    if($type == "analysis")
    {
        $model=new analysisModel();
        $analysis=$model->find($id)[0];
        $item1->setName($analysis['type'])
        ->setCurrency('USD')
        ->setQuantity(1)
        ->setSku("123123") 
        ->setPrice($analysis['price']);
        $amount->setCurrency("USD")
        ->setTotal($analysis['price']);
        //->setDetails($details);
    }
    else if($type =="course")
    {
        $model=new courseModel();
        $course=$model->find($id)[0];
        $item1->setName($course['name'])
        ->setCurrency('USD')
        ->setQuantity(1)
        ->setSku("123123") 
        ->setPrice($course['price']);
        $amount->setCurrency("USD")
        ->setTotal($course['price']);
        //->setDetails($details);
    }
    else
    {
        $model=new liveModel();
        $live=$model->find($id)[0];
        $item1->setName($live['name'])
        ->setCurrency('USD')
        ->setQuantity(1)
        ->setSku("123123") 
        ->setPrice($live['price']);
        $amount->setCurrency("USD")
        ->setTotal($live['price']);
        //->setDetails($details);
    }
    
    
    $itemList = new ItemList();
    $itemList->setItems(array($item1));

    /*$details = new Details();
    $details->setShipping(1.2)
        ->setTax(1.3)
        ->setSubtotal(17.50);*/
        
    
        
    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription("Payment description")
        ->setInvoiceNumber(uniqid());

    $redirectUrls = new RedirectUrls();
    if($type =="analysis")
    {
        $redirectUrls->setReturnUrl("http://localhost/historyacademy/mvc/controllers/payementController.php?action=exec&success=true&type=".$type."&id=".$analysis['id'])
        ->setCancelUrl("http://localhost/historyacademy/mvc/controllers/payementController.php?action=exec&success=true&type=".$type."&id=".$analysis['id']);    
    }
    else if($type =="course")
    {
        $redirectUrls->setReturnUrl("http://localhost/historyacademy/mvc/controllers/payementController.php?action=exec&success=true&type=".$type."&id=".$course['id'])
        ->setCancelUrl("http://localhost/historyacademy/mvc/controllers/payementController.php?action=exec&success=true&type=".$type."&id=".$course['id']);    
    }
    else
    {
        $redirectUrls->setReturnUrl("http://localhost/historyacademy/mvc/controllers/payementController.php?action=exec&success=true&type=".$type."&id=".$live['id'])
        ->setCancelUrl("http://localhost/historyacademy/mvc/controllers/payementController.php?action=exec&success=true&type=".$type."&id=".$live['id']);    
    }
   
    $payment = new Payment();
    $payment->setIntent("sale")
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));
    try 
    {
        $payment->create($apiContext);
    } 
    catch (Exception $ex) {
        echo $ex;
        exit(1);
    }
    $_SESSION['payId']=$payment->getId();
    header('Location:'.$payment->getApprovalLink());
}

function executePayment($type,$id,$apiContext)
{
    if (isset($_GET['success']) && $_GET['success'] == 'true') 
    {
        $item=null;
        $paymentId = $_GET['paymentId'];
        
        $payment = Payment::get($paymentId, $apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId($_GET['PayerID']);
        $execution->setTransactions($payment->getTransactions());
        if(isset($_SESSION['payId']) && $_SESSION['payId'] == $paymentId)
        {
            try 
            {
                echo 'will execute';
                $result = $payment->execute($execution, $apiContext);
                echo 'executed';
                if($type =='analysis')
                {
                    
                    $model=new analysisModel();
                    $analysis=$model->find($id)[0];
                    $item=$analysis;
                    $analysis['state']='paid';
                    unset($analysis['id']);
                    $analysis=array_values($analysis);
                    $model->update($id,$analysis);
                }
                else if($type =='course')
                {
                    $model=new courseModel();
                    $course=$model->find($id)[0];
                    $item=$course;
                    $model=new userCourseModel();
                    $values=['user'=>$_SESSION['logedinUser']['id'],'course'=>$id];
                    $usercourse=new UserCourse($values);
                    $model->insert($usercourse);
                }
                else 
                {
                    $model=new liveModel();
                    $live=$model->find($id)[0];
                    $item=$live;
                    $model=new userLiveModel();
                    $values=['user'=>$_SESSION['logedinUser']['id'],'live'=>$id];
                    $userlive=new UserLive($values);
                    $model->insert($userlive);
                }
            } 
            catch (Exception $ex) 
            {
                echo "something went wrong : ".$ex;
                exit(1);
            }
        }
        $_SESSION['item']=$item;
        $_SESSION['amount']=$payment->getTransactions()[0]->getAmount()->getTotal();
        header('Location:../../?page=succededPayment');
    } 
    else 
    {
        echo "User Cancelled the Approval";
        exit;
    }
}