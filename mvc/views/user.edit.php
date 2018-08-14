{% extends "layouts/admin.twig" %}

{% block title %}اضافة مستعمل{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>تعديل مستعمل</h1>
            <p>تعديل مستعمل </p>
            <form method="post" action="mvc/controllers/userController.php">
            <input name="id" type="hidden"  value="{{user.id}}" >
                <div class="form-group">
                <p align="right">اسم المستعمل</p><input name="username" type="text" class="form-control" value="{{user.username}}" required>
                </div>
                <input name="password" type="hidden"  value="{{user.password}}" >
                </div>
                {% if session['logedinUser']['admin']==2 %}
                <div class="form-group">
                <p align="right">البريد الإلكتروني</p><input type="email" name="email" class="form-control" value="{{user.email}}" required>
                </div>
                {% else %}
                <input type="hidden" name="email" class="form-control" value="{{user.email}}" required>
                {% endif %}
                <div class="form-group">
                <p align="right">الاسم</p><input type="text" name="name" class="form-control" value="{{user.name}}">
                </div>
                <div class="form-group">
                <p align="right">النسب</p><input type="text" name="secondName" class="form-control" value="{{user.secondName}}">
                </div>
                <div class="form-group">
                <p align="right">الهاتف</p><input type="text" name="phone" class="form-control" value="{{user.phone}}">
                </div>
                <div class="form-group">
                <p align="right">العنوان</p><input type="text" name="address" class="form-control" value="{{user.address}}">
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
                <input type="submit" class="btn btn-primary" value="حفض">
                <input type="hidden" name="route" value="user-update">
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