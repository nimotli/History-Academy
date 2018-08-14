{% extends "layouts/admin.twig" %}

{% block title %}الدروس{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- course Content -->
    <div id="course-content-wrapper">
        <div class="container-fluid">
            <h1>اضافة مستخدم</h1>
            <p>اضافة مستخدم للدرس {{course.name}}</p>
            <div class="row">
            <div class="col">
            <form action="mvc/controllers/courseController.php" method="post" id="deleteUserForm">
            <p align="right">اسم المستخدم</p><input type="text" name="user" id="username" class="form-control" required>
        <input class="btn btn-primary" type="submit" value="اضافة">
        <input type="hidden" name="route" value="affect">
        <input type="hidden" name="course" value="{{course.id}}">
    </form>
                </div></div>
        </div>
    </div>
    
    
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}