{% extends "layouts/admin.twig" %}

{% block title %}اضافة فئة{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>اضافة فئة</h1>
            <p>اضافة فئة جديدة</p>
            <form method="post" action="mvc/controllers/categoryController.php" id="categoryCreateForm">
                <div class="form-group">
                    <p align="right">اسم الفئة</p><input name="name" type="text" class="form-control" placeholder="category name" required>
                </div>
                
                <input type="submit" class="btn btn-primary" value="اضافة" >
                <input type="hidden" name="route" value="category-create">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}