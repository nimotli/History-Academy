{% extends "layouts/admin.twig" %}

{% block title %}admin{% endblock %}

{% block head %}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>Create a new page</h1>
            <p>Buffer Text.</p>
            <form method="post" action="mvc/controllers/PageController.php" id="pageCreateForm">
                <div class="form-group">
                    name :<input name="name" type="text" class="form-control" value="{{page['name']}}">
                </div>
                <div class="form-group">
                    Content :  <textarea id="summernote" name="editordata">{{page['content']}}</textarea>
                </div>
                
                <input type="submit" class="btn btn-primary" value="Update" onclick="createPage(event)">
                <input type="hidden" name="route" value="update">
                <input type="hidden" name="content" value="" id="pageContent">
                <input type="hidden" name="id" value="{{page['id']}}" >
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
   <script src="assets/js/editorLangage.js"></script>
{% endblock %}