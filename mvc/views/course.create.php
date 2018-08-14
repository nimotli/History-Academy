{% extends "layouts/admin.twig" %}

{% block title %}اضافة درس{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>اضافة درس</h1>
            <p>اضافة درس جديد</p>
            <form method="post" action="mvc/controllers/courseController.php" id="courseCreateForm">
                <div class="form-group">
                <p align="right">العنوان</p><input name="name" type="text" class="form-control" placeholder="course name" required>
                </div>
                <div class="form-group">
                <p align="right">الوصف</p><textarea name="description" class="form-control" placeholder="course description" required></textarea>
                </div>
                <div class="form-group">
                <p align="right">الفئة</p>
                    <select name="category" class="form-control" required>
                    {% for category in categories %}
                        <option value="{{category['id']}}">{{category['name']}}</option>
                    {% endfor %}
                    </select>
                </div>
                <div class="form-group">
                <p align="right">الثمن</p><input name="price" type="number" class="form-control" required>
                </div>
                
                <input type="submit" class="btn btn-primary" value="اضافة" >
                <input type="hidden" name="route" value="course-create">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}