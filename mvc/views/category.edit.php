{% extends "layouts/admin.twig" %}

{% block title %}تعديل فئة{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>تعديل فئة</h1>
            <p></p>
            <form method="post" action="mvc/controllers/categoryController.php" id="categoryCreateForm">
                <div class="form-group">
                <p align="right">اسم الفئة</p><input name="name" type="text" class="form-control" value="{{category['name']}}" required>
                </div>
                
                <input type="submit" class="btn btn-primary" value="حفض" >
                <input type="hidden" name="route" value="update">
                <input type="hidden" name="id" value="{{category['id']}}" >
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}