{% extends "layouts/admin.twig" %}

{% block title %}اعدادات الموقع{% endblock %}

{% block head %}
{% endblock %}

{% block content %}


    <!-- category Content -->
    <div id="category-content-wrapper">
        <div class="container-fluid">
            <h1>اعدادات</h1>
            <p>معلومات الدفع</p>
            <form method="post" action="mvc/controllers/settingController.php" id="courseCreateForm">
                <div class="form-group">
                <p align="right">رقم الحساب البنكي</p><input name="bank" type="text" class="form-control" value="{{setting['bank']}}" required>
                </div>
                <div class="form-group">
                <p align="right">البريد الإلكتروني</p><input type="email" name="email" class="form-control" value="{{setting['email']}}" required>
                </div>
                <div class="form-group">
                <p align="right">الاسم الكامل</p><input type="text" name="name" class="form-control" value="{{setting['name']}}" required>
                </div>
                
                <input type="submit" class="btn btn-primary" value="حفض" >
                <input type="hidden" name="route" value="pay">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}

   {{ parent() }} 
{% endblock %}