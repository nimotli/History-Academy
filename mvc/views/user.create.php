{% extends "layouts/admin.twig" %}

{% block title %}اضافة مستعمل{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>اضافة مستعمل</h1>
            <p>اضافة مستعمل جديد</p>
            <form method="post" action="mvc/controllers/userController.php">
                <div class="form-group">
                <p align="right">اسم المستعمل</p><input name="username" type="text" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                <p align="right">كلمة المرور</p><input name="password" type="password" class="form-control" required>
                </div>
                <div class="form-group">
                <p align="right">تأكيد كلمة المرور</p><input type="password" name="confirm-password" class="form-control" required>
                </div>
                {% if session['logedinUser']['admin']==2 %}
                <div class="form-group">
                <p align="right">البريد الإلكتروني</p><input type="email" name="email" class="form-control"  required>
                </div>
                {% else %}
                <input type="hidden" name="email" class="form-control" value=" " required>
                {% endif %}
                <div class="form-group">
                <p align="right">الاسم</p><input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                <p align="right">النسب</p><input type="text" name="secondName" class="form-control">
                </div>
                <div class="form-group">
                <p align="right">العنوان</p><input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                <p align="right">الهاتف</p><input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                <p align="right">النوع</p><select name="type" class="form-control">
                {% if session['logedinUser']['admin']==2 %}
                        <option value="2">مدير عام</option>
                {% endif %}
                        <option value="1">مدير</option>
                        <option value="0">عميل</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="اضافة">
                <input type="hidden" name="route" value="user-create">
            </form>
        </div>
    </div>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}