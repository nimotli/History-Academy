{% extends "layouts/admin.twig" %}

{% block title %}تعديل درس{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>تعديل درس</h1>
            <p></p>
            <form method="post" action="mvc/controllers/courseController.php" id="courseCreateForm">
                <div class="form-group">
                <p align="right">العنوان</p><input name="name" type="text" class="form-control" value="{{course['name']}}" required>
                </div>
                <div class="form-group">
                <p align="right">الوصف</p><textarea name="description" class="form-control" required>{{course['description']}}</textarea>
                </div>
                <div class="form-group">
                <p align="right">الفئة</p>
                    <select name="category" class="form-control" required>
                    {% for category in categories %}
                        <option value="{{category['id']}}" {% if course['category'] == category['id'] %} selected {% endif %} >{{ category['name'] }}</option>
                    {% endfor %}
                    </select>
                </div>
                <div class="form-group">
                <p align="right">الثمن</p><input name="price" type="number" class="form-control" value="{{course['price']}}" required>
                </div>
                
                <input type="submit" class="btn btn-primary" value="حفض" >
                <input type="hidden" name="route" value="update">
                <input type="hidden" name="id" value="{{course['id']}}">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}