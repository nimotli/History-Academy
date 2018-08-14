<?php
session_start();
require_once('../models/courseModel.php');
require_once('../models/categoryModel.php');
require_once('../models/coursePartModel.php');
require_once('../models/userCourseModel.php');
require_once('../models/userModel.php');
if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    switch($_POST['route'])
    {
        case 'delete':
            deleteCourse($_POST['id']);
            break;
        case 'deletecontent':
            deleteContent($_POST['id'],$_POST['course']);
            break;
        case 'course-create':
            createCourse($_POST);
            break;
        case 'update':
            editCourse($_POST);
            break;
        case 'content-create':
            createContent($_POST);
            break;
        case 'content-update':
            updateContent($_POST);
            break;
        case 'filterCourses':
            sendFilterCourses($_POST['category']);
            break;
        case 'affect':
            affectt($_POST['course'],$_POST['user']);
    }
}
else
{
    switch($_GET['action'])
    {
        case 'show':
            showCourses();
            break;
        case 'create':
            addCourse();
            break;
        case 'update':
            updateCourse($_GET['id']);
            break;
        case 'updateContent':
            editCourseContent($_GET['id'],$_GET['course']);
            break;
        case 'present':
            presentCourse();
            break;
        case 'showCourse':
            showCourse($_GET['id']);
            break;
        case 'content':
            showCourseParts($_GET['id']);
            break;
        case 'content-create':
            addCourseParts($_GET['id']);
            break;
        case 'courseParts':
            presentCourseParts($_GET['id']);
            break;
        case 'showCoursePart':
            showCoursePart($_GET['id']);
            break;
        case 'pay':
            initializePay($_GET['id']);
            break;
        case 'afct':
            affecting($_GET['id']);
            break;
    }
}

function validate($course)
{
    $errors=array();
    if(strlen($course['coursename'])<=3)
        array_push($errors,'coursename is too short');
    if(strlen($course['password'])<6)
        array_push($errors,'password is too short');
    if($course['password']!=$course['confirm-password'])
        array_push($errors,'password and confirmation does not match');
    if(!filter_var($course['email'], FILTER_VALIDATE_EMAIL))
        array_push($errors,'email is not valid');
    return $errors;
}

function showCourses()
{
    $model=new CourseModel();
    $courses=$model->all();
    $model=new CategoryModel();
    $categories=$model->all();
    $_SESSION['allCourses']=$courses;
    $cats=array();
    foreach($categories as $Course)
    {
        $cats[$Course['id']]=$Course['name'];
    }
    $_SESSION['categories']=$cats;
    header('Location:../../?page=courses');
}

function deleteCourse($id)
{
    $model=new CourseModel();

    $model->delete($id);
    $_SESSION['success']="course deleted";

    showCourses();
}
function addCourse()
{
    $model=new CategoryModel();
    $categories=$model->all();
    $_SESSION['categories']=$categories;
    header('Location:../../?page=course-create');
}
function createCourse($values)
{
    $course=new Course($values);
    $model=new CourseModel();
    $model->insert($course);
    $_SESSION['success']="course created";

    showCourses();
}
function updateCourse($id)
{
    $model=new CourseModel();
    $course=$model->find($id);
    $cmodel=new CategoryModel();
    $categories=$cmodel->all();
    $_SESSION['categories']=$categories;
    $_SESSION['courseToEdit']=$course[0];
    header('Location:../../?page=course-edit');
}
function editCourse($values)
{
    $course=new Course($values);
    $model=new CourseModel();
    $id=$values['id'];
    unset($values['id']);
    unset($values['route']);
    unset($values['files']);
    $course=array_values($values);
    $model->update($id,$course);
    $_SESSION['success']="course updated";

    showCourses();
}

function editCourseContent($id,$cr)
{
    $model=new coursePartModel();
    $coursePart=$model->find($id);
    $_SESSION['coursePart']=$coursePart[0];
    $_SESSION['courseId']=$cr;
    header('Location:../../?page=coursePart-edit');
}

function presentCourse()
{
    $model=new CourseModel();
    $courses=$model->all();
    $model=new CategoryModel();
    $categories=$model->all();
    $_SESSION['courses']=$courses;
    $_SESSION['categories']=$categories;
    header('Location:../../?page=courses-p');
}

function showCourseParts($id)
{
    $model=new coursePartModel();
    $courseParts=$model->all();
    $cps=array();
    
    foreach($courseParts as $cp)
    {
        if($cp['course']==$id)
        {
            array_push($cps,$cp);
        }
    }
    $_SESSION['courseParts']=$cps;
    $_SESSION['courseId']=$id;
    header('Location:../../?page=coursesCourse');
}

function addCourseParts($id)
{
    $_SESSION['courseId']=$id;
    header('Location:../../?page=addCoursePart');
}
function createContent($values)
{
    $coursePart=new CoursePart($values);
    $model=new coursePartModel();
    unset($values['editordata']);
    unset($values['route']);
    unset($values['files']);
    
    $model->insert($coursePart);
    showCourseParts($values['course']);
}
function deleteContent($id,$course)
{
    $model=new coursePartModel();
    $model->delete($id);
    $_SESSION['success']="course part deleted";

    showCourseParts($course);
}
function updateContent($values)
{
    $course=new CoursePart($values);
    $model=new coursePartModel();
    $id=$values['id'];
    unset($values['id']);
    unset($values['route']);
    unset($values['files']);
    unset($values['editordata']);
    $course=array_values($values);
    $model->update($id,$course);
    $_SESSION['success']="course updated";

    showCourseParts($values['course']);
}
function presentCourseParts($id)
{
    $type="visit";
    $model=new courseModel();
    $course=$model->find($id)[0];
    $model=new coursePartModel();
    $courseParts=$model->all();
    $model=new userCourseModel();
    $userCourses=$model->all();
    $cps=array();
    
    foreach($courseParts as $cp)
    {
        if($cp['course']==$id)
        {
            array_push($cps,$cp);
        }
    }

    foreach($userCourses as $userCourse)
    {
        if($userCourse['user']==$_SESSION['logedinUser']['id'])
        {
            if($userCourse['course']==$id)
            {
                $type="baught";
            }
        }
    }
    $_SESSION['course']=$course;
    $_SESSION['coursePart']=$cps;
    $_SESSION['courseId']=$id;
    $_SESSION['type']=$type;
    header('Location:../../?page=courseContent');
}
function showCoursePart($id)
{
    $model=new coursePartModel();
    $coursePart=$model->find($id)[0];
    $_SESSION['coursePart']=$coursePart;
    header('Location:../../?page=coursePart');
}
function sendFilterCourses($category)
{
    $formedDate="";
    $model=new CourseModel();
    $courses=$model->all();
    if($category != -1)
    {
        foreach($courses as $course)
        {
            if($course['category']==$category)
            {
                $formedDate.='
                <div class="col-xl-4 my-2" id="courseHolder">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header bg-dark">
                            <a href="mvc/controllers/courseController.php?action=courseParts&id='.$course['id'].'">'.$course['name'].'</a>
                        </div>
                        <div class="card-body">
                            <p>'.substr($course['description'],0,100).'</p>
                        </div>
                        <div class=" bg-dark rounded-bottom pt-3" style>
                            <center><p style="color:#fed136;">'.$course['price'].' $</p></center>
                        </div>
                    </div>
                </div>
                ';
            }
        }
    }
    else
    {
        foreach($courses as $course)
        {
            $formedDate.='
            <div class="col-xl-4 my-2" id="courseHolder">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-dark">
                        <a href="mvc/controllers/courseController.php?action=courseParts&id='.$course['id'].'">'.$course['name'].'</a>
                    </div>
                    <div class="card-body">
                        <p>'.substr($course['description'],0,100).'</p>
                    </div>
                    <div class=" bg-dark rounded-bottom pt-3" style>
                        <center><p style="color:#fed136;">'.$course['price'].' $</p></center>
                    </div>
                </div>
            </div>
            ';
        }
    }
    echo $formedDate;
}

function initializePay($id)
{
    $model=new courseModel();
    $course=$model->find($id)[0];
    $_SESSION['course']=$course;

    header('Location:../../?page=pay&for=course');
}
function affectt($course,$us)
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
    $userLive=new UserCourse(['user'=>$finaluser,'course'=>$course]);
    $model=new userCourseModel();
    $model->insert($userLive);
    showCourses();
}
function affecting($cour)
{
    $model=new userModel();
    $users=$model->all();
    $model=new courseModel();
    $course=$model->find($cour)[0];
    $_SESSION['course']=$course;
    header('Location:../../?page=affectuserCourse');
}