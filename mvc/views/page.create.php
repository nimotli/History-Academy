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
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
            <form method="post" action="mvc/controllers/PageController.php" id="pageCreateForm">
                <div class="form-group">
                    name :<input name="name" type="text" class="form-control" placeholder="Page name">
                </div>
                <div class="form-group">
                    Content :  <textarea id="summernote" name="editordata"></textarea>
                </div>
                
                <input type="submit" class="btn btn-primary" value="Create" onclick="createPage(event)">
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