{% extends "layouts/admin.twig" %}

{% block title %}اضافة درس مباشر{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1 align="center">درس جديد</h1>
            <p align="center">انشاء درس مباشر جديد</p>
            <form method="post" action="mvc/controllers/liveController.php" id="courseCreateForm">
                <div class="form-group">
                    <p align="right">العنوان</p><input name="name" type="text" class="form-control" placeholder="عنوان الدرس" required>
                </div>
                <div class="form-group">
                <p align="right">الوصف</p><textarea type="text" name="description" class="form-control" placeholder="وصف الدرس" required></textarea>
                </div>
                <div class="form-group">
                <p align="right">الموعد</p><input type="date" name="date" class="form-control" required><input type="time" name="time" class="form-control" required>
                </div>
                <div class="form-group">
                <p align="right">الثمن</p><input type="text" name="price" class="form-control" required>
                </div>
                
                <input type="submit" class="btn btn-primary" value="انشاء" >
                <input type="hidden" name="route" value="live-create">
                <input type="hidden" name="state" value="notDone">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}