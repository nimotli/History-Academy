{% extends "layouts/admin.twig" %}

{% block title %}اضافة محتوى درس{% endblock %}

{% block head %}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
{% endblock %}

{% block content %}
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>اضافة محتوى درس جديد</h1>
            <p></p>
            <form method="post" action="mvc/controllers/courseController.php" id="contentCreateForm">
                <div class="form-group">
                <p align="right">عنوان المحتوى</p><input name="name" type="text" class="form-control" placeholder="Page name" required>
                </div>
                <div class="form-group">
                <p align="right">وصف المحتوى</p><textarea name="description"  class="form-control" required></textarea>
                </div>
                <div class="form-group">
                <p align="right">المحتوى</p><textarea id="summernote" name="editordata" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="اضافة" onclick="createContent(event)">
                <input type="hidden" name="route" value="content-create">
                <input type="hidden" name="content" value="" id="pageContent">
                <input type="hidden" name="course" value="{{courseId}}">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
   <script src="assets/js/editorLangage.js"></script>
{% endblock %}