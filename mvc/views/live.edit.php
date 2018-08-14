{% extends "layouts/admin.twig" %}

{% block title %}تعديل درس مباشر{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1 align="center"> تغيير درس</h1>
            <p align="center">تغيير درس مباشر </p>
            <form method="post" action="mvc/controllers/liveController.php" id="courseCreateForm">
                <div class="form-group">
                    <p align="right">العنوان</p><input name="name" type="text" class="form-control"  value="{{live.name}}" required>
                </div>
                <div class="form-group">
                <p align="right">الوصف</p><textarea type="text" name="description" class="form-control" required>{{live.description}}</textarea>
                </div>
                <div class="form-group">
                <p align="right">الموعد</p><input type="date" name="date" class="form-control" value="{{live.date}}" required><input type="time" name="time" value="{{live.time}}" required>
                </div>
                <input type="hidden" name="state" value="notDone">
                <div class="form-group">
                <p align="right">الثمن</p><input type="text" name="price" class="form-control" value="{{live.price}}" required>
                </div>
                <input type="submit" class="btn btn-primary" value="تغيير" >
                <input type="hidden" name="route" value="live-update">
                <input type="hidden" name="id" value="{{live.id}}">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}