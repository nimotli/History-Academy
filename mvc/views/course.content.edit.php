{% extends "layouts/admin.twig" %}

{% block title %}admin{% endblock %}

{% block head %}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
{% endblock %}

{% block content %}
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>edit course content</h1>
            <p>dsfds</p>
            <form method="post" action="mvc/controllers/courseController.php" id="contentCreateForm">
                <div class="form-group">
                    name :<input name="name" type="text" class="form-control" value="{{coursePart['name']}}">
                </div>
                <div class="form-group">
                    description :<textarea name="description"  class="form-control" >{{ coursePart['description'] }}</textarea>
                </div>
                <div class="form-group">
                    Content :  <textarea id="summernote" name="editordata">{{ coursePart['content'] | raw }}</textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Save" onclick="createContent(event)">
                <input type="hidden" name="route" value="content-update">
                <input type="hidden" name="content" value="" id="pageContent">
                <input type="hidden" name="course" value="{{courseId}}">
                <input type="hidden" name="id" value="{{ coursePart['id'] }}">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
   <script src="assets/js/editorLangage.js"></script>
{% endblock %}