{% extends "layouts/admin.twig" %}

{% block title %}اعدادات{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>اعدادات</h1>
            <p>ادارة اعدادات الموقع</p>
            <div class="row">
                <div class="col-md-6 border py-3">
                    <h5>اعدادات الموقع</h5><br>
                    <p><b>اسم الموقع</b> {{setting['siteName']}}</p>
                    <p><b>وصف الموقع</b> {{setting.siteDescription}}</p>
                    <p><b>الكلمات المفتاحية</b> {{setting.siteKeywords}}</p>
                    <p><b>رسالة الترحيب</b> {{setting.welcomeMsg}}</p>
                    <p><b>رسالة الترحيب الثانية</b> {{setting.welcomeMsg2}}</p><br>
                    <a href="mvc/controllers/settingController.php?action=changesite">تغيير</a>
                </div>
                <div class="col-md-6 border py-3">
                    <h5>اعدادات الدفع</h5><br>
                    <p><b>رقم الحساب البنكي</b> {{setting.bank}}</p>
                    <p><b>البريد الالكتروني</b> {{setting.email}}</p>
                    <p><b>الاسم</b> {{setting.name}}</p><br>
                    <a href="mvc/controllers/settingController.php?action=changepay">تغيير</a>
                </div>
                <div class="col-md-12 border py-3">
                    <h5>محتوا الصفحة الرئيسية</h5>
                    <p><b>المحتوا</b></p><br>
                    <a href="mvc/controllers/settingController.php?action=changecont">تغيير</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}