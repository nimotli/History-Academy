{% extends "layouts/admin.twig" %}

{% block title %}اضافة صفحة{% endblock %}

{% block head %}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>اضافة صفحة</h1>
            <p>اضافة صفحة جديدة</p>
            <form method="post" action="mvc/controllers/pageController.php" id="pageCreateForm">
                <div class="form-group">
                <p align="right">اسم الصفحة</p><input name="name" type="text" class="form-control" placeholder="Page name" required>
                </div>
                <div class="form-group">
                <p align="right">المحتوى</p><textarea id="summernote" name="editordata" required></textarea>
                </div>
                
                <input type="submit" class="btn btn-primary" value="اضافة" onclick="createPage(event)">
                <input type="hidden" name="route" value="page-create">
                <input type="hidden" name="content" value="" id="pageContent">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
   <script src="assets/js/editorLangage.js"></script>
{% endblock %}