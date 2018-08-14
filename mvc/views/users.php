{% extends "layouts/admin.twig" %}

{% block title %}المستخدمين{% endblock %}

{% block head %}
    
{% endblock %}

{% block content %}


    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h1>المستخدمين</h1>
            <p>ادارة المستخدمين</p>
            <a href="?page=user-create" class="btn btn-success float-right">مستخدم جديد</a>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        {% if session['logedinUser']['admin']==2 %}<th>البريد الالكتروني</th>{% endif %}
                        <th>اسم المستخدم</th>
                        <th>الاسم</th>
                        <th>النسب</th>
                        <th>العنوان</th>
                        <th>رقم الهاتف</th>
                        <th>النوع</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                    <tr>
                        <td>{{ user.id}}</td>
                        {% if session['logedinUser']['admin']==2 %}<td>{{ user.email}}</td>{% endif %}
                        <td>{{ user.username}}</td>
                        <td>{{ user.name}}</td>
                        <td>{{ user.secondName}}</td>
                        <td>{{ user.address}}</td>
                        <td>{{ user.phone}}</td>
                        <td>
                        {% if user.admin == 2 %}
                            مدير عام
                        {% elseif user.admin == 1 %}
                            مدير
                        {% else %} 
                            عميل 
                        {%endif%}
                        </td>
                        <td><a class="btn btn-primary" href="mvc/controllers/userController.php?action=edit&id={{ user.id }}">تغيير</a><a class="btn btn-danger"  onclick="deleteEntity(event,{{ user.id }})">محو</a></td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <form action="mvc/controllers/userController.php" method="post" id="deleteUserForm">
        <input type="hidden" name="route" value="delete">
        <input type="hidden" name="id" value="" id="deleteId">
    </form>
{% endblock %}
{% block footerinc %}
   {{ parent() }} 
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{% endblock %}