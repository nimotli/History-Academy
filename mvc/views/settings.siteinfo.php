{% extends "layouts/admin.twig" %}

{% block title %}اعدادات الموقع{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>اعدادات</h1>
            <p>معلومات الموقع</p>
            <form method="post" action="mvc/controllers/settingController.php" id="courseCreateForm">
                <div class="form-group">
                <p align="right">اسم الموقع</p><input name="siteName" type="text" class="form-control" value="{{setting['siteName']}}" required>
                </div>
                <div class="form-group">
                <p align="right">وصف الموقع</p><input type="text" name="siteDescription" class="form-control" value="{{setting['siteDescription']}}" required>
                </div>
                <div class="form-group">
                <p align="right">الكلمات المفتاحية</p><input type="text" name="siteKeywords" class="form-control" value="{{setting['siteKeywords']}}" required>
                </div>
                <div class="form-group">
                <p align="right">رسالة الترحيب</p><input type="text" name="welcomeMsg" class="form-control" value="{{setting['welcomeMsg']}}" required>
                </div>
                <div class="form-group">
                <p align="right">رسالة الترحيب الثانية</p><input type="text" name="welcomeMsg2" class="form-control" value="{{setting['welcomeMsg2']}}" required>
                </div>
                
                <input type="submit" class="btn btn-primary" value="حفض" >
                <input type="hidden" name="route" value="site">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}