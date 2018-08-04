{% extends "layouts/admin.twig" %}

{% block title %}admin{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>Create a new category</h1>
            <p>Buffer text</p>
            <form method="post" action="mvc/controllers/categoryController.php" id="categoryCreateForm">
                <div class="form-group">
                    name :<input name="name" type="text" class="form-control" value="{{category['name']}}">
                </div>
                
                <input type="submit" class="btn btn-primary" value="Save" >
                <input type="hidden" name="route" value="update">
                <input type="hidden" name="id" value="{{category['id']}}" >
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}