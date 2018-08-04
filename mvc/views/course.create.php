{% extends "layouts/admin.twig" %}

{% block title %}admin{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>Create a new course</h1>
            <p>Buffer text</p>
            <form method="post" action="mvc/controllers/courseController.php" id="courseCreateForm">
                <div class="form-group">
                    name :<input name="name" type="text" class="form-control" placeholder="course name">
                </div>
                <div class="form-group">
                    description :<textarea name="description" class="form-control" placeholder="course description"></textarea>
                </div>
                <div class="form-group">
                    Category :
                    <select name="category" class="form-control">
                    {% for category in categories %}
                        <option value="{{category['id']}}">{{category['name']}}</option>
                    {% endfor %}
                    </select>
                </div>
                <div class="form-group">
                    price :<input name="price" type="number" class="form-control" >
                </div>
                
                <input type="submit" class="btn btn-primary" value="Create" >
                <input type="hidden" name="route" value="course-create">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}