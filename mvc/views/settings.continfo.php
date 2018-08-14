{% extends "layouts/admin.twig" %}

{% block title %}اعدادات الصفحة الرئيسية{% endblock %}

{% block head %}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>اعدادات</h1>
            <p>الصفحة ال7</p>
            <form method="post" action="mvc/controllers/settingController.php" id="courseCreateForm">
                <div class="form-group">
                <p align="right">المحتوى</p><textarea id="summernote" name="homeContent" required>{{setting['homeContent']}}</textarea>
                </div>
                
                <input type="submit" class="btn btn-primary" value="حفض" >
                <input type="hidden" name="route" value="cont">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
{% endblock %}